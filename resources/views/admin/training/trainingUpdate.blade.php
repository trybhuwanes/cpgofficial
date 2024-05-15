@extends('layouts.admin-app')

@section('title', 'Admin | Create Training Program')

@section('content')

    {{-- @include('components.component') --}}
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('admin.dashboard') }}"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('admin.training') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Training
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                    aria-current="page">Update</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Update Training Event</h1>
            </div>
        </div>
    </div>

    {{-- FORM --}}
    <div class="mt-4 mx-8 space-y-6">
        <form action="{{ route('admin.training.edit', $training->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title_training" name="title_training"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write down the title" value="{{ $training->title_training }}" required />
            </div>

            <div class="mb-5">
                <label for="desc"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-lg dark:bg-gray-800">
                        <label for="editor" class="sr-only">Publish post</label>
                        <textarea id="editor" rows="8" name="desc_training"
                            class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write an article..." required>{{ $training->desc_training }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short
                    Description</label>
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-lg dark:bg-gray-800">
                        <label for="editor" class="sr-only">Publish post</label>
                        <textarea id="editor" rows="8" name="shortdesc_training"
                            class="block w-full h-10 px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write an article..." required>{{ $training->shortdesc_training }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <label for="date_training" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="date" id="date_training" name="date_training"
                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $training->date_training }}" required />
            </div>

            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                <input type="text" id="title" name="location_training"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write down the building name and its address" value="{{ $training->location_training }}"
                    required />
            </div>

            <div class="mb-5">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo</label>
                <input type="file" id="pict_training" name="pict_training"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="photo">
            </div>

            <div class="mb-5">
                <img id="image-preview" src="{{ asset('assets/img/' . $training->pict_training) }}"
                    alt="{{ $training->pict_training }}" style="max-height: 250px;">
            </div>

            <button type="submit"
                class="mb-10 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Post
            </button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#pict_training').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            });

        });
    </script>
@endsection
