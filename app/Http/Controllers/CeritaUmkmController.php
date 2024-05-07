<?php

namespace App\Http\Controllers;

use App\Models\UMKMStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CeritaUmkmController extends Controller
{
    //
    public function index() {
        return view('ceritaUmkmPage');
    }
    public function read() {
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
        ]);

        // dd($request);

        UMKMStory::create([
            'title_story' => $request->title,
            'body_story' => $request->body,
            'slug_story' => 'temp',
            'pict_story' => 'temp'
        ]);

        return redirect()->route('admin.umkm_story');
    }

    public function editCeritaUmkmPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $umkm = UMKMStory::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.umkm_story.storyUpdate', compact('umkm'), ['encryptedId' => $encryptedId]);

        // return view('edit-blog', ['encryptedId' => $encryptedId]);
    }

    public function editCeritaUmkm(Request $request, $id) {
        // $encryptedId = Crypt::decrypt($id);

        // dd($request->all());

        $umkm = UMKMStory::find($id);
        $umkm->title_story = $request->title;
        // $umkm->slug_story = $request->slug_story;
        $umkm->body_story = $request->body;
        $umkm->updated_at = now();
        $umkm->save();
        return redirect()->route('admin.umkm_story');
    }

    public function deleteCeritaUmkm($id) {
                $encryptedId = Crypt::decrypt($id);
                // dd($encryptedId);


        $umkm = UMKMStory::find($encryptedId);
        $umkm->delete();
        return redirect()->route('admin.umkm_story');
    }





}
