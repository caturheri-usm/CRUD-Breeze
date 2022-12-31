<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-status class="mb-4" :status="session('message')" />
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('tambah-matkul') }}"
                    class="inline-flex items-center mb-2 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Tambah Data</a>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full border text-center">
                                    <thead class="border-b text-gray-900">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Kode
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Mata Kuliah
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Dosen Pengajar
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                SKS
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Total Mahasiswa
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Ruangan
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                        <tr class="border-b">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white border-r">
                                                {{ $item->kode}}</td>
                                            <td
                                                class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->matkul}}
                                            </td>
                                            <td
                                                class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->dosen }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->sks }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->total_mhs }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->ruangan }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{ url('/ubah/'.$item->kode) }}"
                                                    class="inline-flex mr-2 items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Edit</a>
                                                <a href="{{ url('/delete-matkul/'.$item->kode) }}"
                                                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')"
                                                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="9"
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white border-r">
                                                Data Tidak Ditemukan
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="mt-3">{{ $data->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>