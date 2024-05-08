@extends('layouts.admin-app')

@section('title', 'Admin | Update assesment')

@section('content')

@include('components.component')

{{-- FORM --}}
<div class="mt-4 mx-8 space-y-6">
    <form action="{{ route('admin.assesment.edit', $assesment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="title_assesment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title_assesment" name="title_assesment"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write down the title" value="{{ $assesment->title }}" required />
        </div>

        <div class="mb-5">
            <label for="desc_assesment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-lg dark:bg-gray-800">
                    <label for="editor" class="sr-only">Publish post</label>
                    <textarea id="editor" rows="8" name="desc_assesment"
                        class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Write an article..." required>{{ $assesment->desc }}</textarea>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <label for="importance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Importance</label>
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-lg dark:bg-gray-800">
                    <label for="editor" class="sr-only">Publish post</label>
                    <textarea id="editor" rows="8" name="importance"
                        class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Write an article..." required>{{ $assesment->importance }}</textarea>
                </div>
            </div>
        </div>

        <div class="mb-5 grid grid-cols-2 gap-4">
            <label for="syarat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syarat</label>

            <label for="uk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UK</label>

            <div class="mb-5 grid gap-4">
                @foreach ($syarat as $key => $item)
                <div class="flex col-span-1 ">
                    <div class="block w-full py-1 mr-2 flex justify-center items-center bg-gray-800 h-24 border border-gray-200 rounded-md">
                        <textarea id="editor" rows="2" name="syarat_{{ $key + 1 }}"
                            class="block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="{{ $item->syarat }}" required>{{ $item->syarat }}</textarea>
                    </div>
                    <div>
                        <form action="{{ route('admin.assesment.deleteSyarat', ['id' => Crypt::encrypt($item->id), 'idAssesment' => $assesment->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" id="deleteProductButton" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            </button>
                        </form>
                    </div>

                </div>

                @endforeach
            </div>
            <div class="mb-5 grid gap-4">
                @foreach ($uk as $key => $item)
                <div class="col-span-1 py-1 flex justify-center items-center bg-gray-800 h-24 border border-gray-200 rounded-md">
                    <textarea id="editor" rows="2" name="uk_{{ $key + 1 }}"
                        class="block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="{{ $item->uk }}" required>{{ $item->uk }}</textarea>
                </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-between mb-5">
            <div>
                <a href="{{ route('admin.assesment.syarat.page', $assesment->id) }}" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Tambah Syarat
                </a>
            </div>

            <div>
                <a href="{{ route('admin.assesment.uk.page', $assesment->id) }}" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Tambah Unit Kompetensi
                </a>
            </div>

        </div>

        <div class="mb-5">
            <label for="Pict" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pict</label>
            <input type="file" id="Pict" name="Pict" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" />
        </div>

        <div class="mb-5">
            <label for="Foto Agenda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Agenda</label>
            <input type="file" id="Foto Agenda" name="Foto Agenda" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" />
        </div>



        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Post
        </button>
    </form>
</div>

@endsection
