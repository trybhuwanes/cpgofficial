<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index() {
        return view("blogPage");
    }

    public function read() {
        return view('blogReadPage');
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
        // dd($request);

        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

// dd($request);

        // Code for file upload if needed

        Blog::create([
            'title_blog' => $request->title_blog,
            'desc_blog' => $request->desc_blog,
            'slug_blog' => 'temp',
            'pict_blog' => 'temp'

            // Add other fields here if needed
        ]);

        return redirect()->route('admin.blog.blog');
    }


    public function editBlogPage($id) {
        $encryptedId = Crypt::decrypt($id);
        $blog = Blog::find($encryptedId);
        // dd($id, $decrypted, $blog);
        return view('admin.blog.blogUpdate', compact('blog'), ['encryptedId' => $encryptedId]);

        // return view('edit-blog', ['encryptedId' => $encryptedId]);
    }

    // public function editBlogPage($id) {
    //     $blog = Blog::find($id);
    //     return view('admin.blog.blogEdit', compact('blog'));
    // }

    public function editBlog(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        // dd($request->all());
        $blog = Blog::find($id);


        // if ($request->title != null) {
        //     $blog->title_blog = $request->title;
        // } else {
        //     # code...
        // }

        // if ($request->slug_blog != null) {
        //     $blog->slug_blog = $request->slug_blog;
        // } else {
        //     # code...
        // }

        // if ($request->pict_blog != null) {
        //     $blog->pict_blog = $request->pict_blog;
        // } else {
        //     # code...
        // }

        // if ($request->desc != null) {
        //     $blog->desc_blog = $request->desc;
        // } else {
        //     # code...
        // }

        $blog->title_blog = $request->title;
        $blog->desc_blog = $request->desc;


        $blog->save();

        // dd($blog);


        // Blog::find($id)->update($request->all());

        // $blog = Blog::find($id);


        return redirect()->route('admin.blog.blog');
    }

    public function deleteBlog($id) {
        $encryptedId = Crypt::decrypt($id);
        Blog::find($encryptedId)->delete();
        return redirect()->route('admin.blog.blog');
    }
}
