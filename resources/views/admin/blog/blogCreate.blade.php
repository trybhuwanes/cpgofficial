@extends('layouts.admin-app')

@section('title', 'Admin | Create Blog')

@section('content')

@include('components.component')

{{-- FORM --}}
<div class="mt-4 mx-8 space-y-6">
    <form action="{{ route('admin.blog.create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="title_blog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title_blog" name="title_blog"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write down the title" required />
        </div>

        <div class="mb-5">
            <label for="desc_blog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                    <!-- Your existing code for description -->
                </div>
                <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                    <label for="editor" class="sr-only">Publish post</label>
                    <textarea id="editor" name="desc_blog" rows="8"
                        class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Write an article..." required></textarea>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo">Photo</label>
            <input name="photo" id="photo" type="file"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="photo">
        </div>

        <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Post
        </button>
    </form>
</div>

@endsection
