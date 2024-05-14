@extends('layouts.admin-app')

@section('title', 'Admin | Create Category Training')

@section('content')

@include('components.component')


    {{-- FORM --}}
    <div class="mt-4 mx-8 space-y-6">
        <form action="{{ route( 'admin.training.category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="name_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Category</label>
                <input type="text" id="name_category" name="name_category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write down the category" required />
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Post
            </button>
        </form>
    </div>

@endsection
