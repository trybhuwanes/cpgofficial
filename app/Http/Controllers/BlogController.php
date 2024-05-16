<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    //
    public function index() {
        $blog = Blog::all();
        return view('blogPage', compact(['blog']));
    }

    public function read($slug) {
        $blog = Blog::where('slug_blog', $slug)->first();
        return view('blogReadPage')->with('blog', $blog);
    }
    // Admin Function

    public function adminBlog() {
        $blog = Blog::all();
        // dd($blog);
        return view('admin.blog.blog', compact('blog'));
    }

    public function readBlog($id) {
        $encryptedId = Crypt::decrypt($id);
        $blog = Blog::find($encryptedId);
        return view('admin.blog.blogRead', compact('blog'), ['encryptedId' => $encryptedId]);
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

        $request->merge([
            'slug_blog' => Str::slug($request->title),
        ]);

        $pictBlog = $request->file('pict_blog');
        $fileName = $request->slug_blog . '-pict' . '.' . $pictBlog->extension();
        $pictBlog->move(public_path('assets/img'), $fileName);

        try {
            $blog = new Blog();
            $blog->title_blog = $request->title;
            $blog->slug_blog = $request->slug_blog;
            $blog->pict_blog = $fileName;
            $blog->desc_blog = $request->desc;
            $blog->save();
            return redirect()->route('admin.blog');
        } catch (\Throwable $th) {
            return redirect()->back()->with('admin.blog', 'Data gagal ditambahkan');
        }
    }

    public function editBlogPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $blog = Blog::find($encryptedId);
        return view('admin.blog.blogUpdate', compact('blog'), ['encryptedId' => $encryptedId]);
    }

    public function editBlog(Request $request, $id) {
        $blog = Blog::find($id);

        $request->merge([
            'slug_blog' => Str::slug($request->title),
        ]);

        if($request->file('pict_blog')){
            // upload image
            $pictBlog = $request->file('pict_blog');
            $fileName = $request->slug_blog . '-pict' . '.' . $pictBlog->extension();
            $pictBlog->move(public_path('assets/img'), $fileName);
        
            // delete old image
            Storage::delete('public/assets/img/'. $blog->pict_blog);
        
            // update post data image
            $blog->update([
                'pict_blog'   => $fileName,
            ]);
        }

        $blog->title_blog = $request->title;
        $blog->slug_blog = $request->slug_blog;
        $blog->desc_blog = $request->desc;        
        $blog->updated_at = now();
        $blog->save();
        return redirect()->route('admin.blog');
    }

    public function deleteBlog($id) {
        $encryptedId = Crypt::decrypt($id);
        Blog::find($encryptedId)->delete();
        return redirect()->route('admin.blog');
    }
}
