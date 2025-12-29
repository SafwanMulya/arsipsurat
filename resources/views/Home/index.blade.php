@extends('layout.app')

@section('content')
    <main>
        <div class="flex">
            <div class="bg-white shadow-lg rounded-xl p-10  w-full bg-gradient-to-r from-blue-800 to-blue-400 flex">
                <div class="">
                    <h1 class="text-4xl font-bold text-gray-100 mb-4 flex gap-2">Selamat Datang di Arsip Surat 🤚</h1>
                    <p class="text-xl text-gray-100 mb-2">Di Web Arsip Surat</p>
                    <p class="text-gray-100">Kamu dapat melihat sistem pengelolaan dan penyimpanan surat masuk & keluar</p>
                    <a href="#"
                        class="inline-block mt-6 px-6 py-3 bg-yellow-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition">
                        Mulai Arsip
                    </a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-40 h-40 ml-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
            </div>
        </div>
        {{-- box --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full mt-3 gap-4">
            <!-- BOX 1 -->
            <div class="bg-gradient-to-r from-yellow-800 to-yellow-400 p-6 rounded-xl shadow-lg flex items-center gap-5">
                <div class="flex items-center justify-center w-20 h-20 bg-white/20 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                    </svg>

                </div>
                <div>
                    <h1 class="text-3xl font-bold text-white">4%</h1>
                    <p class="text-white/90 text-sm">Klik untuk melihat detail arsip</p>
                </div>
            </div>
            <!-- BOX 2 -->
            <div class="bg-gradient-to-r from-red-800 to-red-400 p-6 rounded-xl shadow-lg flex items-center gap-5">
                <div class="flex items-center justify-center w-20 h-20 bg-white/20 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>

                </div>
                <div>
                    <h1 class="text-3xl font-bold text-white">10%</h1>
                    <p class="text-white/90 text-sm">Surat Masuk</p>
                </div>
            </div>
            <!-- BOX 3 -->
            <div class="bg-gradient-to-r from-green-800 to-green-400 p-6 rounded-xl shadow-lg flex items-center gap-5">
                <div class="flex items-center justify-center w-20 h-20 bg-white/20 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>

                </div>
                <div>
                    <h1 class="text-3xl font-bold text-white">7%</h1>
                    <p class="text-white/90 text-sm">Surat Keluar</p>
                </div>
            </div>
        </div>
        {{-- endbox --}}

        <div class="mt-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="px-4 py-3 bg-gradient-to-r from-blue-800 to-blue-400 border-b border-gray-200">
                    <div class="text-gray-100 font-semibold flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                        </svg>
                        <span>Data Surat Masuk</span>
                    </div>
                </div>
                <!-- Table -->
                <div class="p-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">No</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nama Surat</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nomor Surat</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Kategori</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Asal Surat</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Tanggal Masuk</th>
                                <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($suratmasuks as $suratmasuk)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $loop->iteration + ($suratmasuks->currentPage() - 1) * $suratmasuks->perPage() }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $suratmasuk->judul }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $suratmasuk->nomor_surat }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $suratmasuk->kategori->nama_kategori }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $suratmasuk->asal_surat }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ \Carbon\Carbon::parse($suratmasuk->tanggal_surat)->format('d M Y') }}
                                    </td>
                                    <td class="px-4 py-2 text-center text-sm">
                                        <div class="flex justify-center gap-2">

                                            <!-- LIHAT -->
                                            <a href="#"
                                                class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium text-white bg-gradient-to-r from-green-800 to-green-400 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5
                                       c4.478 0 8.268 2.943 9.542 7
                                       -1.274 4.057-5.064 7-9.542 7
                                       -4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </a>

                                            <!-- DOWNLOAD -->
                                            <a href="#"
                                                class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium text-white bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 10l5 5 5-5M12 15V3" />
                                                </svg>
                                                Download
                                            </a>

                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                        Data surat masuk belum tersedia.
                                    </td>

                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $suratmasuks->links() }}
                    </div>
                </div>
            </div>
            <!-- Back Button -->
        </div>
         <div class="mt-2">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Header -->
            <div class="px-4 py-3 bg-gradient-to-r from-blue-800 to-blue-400 border-b border-gray-200">
                <div class="text-gray-100 font-semibold flex items-center gap-2">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span>Data Surat Keluar</span>
                </div>
            </div>

            <!-- Table -->
            <div class="p-6 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">No</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nama Surat</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nomor Surat</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Kategori</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Asal Surat</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Tanggal Masuk</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($suratkeluars as $suratkeluar)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $loop->iteration + ($suratkeluars->currentPage() - 1) * $suratkeluars->perPage() }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $suratkeluar->judul }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $suratkeluar->nomor_surat }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $suratkeluar->kategori->nama_kategori }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $suratkeluar->tujuan_surat }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ \Carbon\Carbon::parse($suratkeluar->tanggal_surat)->format('d M Y') }}
                                </td>
                                <td class="px-4 py-2 text-center text-sm">
                                    <div class="flex justify-center gap-2">

                                        <!-- LIHAT -->
                                        <a href="#"
                                            class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium text-white bg-gradient-to-r from-green-800 to-green-400 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5
                               c4.478 0 8.268 2.943 9.542 7
                               -1.274 4.057-5.064 7-9.542 7
                               -4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            Lihat
                                        </a>

                                        <!-- DOWNLOAD -->
                                        <a href="#"
                                            class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium text-white bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 10l5 5 5-5M12 15V3" />
                                            </svg>
                                            Download
                                        </a>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                    Data surat masuk belum tersedia.
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $suratkeluars->links() }}
                </div>
            </div>
        </div>

        <!-- Back Button -->
    </div>
    </main>
@endsection
