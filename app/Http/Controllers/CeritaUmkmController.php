<?php

namespace App\Http\Controllers;

use App\Models\UMKMStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class CeritaUmkmController extends Controller
{
    //
    public function index()
    {
        return view('ceritaUmkmPage');
    }
    public function read()
    {
        return view('ceritaUmkmReadPage');
    }

    public function adminCeritaUmkm()
    {
        $umkm = UMKMStory::all();
        return view('admin.umkm_story.umkm_story', compact('umkm'));
    }

    public function createCeritaUmkmPage()
    {
        return view('admin.umkm_story.storyCreate');
    }

    public function createCeritaUmkm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'pict_story' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $pictStory = $request->file('pict_story');
        $fileName = $request->title . '-pict' . '.' . $pictStory->extension();
        $pictStory->move(public_path('assets/img'), $fileName);

        try {
            UMKMStory::create([
                'title_story' => $request->title,
                'body_story' => $request->body,
                'slug_story' => 'temp',
                'pict_story' => $fileName
            ]);
            return redirect()->route('admin.umkm_story');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.umkm_story', 'Data gagal ditambahkan');
        }
    }

    public function editCeritaUmkmPage($id)
    {
        $encryptedId = Crypt::decrypt($id);
        $umkm = UMKMStory::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.umkm_story.storyUpdate', compact('umkm'), ['encryptedId' => $encryptedId]);
    }

    public function editCeritaUmkm(Request $request, $id)
    {
        $umkm = UMKMStory::find($id);

        if($request->file('pict_story')){
            // upload image
            $pictStory = $request->file('pict_story');
            $fileName = $request->title . '-pict' . '.' . $pictStory->extension();
            $pictStory->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $umkm->pict_story);
        
            // update post data image
            $umkm->update([
                'pict_story'   => $fileName,
            ]);
        }

        $umkm->title_story = $request->title;
        // $umkm->slug_story = $request->slug_story;
        $umkm->body_story = $request->body;
        $umkm->updated_at = now();
        $umkm->save();
        return redirect()->route('admin.umkm_story');
    }

    public function deleteCeritaUmkm($id)
    {
        $encryptedId = Crypt::decrypt($id);
        $umkm = UMKMStory::find($encryptedId);
        $umkm->delete();
        return redirect()->route('admin.umkm_story');
    }
}
