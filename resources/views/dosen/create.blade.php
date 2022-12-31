<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Dosen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('tambah-dosen') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="nidn" :value="__('NIDN')" />
                        <x-text-input id="nidn" class="block mt-1 w-full" type="text" name="nidn" :value="old('nidn')" required autofocus />
                        <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="nama" :value="__('Nama')" class="mt-3" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="pendidikan" :value="__('Pendidikan')" class="mt-3"/>
                        <x-text-input id="pendidikan" class="block mt-1 w-full" type="text" name="pendidikan" :value="old('pendidikan')" required autofocus />
                        <x-input-error :messages="$errors->get('pendidikan')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="univ" :value="__('Universitas')" class="mt-3"/>
                        <x-text-input id="univ" class="block mt-1 w-full" type="text" name="univ" :value="old('univ')" required autofocus />
                        <x-input-error :messages="$errors->get('univ')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="foto" :value="__('Foto')" class="mt-3"/>
                        <x-text-input id="foto" class="block mt-1 w-full" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" name="foto" :value="old('foto')" required autofocus />
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>
                    <div class="mt-3">
                        <img src="" id="output" width="150px">
                    </div>
                    <x-primary-button class="ml-3 mt-4">
                        {{ __('Tambah') }}
                    </x-primary-button>
                    <a href="{{ url('/dosen/') }}"
                        class="inline-flex ml-2 items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>