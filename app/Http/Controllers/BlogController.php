<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //
    public function index() {
        $blog = Blog::all();
        return view('blogPage', compact(['blog']));
    }

    public function read($id) {
        $blog = Blog::whereId($id)->first();
        return view('blogReadPage')->with('blog', $blog);
    }
    // Admin Function

    public function adminBlog() {
        $blog = Blog::all();
        // dd($blog);
        return view('admin.blog.blog', compact('blog'));
    }

    public function createBlogPage() {
        return view('admin.blog.blogCreate');
    }

    public function createBlog(Request $request) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'pict_blog' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $pictBlog = $request->file('pict_blog');
        $fileName = $request->title . '-pict' . '.' . $pictBlog->extension();
        $pictBlog->move(public_path('assets/img'), $fileName);

        try {
            Blog::create([
                'title_blog' => $request->title,
                'desc_blog' => $request->desc,
                'slug_blog' => 'temp',
                'pict_blog' => $fileName
            ]);
            return redirect()->route('admin.blog');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.blog', 'Data gagal ditambahkan');
        }
    }

    public function editBlogPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $blog = Blog::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.blog.blogUpdate', compact('blog'), ['encryptedId' => $encryptedId]);
    }

    public function editBlog(Request $request, $id) {
        $blog = Blog::find($id);

        if($request->file('pict_blog')){
            // upload image
            $pictBlog = $request->file('pict_blog');
            $fileName = $request->title . '-pict' . '.' . $pictBlog->extension();
            $pictBlog->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $blog->pict_blog);
        
            // update post data image
            $blog->update([
                'pict_blog'   => $fileName,
            ]);
        }

        $blog->title_blog = $request->title;
        $blog->desc_blog = $request->desc;
        $blog->updated_at = now();
        $blog->save();
        return redirect()->route('admin.blog');
    }

    public function deleteBlog($id) {
        $encryptedId = Crypt::decrypt($id);
        Blog::find($encryptedId)->delete();
        return redirect()->route('admin.blog.blog');
    }
}
