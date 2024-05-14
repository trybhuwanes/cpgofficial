<?php

namespace App\Http\Controllers;
use App\Models\Csr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


class CsrController extends Controller
{
    //
    public function adminCsr() {
        $csr = Csr::all();
        // dd($Csr);
        return view('admin.csr.csr', compact('csr'));
    }

    public function createCsrPage() {
        return view('admin.csr.csrCreatePage');
    }

    public function createCsr(Request $request) {
        $request->validate([
            // 'id_category' => 'required',
            'title_csr' => 'required',
            // 'slug_training' => 'required',
            'pict_csr' => 'required|image|mimes:jpeg,png,jpg',
            'desc_csr' => 'required',
            'date_csr' => 'required',
            'location_csr' => 'required',
        ]);

        // Menambahkan id_category ke dalam request jika perlu
        $request->merge([
            'slug_csr' => Str::slug($request->title_csr),
        ]);

        $pictCsr = $request->file('pict_csr');
        $fileName = $request->slug_csr . '-pict' . '.' . $pictCsr->extension();
        $pictCsr->move(public_path('assets/img'), $fileName);


        $csr = new Csr();
        $csr->title_csr = $request->title_csr;
        $csr->slug_csr = $request->slug_csr;
        $csr->pict_csr = $fileName;
        $csr->desc_csr = $request->desc_csr;
        $csr->date_csr = $request->date_csr;
        $csr->location_csr = $request->location_csr;
        $csr->save();

        return redirect()->route('admin.csr');

    }

    public function editCsrPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $csr = Csr::find($encryptedId);
        // dd($id, $decrypted, $Csr);
        return view('admin.csr.CsrUpdate', compact('csr'), ['encryptedId' => $encryptedId]);
    }

    public function editCsr(Request $request, $id) {
        $csr = Csr::find($id);

        $request->merge([
            'slug_csr' => Str::slug($request->title_csr),
        ]);

        if($request->file('pict_csr')){
            // upload image
            $pictCsr = $request->file('pict_csr');
            $fileName = $request->slug_csr . '-pict' . '.' . $pictCsr->extension();
            $pictCsr->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $csr->pict_csr);
        
            // update post data image
            $csr->update([
                'pict_csr'   => $fileName,
            ]);
        }

        $csr->title_csr = $request->title_csr;
        $csr->slug_csr = $request->slug_csr;
        $csr->pict_csr = $fileName;
        $csr->desc_csr = $request->desc_csr; 
        $csr->date_csr = $request->date_csr;
        $csr->location_csr = $request->location_csr;       
        $csr->updated_at = now();
        $csr->save();
        return redirect()->route('admin.csr');
    }

    public function deleteCsr($id) {
        $encryptedId = Crypt::decrypt($id);
        Csr::find($encryptedId)->delete();
        return redirect()->route('admin.csr');
    }
}
