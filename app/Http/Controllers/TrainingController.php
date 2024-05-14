<?php

namespace App\Http\Controllers;

use App\Models\CategoryTraining;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\TrainingCategory;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class TrainingController extends Controller
{

    public function trainingPage() {
        $training = Training::all();
        $category = CategoryTraining::all();
        return view('trainingPage', compact(['training', 'category']));
    }

    public function trainingByCategory(Request $request)
    {
        // dd($request->all());
        $category = CategoryTraining::where('name_category', $request->category)->first();
        // dd($category);
        $training = Training::where('id_category', $category->id)->get();
        $category = CategoryTraining::all();

        return view('trainingPage', compact(['training', 'category']));
    }

    public function trainingDetailPage($slug) {
        $training = Training::where('slug_training', $slug)->first();
        return view('trainingDetailPage')->with('training', $training);
    }

    // ADMIN FUNCTION
    public function adminTraining()
    {
        $training = Training::all();
        return view('admin.training.training', compact('training'));
    }

    public function createTrainingPage()
    {
        $categories = CategoryTraining::all();

        return view('admin.training.createTrainingPage', compact('categories'));
    }

    public function createTraining(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'pict_training' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan aturan validasi untuk file gambar
        //     // Aturan validasi lainnya untuk input lainnya
        // ], [
        //     'pict_training.required' => 'The photo field is required.',
        //     'pict_training.image' => 'The photo must be an image.',
        //     'pict_training.mimes' => 'The photo must be a file of type: jpeg, png, jpg, gif.',
        //     'pict_training.max' => 'The photo may not be greater than 2MB in size.',
        //     // Pesan validasi untuk aturan lainnya
        // ]);

        $request->validate([
            // 'id_category' => 'required',
            'title_training' => 'required',
            // 'slug_training' => 'required',
            'pict_training' => 'required|image|mimes:jpeg,png,jpg',
            'desc_training' => 'required',
            'shortdesc_training' => 'required',
            'date_training' => 'required',
            'location_training' => 'required',
            'link_pendaftaran' => 'required',
        ]);

        // Menambahkan id_category ke dalam request jika perlu
        $request->merge([
            'slug_training' => Str::slug($request->title_training),
        ]);

        $pictTraining = $request->file('pict_training');
        $fileName = $request->slug_training . '-pict' . '.' . $pictTraining->extension();
        $pictTraining->move(public_path('assets/img'), $fileName);

        $training = new Training();
        $training->id_category = $request->category;
        $training->title_training = $request->title_training;
        $training->slug_training = $request->slug_training;
        $training->pict_training = $fileName;
        $training->desc_training = $request->desc_training;
        $training->shortdesc_training = $request->shortdesc_training;
        $training->date_training = $request->date_training;
        $training->location_training = $request->location_training;
        $training->link_pendaftaran = $request->link_pendaftaran;
        $training->save();

        return redirect()->route('admin.training');

    }

    public function editTrainingPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $training = Training::find($encryptedId);
        return view('admin.training.trainingUpdate', compact('training'), ['encryptedId' => $encryptedId]);
    }

    public function editTraining(Request $request, $id) {
        $training = Training::find($id);

        $request->merge([
            'slug_training' => Str::slug($request->title_training),
        ]);

        if($request->file('pict_training')){
            // upload image
            $pictTraining = $request->file('pict_training');
            $fileName = $request->slug_training . '-pict' . '.' . $pictTraining->extension();
            $pictTraining->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $training->pict_training);
        
            // update post data image
            $training->update([
                'pict_training'   => $fileName,
            ]);
        }

        $training->title_training = $request->title_training;
        $training->slug_training = $request->slug_training;
        $training->desc_training = $request->desc_training;
        $training->shortdesc_training = $request->shortdesc_training;
        $training->date_training = $request->date_training;
        $training->location_training = $request->location_training;
        $training->link_pendaftaran = $request->link_pendaftaran;
        $training->updated_at = now();
        $training->save();

        return redirect()->route('admin.training');
    }

    // public function deleteTraining($id) {
    //     $encryptedId = Crypt::decrypt($id);
    //     // dd($encryptedId);
    //     $training = Training::find($encryptedId);
    //     dd($training,);
    //     $training->delete();

    //     // Training::find($encryptedId)->delete();
    //     return redirect()->route('admin.training');
    // }

    public function deleteTraining($id) {
        try {
            $encryptedId = Crypt::decrypt($id);
            $training = Training::find($encryptedId);

            if (!$training) {
                // Data tidak ditemukan, kembalikan ke halaman sebelumnya
                return redirect()->back()->with('error', 'Training not found.');
            }

            $training->delete();
            return redirect()->route('admin.training')->with('success', 'Training deleted successfully.');
        } catch (DecryptException $e) {
            // Kesalahan dekripsi, kembalikan ke halaman sebelumnya
            return redirect()->back()->with('error', 'Invalid ID.');
        } catch (\Exception $e) {
            // Kesalahan umum, tangani dengan menampilkan pesan kesalahan
            return redirect()->back()->with('error', 'An error occurred while deleting the training.');
        }
    }


    // CATEGORY TRAINING
    public function adminCategoryTraining()
    {
        $category = CategoryTraining::all();
        return view('admin.training.category.category', compact('category'));
    }

    public function createCategoryPage() {
        return view('admin.training.category.createCategoryPage');
    }

    public function storeCategory(Request $request) {
        $request->validate([
            'name_category' => 'required',
        ]);

        try {
            CategoryTraining::create([
                'name_category' => $request->name_category,
            ]);
            return redirect()->route('admin.training.category');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.training.category', 'Data gagal ditambahkan');
        }
    }

    public function editCategoryPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $category = CategoryTraining::find($encryptedId);
        return view('admin.training.category.editCategoryPage', compact('category'), ['encryptedId' => $encryptedId]);
    }

    public function updateCategory(Request $request, $id) {
        $category = CategoryTraining::find($id);

        $category->name_category = $request->name_category;
        $category->updated_at = now();
        $category->save();
        return redirect()->route('admin.training.category');
    }

    public function deleteCategory($id) {
        $encryptedId = Crypt::decrypt($id);
        CategoryTraining::find($encryptedId)->delete();
        return redirect()->route('admin.training.category');
    }


}
