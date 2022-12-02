<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-status class="mb-4" :status="session('message')" />
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full border text-center">
                                    <thead class="border-b text-gray-900">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                NIM
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Nama
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Umur
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Alamat
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Kota
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Kelas
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Jurusan
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)  
                                        <tr class="border-b">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white border-r">
                                                {{ $item->nim}}</td>
                                            <td
                                                class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->nama}}
                                            </td>
                                            <td
                                                class="text-sm text-white font-light px-6 py-4 whitespace-nowrap border-r">
                                                {{ $item->umur }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->alamat }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->kota }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->kelas }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->jurusan }}
                                            </td>
                                            <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{ url('/edit/'.$item->nim) }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                                                <a href="{{ url('/delete/'.$item->nim) }}" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>