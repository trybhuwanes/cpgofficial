@extends('layouts.admin-app')

@section('title', 'Admin | Update assessment')

@section('content')

@include('components.component')

{{-- FORM --}}
<div class="mt-4 mx-8 space-y-6">
    <form action="{{ route('admin.assesment.create') }}" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="mb-5">
            <label for="title_assessment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title_assessment" name="title_assessment"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write down the title" required />
        </div>

        <div class="mb-5">
            <label for="pict_assesment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture of Schema</label>
            <input type="file" id="pict_assesment" name="pict_assesment" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" />
        </div>

        <div class="mb-5">
            <img id="image-preview-as" src="" alt="" style="max-height: 250px;">
        </div>

        <div class="mb-5">
            <label for="desc_assessment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="desc_assessment" rows="8" name="desc_assessment"
                class="block w-full px-4 py-2 text-sm text-gray-800 bg-white border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write an article..." required></textarea>
        </div>

        <div class="mb-5">
            <label for="importance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Importance</label>
            <textarea id="importance" rows="8" name="importance"
                class="block w-full px-4 py-2 text-sm text-gray-800 bg-white border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write an article..." required></textarea>
        </div>

        <div class="mb-5 grid grid-cols-2 gap-4">
            <div>
                <label for="syarat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syarat</label>
                <div class="mb-5 grid gap-4" id="syarat-container">
                    <div class="col-span-1 py-1 relative bg-gray-800 h-24 border border-gray-200 rounded-md">
                        <textarea rows="2" name="syarat_1"
                            class="block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Masukkan Syarat Assessment" required></textarea>
                        <!-- Tombol silang di pojok kanan atas -->
                        <button type="button" class="absolute top-0 right-0 px-2 py-1 bg-red-500 text-white rounded-md" onclick="removeElement(this)">x</button>
                    </div>
                </div>
                <button type="button" id="add-syarat-container" class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-md">Tambah Container</button>
            </div>
            <div>
                <label for="uk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uji Kompetensi</label>
                <div class="mb-5 grid gap-4" id="uk-container">
                    <div class="col-span-1 py-1 relative bg-gray-800 h-24 border border-gray-200 rounded-md">
                        <textarea rows="2" name="uk_1"
                            class="block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Masukkan Uji Kompetensi" required></textarea>
                        <!-- Tombol silang di pojok kanan atas -->
                        <button type="button" class="absolute top-0 right-0 px-2 py-1 bg-red-500 text-white rounded-md" onclick="removeElement(this)">x</button>
                    </div>
                </div>
                <button type="button" id="add-uk-container" class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-md">Tambah Uji Kompetensi</button>
            </div>
        </div>

        <div class="mb-5">
            <label for="pict_agenda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Flyer Agenda</label>
            <input type="file" id="pict_agenda" name="pict_agenda" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" />
        </div>

        <div class="mb-5">
            <img id="image-preview-ag" src="" alt="" style="max-height: 250px;">
        </div>

        <input type="hidden" id="jumlah_syarat" name="jumlah_syarat" value="1">
        <input type="hidden" id="jumlah_uk" name="jumlah_uk" value="1">

        <button type="submit"
            class="mb-10 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Post
        </button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $(document).ready(function(e) {
            $('#pict_assesment').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#image-preview-as').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            });

            $('#pict_agenda').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#image-preview-ag').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            });

    });

    // Function untuk menambah container Syarat
    function addSyaratContainer() {
        var syaratContainer = document.getElementById('syarat-container');
        var index = syaratContainer.children.length + 1;

        var divWrapper = document.createElement('div');
        divWrapper.className = 'col-span-1 py-1 relative bg-gray-800 h-24 border border-gray-200 rounded-md';

        var textarea = document.createElement('textarea');
        textarea.rows = '2';
        textarea.name = 'syarat_' + index;
        textarea.className = 'block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400';
        textarea.placeholder = 'Masukkan Syarat Assessment';
        textarea.required = true;

        // Tombol silang di pojok kanan atas
        var closeButton = document.createElement('button');
        closeButton.type = 'button';
        closeButton.className = 'absolute top-0 right-0 px-2 py-1 bg-red-500 text-white rounded-md';
        closeButton.innerHTML = 'x';
        closeButton.addEventListener('click', function() {
            removeElement(divWrapper);
        });

        divWrapper.appendChild(textarea);
        divWrapper.appendChild(closeButton);
        syaratContainer.appendChild(divWrapper);

        // Update nilai jumlah syarat
        document.getElementById('jumlah_syarat').value = index;
    }

    // Function untuk menambah container Uji Kompetensi
    function addUkContainer() {
        var ukContainer = document.getElementById('uk-container');
        var index = ukContainer.children.length + 1;

        var divWrapper = document.createElement('div');
        divWrapper.className = 'col-span-1 py-1 relative bg-gray-800 h-24 border border-gray-200 rounded-md';

        var textarea = document.createElement('textarea');
        textarea.rows = '2';
        textarea.name = 'uk_' + index;
        textarea.className = 'block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400';
        textarea.placeholder = 'Masukkan Uji Kompetensi';
        textarea.required = true;

        // Tombol silang di pojok kanan atas
        var closeButton = document.createElement('button');
        closeButton.type = 'button';
        closeButton.className = 'absolute top-0 right-0 px-2 py-1 bg-red-500 text-white rounded-md';
        closeButton.innerHTML = 'x';
        closeButton.addEventListener('click', function() {
            removeElement(divWrapper);
        });

        divWrapper.appendChild(textarea);
        divWrapper.appendChild(closeButton);
        ukContainer.appendChild(divWrapper);

        // Update nilai jumlah uji kompetensi
        document.getElementById('jumlah_uk').value = index;
    }

    // Event listener untuk tombol "Tambah Container" Syarat
    var addSyaratButton = document.getElementById('add-syarat-container');
    addSyaratButton.addEventListener('click', addSyaratContainer);

    // Event listener untuk tombol "Tambah Uji Kompetensi"
    var addUkButton = document.getElementById('add-uk-container');
    addUkButton.addEventListener('click', addUkContainer);

    // Function untuk menghapus elemen
    function removeElement(element) {
        element.parentNode.removeChild(element);
    }
</script>

@endsection
