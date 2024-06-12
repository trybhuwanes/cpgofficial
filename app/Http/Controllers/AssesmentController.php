<?php

namespace App\Http\Controllers;

use App\Models\AssesmentCenter;
use App\Models\SyaratAssesment;
use App\Models\UkAssesment;
use App\Models\CategoryTraining;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AssesmentController extends Controller
{
    //
    public function index()
    {
        $assesment = AssesmentCenter::all();
        return view('assesmentPage', compact(['assesment']));
    }

    public function detailAssesmentPage($slug)
    {
        $assesment = AssesmentCenter::where('slug', $slug)->first();
        // $id = AssesmentCenter::getIdByName($slug);
        $syarat = SyaratAssesment::where('assesment_center_id', $assesment->id)->get();
        // $syarat = DB::table('assesment_centers')
        //     ->join('syarat_assesment', 'assesment_centers.id', '=', 'syarat_assesment.assesment_center_id')
        //     ->select('assesment_centers.*', 'syarat_assesment.syarat')
        //     ->get();
        return view('assesmentDetailPage', compact(['assesment', 'syarat']));
    }



    public function adminAssesment()
    {
        $assesment = AssesmentCenter::all();
        // dd($assesment);
        return view('admin.assesment.assesment', compact('assesment'));
    }

    public function createAssesmentPage()
    {
        // $categories = CategoryTraining::all();
        // dd($categories);
        return view('admin.assesment.assesmentCreate');
    }

    public function createAssesment(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title_assessment' => 'required',
            'desc_assessment' => 'required',
            'importance' => 'required',
            'pict_assesment' => 'required|image|mimes:jpeg,png,jpg',
            'pict_agenda' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $request->merge([
            'slug' => Str::slug($request->title_assessment),
        ]);

        $path = 'assets/img/';

        $pictAssesment = $request->file('pict_assesment');
        $fileNameAssesment = $request->slug . '-pict' . '.' . $pictAssesment->extension();
        $pictAssesment->move($path, $fileNameAssesment);

        $pictAgenda = $request->file('pict_agenda');
        $fileNameAgenda = $request->slug . '-agenda' . '.' . $pictAgenda->extension();
        $pictAgenda->move($path, $fileNameAgenda);

        $assesment = new AssesmentCenter();
        // $assesment->id_category = $request->category;
        $assesment->title = $request->title_assessment;
        $assesment->slug = $request->slug;
        $assesment->desc = $request->desc_assessment;
        $assesment->importance = $request->importance;
        $assesment->pict = $path.$fileNameAssesment;
        $assesment->pictagenda = $path.$fileNameAgenda;
        $assesment->save();

        for ($i = 0; $i < $request->jumlah_syarat; $i++) {
            SyaratAssesment::create([
                'syarat' => $request->input("syarat_" . ($i + 1)),
                'assesment_center_id' => $assesment->id,
            ]);
        }

        // for ($i = 0; $i < $request->jumlah_uk; $i++) {
        //     UkAssesment::create([
        //         'uk' => $request->input("uk_" . ($i + 1)),
        //         'assesment_center_id' => $assesment->id,
        //     ]);
        // }

        return redirect()->route('admin.assesment');
    }

    public function editAssesmentPage($id)
    {
        $encryptedId = Crypt::decrypt($id);
        $assesment = AssesmentCenter::find($encryptedId);
        $syarat = SyaratAssesment::where('assesment_center_id', $encryptedId)->get();
        // $uk = UkAssesment::where('assesment_center_id', $encryptedId)->get();
        // dd($id, $decrypted, $assesment);
        return view('admin.assesment.assesmentUpdate', compact('assesment', 'syarat'), ['encryptedId' => $encryptedId]);
    }

    public function editAssesment(Request $request, $id)
    {
        $assesment = AssesmentCenter::find($id);
        
        $request->validate([
            'title_assesment' => 'required',
            'desc_assesment' => 'required',
            'importance' => 'required',
        ]);
        
        $request->merge([
            'slug' => Str::slug($request->title_assessment),
        ]);
        
        $path = 'assets/img/';
        
        if($request->file('pict_assesment')){
            // delete old image
            Storage::delete($assesment->pict);
            
            // upload image
            $pictAssesment = $request->file('pict_assesment');
            $fileNameAssesment = $request->slug . '-pict' . '.' . $pictAssesment->extension();
            $pictAssesment->move($path, $fileNameAssesment);
        
            // update post data image
            $assesment->update([
                'pict'   => $path.$fileNameAssesment,
            ]);
        }
        
        if($request->file('pict_agenda')){
            // delete old image
            Storage::delete($assesment->pictagenda);
            
            // upload image
            $pictAgenda = $request->file('pict_agenda');
            $fileNameAgenda = $request->slug . '-agenda' . '.' . $pictAgenda->extension();
            $pictAgenda->move($path, $fileNameAgenda);
        
            // update post data image
            $assesment->update([
                'pictagenda'   => $path.$fileNameAgenda,
            ]);
        }
        
        $assesment->update(
            [
                'title' => $request->title_assesment,
                'desc' => $request->desc_assesment,
                'importance' => $request->importance,
            ]
        );
        $assesment->save();

        // dd($assesment);

        return redirect()->route('admin.assesment');
    }

    public function syaratAssesmentPage($id)
    {
        $assesment = AssesmentCenter::find($id);

        return view('admin.assesment.syaratAssesmentPage', compact('assesment'));
    }

    public function syaratAssesment(Request $request, $id)
    {

        // dd($request->all());
        $request->validate([
            'syarat' => 'required|string|max:255',
        ]);
        // dd($id);

        SyaratAssesment::create([
            'syarat' => $request->syarat,
            'assesment_center_id' => $id,
        ]);

        // $encryptedId = Crypt::decrypt($id);
        // $syarat = new SyaratAssesment();
        // $syarat->syarat = $request->syarat;
        // $syarat->assesment_center_id = $encryptedId;
        // $syarat->save();

        $encryptedId = Crypt::encrypt($id);


        // Mengarahkan pengguna kembali ke halaman edit asesmen dengan parameter ID yang sama
        return redirect()->route('admin.assesment.edit.page', ['id' => $encryptedId]);
    }

    public function deleteAssesment($id)
    {
        $encryptedId = Crypt::decrypt($id);

        // Hapus baris-baris terkait di tabel 'uk_assesment'
        // UkAssesment::where('assesment_center_id', $encryptedId)->delete();

        SyaratAssesment::where('assesment_center_id', $encryptedId)->delete();

        // Hapus baris dari tabel 'AssesmentCenter'
        AssesmentCenter::find($encryptedId)->delete();
        //  dd($encryptedId);
        return view('admin.assesment.assesment');
    }
    public function deleteSyaratAssesment($id, $assesmentId)
    {
        $encryptedId = Crypt::decrypt($id);
        $encryptedIdAssesment = Crypt::decrypt($assesmentId);
        // Hapus baris-baris terkait di tabel 'uk_assesment'

        SyaratAssesment::where('assesment_center_id', $encryptedIdAssesment)
            ->where('id', $encryptedId)
        ->delete();


        // Hapus baris dari tabel 'AssesmentCenter'
        //  dd($encryptedId);
        $encryptedId = Crypt::encrypt($id);

        return redirect()->route('admin.assesment.edit.page', ['id' => $assesmentId]);
    }
}
