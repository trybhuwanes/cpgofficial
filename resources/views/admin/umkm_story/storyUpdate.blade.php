@extends('layouts.admin-app')

@section('title', 'Admin | Update UMKM Story')

@section('content')
    @include('components.component')
    {{-- FORM --}}
    <div class="mt-4 mx-8 space-y-6">
        <form action="{{ route('admin.umkm_story.edit', $umkm->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write down the title" value="{{ $umkm->title_story }}" required />
            </div>

            <div class="mb-5">
                <label for="body"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="body" name="body" rows="8"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write a description" required>{{ $umkm->body_story }}</textarea>
            </div>

            <div class="mb-5">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo</label>
                <input type="file" id="pict_story" name="pict_story"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="photo" />
            </div>

            <div class="mb-5">
                <img id="image-preview"
                    src="{{ asset('assets/img/' . $umkm->pict_story) }}"
                    alt="{{ $umkm->pict_story }}" style="max-height: 250px;">
            </div>

            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mb-10 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Update</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#pict_story').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
@endsection
