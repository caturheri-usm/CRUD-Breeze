<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update/'.$data->nim) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="nim" :value="__('NIM')" />
                        <x-text-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="$data->nim" required autofocus />
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="nama" :value="__('Nama')" class="mt-3"/>
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="$data->nama" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="umur" :value="__('Umur')" class="mt-3"/>
                        <x-text-input id="umur" class="block mt-1 w-full" type="number" name="umur" :value="$data->umur" required autofocus />
                        <x-input-error :messages="$errors->get('umur')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="alamat" :value="__('Alamat')" class="mt-3"/>
                        <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="$data->alamat" required autofocus />
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="kota" :value="__('Kota')" class="mt-3"/>
                        <x-text-input id="kota" class="block mt-1 w-full" type="text" name="kota" :value="$data->kota" required autofocus />
                        <x-input-error :messages="$errors->get('kota')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="kelas" :value="__('Kelas')" class="mt-3"/>
                        <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="$data->kelas" required autofocus />
                        <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="jurusan" :value="__('Jurusan')" class="mt-3"/>
                        <x-text-input id="jurusan" class="block mt-1 w-full" type="text" name="jurusan" :value="$data->jurusan" required autofocus />
                        <x-input-error :messages="$errors->get('jurusan')" class="mt-2" />
                    </div>
                    <x-primary-button class="ml-3 mt-4">
                        {{ __('Perbarui') }}
                    </x-primary-button>
                    <a href="{{ url('/mahasiswa/') }}"
                        class="inline-flex ml-2 items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Batal</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>