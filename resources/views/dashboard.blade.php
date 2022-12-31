<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- component -->
                    <div class="max-w-full mx-4 py-6 sm:mx-auto sm:px-6 lg:px-8">
                        <div class="sm:flex sm:space-x-4">
                            <div class="inline-block align-bottom bg-indigo-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                                <div class="bg-indigo-200  p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                            <h3 class="text-sm leading-6 font-medium text-black">Total Mahasiswa</h3>
                                            <p class="text-3xl font-bold text-black">{{ $mhs }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block align-bottom bg-purple-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                                <div class="bg-purple-200 p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                            <h3 class="text-sm leading-6 font-medium text-black">Total Dosen</h3>
                                            <p class="text-3xl font-bold text-black">{{ $dosen }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="inline-block align-bottom bg-rose-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                                <div class="bg-rose-200 p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                        <h3 class="text-sm leading-6 font-medium text-black">Total Mata Kuliah</h3>
                                            <p class="text-3xl font-bold text-black">{{ $matkul }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
