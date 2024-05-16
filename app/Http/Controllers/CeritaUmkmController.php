<?php

namespace App\Http\Controllers;

use App\Models\UMKMStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CeritaUmkmController extends Controller
{
    //
    public function index()
    {
        $story = UMKMStory::all();
        return view('ceritaUmkmPage', compact(['story']));
    }
    public function read($slug)
    {
        $story = UMKMStory::where('slug_story', $slug)->first();
        return view('ceritaUmkmReadPage')->with('story', $story);
    }

    public function adminCeritaUmkm()
    {
        $umkm = UMKMStory::all();
        return view('admin.umkm_story.umkm_story', compact('umkm'));
    }

    public function readCeritaUmkm($id)
    {
        $encryptedId = Crypt::decrypt($id);
        $story = UMKMStory::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.umkm_story.storyRead', compact('story'), ['encryptedId' => $encryptedId]);
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

        $request->merge([
            'slug_story' => Str::slug($request->title),
        ]);

        $pictStory = $request->file('pict_story');
        $fileName = $request->slug_story . '-pict' . '.' . $pictStory->extension();
        $pictStory->move(public_path('assets/img'), $fileName);

        try {
            $story = new UMKMStory();
            $story->title_story = $request->title;
            $story->slug_story = $request->slug_story;
            $story->pict_story = $fileName;
            $story->body_story = $request->body;
            $story->save();
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

        $request->merge([
            'slug_story' => Str::slug($request->title),
        ]);

        if($request->file('pict_story')){
            // upload image
            $pictStory = $request->file('pict_story');
            $fileName = $request->slug_story . '-pict' . '.' . $pictStory->extension();
            $pictStory->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $umkm->pict_story);
        
            // update post data image
            $umkm->update([
                'pict_story'   => $fileName,
            ]);
        }

        $umkm->title_story = $request->title;
        $umkm->slug_story = $request->slug_story;
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
