<?php

namespace App\Http\Controllers;

use App\Models\CategoryTraining;
use Illuminate\Http\Request;
use App\Models\Training;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class TrainingController extends Controller
{
    public function adminTraining()
    {
        $training = Training::all();
        return view('admin.training.training', compact('training'));
    }

    public function createTrainingPage()
    {
        return view('admin.training.createTrainingPage');
    }

    public function createTraining(Request $request)
    {
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
            // 'pict_training' => 'required',
            'desc_training' => 'required',
            'shortdesc_training' => 'required',
            'date_training' => 'required',
            'location_training' => 'required',
        ]);

    // Menambahkan id_category ke dalam request jika perlu
    $request->merge([
        'id_category' => 1,
        'slug_training' => Str::slug($request->title_training),
        'pict_training' => 'dummy',]);
                dd($request);


                Training::create([
                    // 'id_category' => $request->id_category,
                    'title_training' => $request->title_training,
                    'slug_training' => $request->slug_training, // Anda harus memastikan bahwa nilai slug_training diisi dengan benar, atau jika Anda menggunakan metode Eloquent Model mutator, biarkan saja.
                    'pict_training' => $request->pict_training,
                    'desc_training' => $request->desc_training,
                    'shortdesc_training' => $request->shortdesc_training,
                    'date_training' => $request->date_training,
                    'location_training' => $request->location_training,
                ]);


        return redirect()->route('admin.training');

    }

    public function editTrainingPage($id) {
        // dd($id);
        $encryptedId = Crypt::decrypt($id);
        $training = Training::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.training.trainingUpdate', compact('training'), ['encryptedId' => $encryptedId]);

        // return view('edit-blog', ['encryptedId' => $encryptedId]);
    }

    public function editTraining(Request $request, $id) {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required',
        //     'desc' => 'required',
        // ]);

        // dd($request->all());
        $training = Training::find($id);

        $training->title_training = $request->title_training;
        $training->desc_training = $request->desc_training;
        $training->shortdesc_training = $request->shortdesc_training;
        $training->date_training = $request->date_training;
        $training->location_training = $request->location_training;



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



}
