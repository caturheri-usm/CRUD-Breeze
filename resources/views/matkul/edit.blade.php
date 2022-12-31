<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('/update-matkul/'.$data->kode) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="kode" :value="__('Kode')" />
                        <x-text-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="$data->kode" required autofocus />
                        <x-input-error :messages="$errors->get('kode')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="matkul" :value="__('Mata Kuliah')" class="mt-3" />
                        <x-text-input id="matkul" class="block mt-1 w-full" type="text" name="matkul" :value="$data->matkul" required autofocus />
                        <x-input-error :messages="$errors->get('matkul')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="dosen" :value="__('Dosen Pengajar')" class="mt-3" />
                        <x-text-input id="dosen" class="block mt-1 w-full" type="text" name="dosen" :value="$data->dosen" required autofocus />
                        <x-input-error :messages="$errors->get('dosen')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="sks" :value="__('SKS')" class="mt-3"/>
                        <x-text-input id="sks" class="block mt-1 w-full" type="number" name="sks" :value="$data->sks" required autofocus />
                        <x-input-error :messages="$errors->get('sks')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="total_mhs" :value="__('Total Mahasiswa')" class="mt-3"/>
                        <x-text-input id="total_mhs" class="block mt-1 w-full" type="number" name="total_mhs" :value="$data->total_mhs" required autofocus />
                        <x-input-error :messages="$errors->get('total_mhs')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="ruangan" :value="__('Ruangan')" class="mt-3"/>
                        <x-text-input id="ruangan" class="block mt-1 w-full" type="text" name="ruangan" :value="$data->ruangan" required autofocus />
                        <x-input-error :messages="$errors->get('ruangan')" class="mt-2" />
                    </div>
                    <x-primary-button class="ml-3 mt-4">
                        {{ __('Perbarui') }}
                    </x-primary-button>
                    <a href="{{ url('/matkul/') }}"
                        class="inline-flex ml-2 items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Batal</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>