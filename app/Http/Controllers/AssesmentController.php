<?php

namespace App\Http\Controllers;

use App\Models\AssesmentCenter;
use App\Models\SyaratAssesment;
Use App\Models\UkAssesment;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    //
    public function index() {
        $assesment = AssesmentCenter::all();
        return view('assesmentPage', compact(['assesment']));
    }

    public function detailAssesmentPage($id) {
        $assesment = AssesmentCenter::whereId($id)->first();
        return view('assesmentDetailPage')->with('assesment', $assesment);
    }

    public function adminAssesment() {
        $assesment = AssesmentCenter::all();
        // dd($assesment);
        return view('admin.assesment.assesment', compact('assesment'));
    }

    public function editAssesmentPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $assesment = AssesmentCenter::find($encryptedId);
        $syarat = SyaratAssesment::where('assesment_center_id', $encryptedId)->get();
        $uk = UkAssesment::where('assesment_center_id', $encryptedId)->get();
        // dd($id, $decrypted, $assesment);
        return view('admin.assesment.assesmentUpdate', compact('assesment', 'syarat', 'uk'), ['encryptedId' => $encryptedId]);

        // return view('edit-blog', ['encryptedId' => $encryptedId]);
    }

    public function editAssesment(Request $request, $id) {
        $request->validate([
            'title_assesment' => 'required',
            'desc_assesment' => 'required',
            'importance' => 'required',
        ]);

        // dd($request->all());

        $syarat = SyaratAssesment::where('assesment_center_id', $id)->get();
        $uk = UkAssesment::where('assesment_center_id', $id)->get();

        // dd($syarat);

        foreach ($syarat as $key => $value) {
            // dd($value->syarat);

            // dd($value);

            // dd($request->input("syarat_".($key+1)));


            if ($value->syarat == $request->input("syarat_".($key+1))) {


                # code...
            } else {
                $value->update([
                    'syarat' => $request->input("syarat_".($key+1)),
                ]);

                $value->save();

                # code...
            }

            # code...
        }

        foreach ($uk as $key => $value) {
            // dd($value->syarat);

            // dd($value);

            // dd($request->input("syarat_".($key+1)));


            if ($value->uk == $request->input("uk_".($key+1))) {


                # code...
            } else {
                $value->update([
                    'uk' => $request->input("uk_".($key+1)),
                ]);

                $value->save();

                # code...
            }

            # code...
        }

        // $encryptedId = Crypt::decrypt($id);
        // dd($request->all());
        $assesment = AssesmentCenter::find($id);
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

    public function syaratAssesmentPage($id) {
        $assesment = AssesmentCenter::find($id);

        return view('admin.assesment.syaratAssesmentPage', compact('assesment'));
    }


    public function syaratAssesment(Request $request, $id) {

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

public function ukAssesmentPage($id) {
    $assesment = AssesmentCenter::find($id);

    return view('admin.assesment.ukAssesmentPage', compact('assesment'));
}

public function ukAssesment(Request $request, $id) {
    // dd($request->all());
    $request->validate([
        'uk' => 'required|string|max:255',
    ]);

    UkAssesment::create([
        'uk' => $request->uk,
        'assesment_center_id' => $id,
    ]);

    $encryptedId = Crypt::encrypt($id);

    return redirect()->route('admin.assesment.edit.page', ['id' => $encryptedId]);
}

public function deleteAssesment($id) {
    $encryptedId = Crypt::decrypt($id);
     // Hapus baris-baris terkait di tabel 'uk_assesment'
     UkAssesment::where('assesment_center_id', $encryptedId)->delete();

     SyaratAssesment::where('assesment_center_id', $encryptedId)->delete();

     // Hapus baris dari tabel 'AssesmentCenter'
     AssesmentCenter::find($encryptedId)->delete();
    //  dd($encryptedId);
    return view('admin.assesment.assesment');
}
public function deleteSyaratAssesment($id, $assesmentId) {
    $encryptedId = Crypt::decrypt($id);
     // Hapus baris-baris terkait di tabel 'uk_assesment'

     SyaratAssesment::find($encryptedId)->delete();


     // Hapus baris dari tabel 'AssesmentCenter'
    //  dd($encryptedId);
    $encryptedId = Crypt::encrypt($id);

    return redirect()->route('admin.assesment.edit.page', ['id' => $encryptedId]);}

public function createAssesmentPage() {
    return view('admin.assesment.assesmentCreate');
}

public function createAssesment(Request $request) {
    // dd($request->all());
    $request->validate([
        'title_assesment' => 'required',
        'desc_assesment' => 'required',
        'importance' => 'required',
    ]);

    $assesment = new AssesmentCenter();
    $assesment->title = $request->title_assesment;
    $assesment->desc = $request->desc_assesment;
    $assesment->importance = $request->importance;
    $assesment->pict = 'default.jpg';
    $assesment->uk = 'default.jpg';
    $assesment->syarat1 = 'default.jpg';
    $assesment->syarat2 = 'default.jpg';
    $assesment->syarat3 = 'default.jpg';
    $assesment->save();

    for ($i=0; $i < $request->jumlah_syarat; $i++) {
        SyaratAssesment::create([
            'syarat' => $request->input("syarat_".($i+1)),
            'assesment_center_id' => $assesment->id,
        ]);
    }

    for ($i=0; $i < $request->jumlah_uk; $i++) {
        UkAssesment::create([
            'uk' => $request->input("uk_".($i+1)),
            'assesment_center_id' => $assesment->id,
        ]);
    }


    return redirect()->route('admin.assesment');

}
}
