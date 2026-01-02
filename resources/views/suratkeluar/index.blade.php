@extends('layout.app')

@section('content')
    <div class="w-full">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Header -->
            <div class="px-4 py-3 bg-gradient-to-r from-blue-800 to-blue-400 border-b border-gray-200">
                <div class="text-gray-100 font-semibold flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    <span>Data Surat Keluar</span>
                </div>
            </div>


            <!-- Table -->
            <div class="p-6 overflow-x-auto">
                <form method="GET" action="{{ route('suratkeluars.index') }}" class="mb-4 flex items-center gap-2">

                    <!-- Pencarian Tanggal -->
                    <input type="date" name="tanggal_surat" value="{{ request('tanggal_surat') }}"
                        class="border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" />

                    <!-- Pencarian Kategori -->
                    <select name="kategori_id"
                        class="border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    <!-- Tombol Cari -->
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-800 to-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-500">
                        Cari
                    </button>
                    <!-- Tombol Reset -->
                    @if (request('tanggal_surat') || request('kategori_id'))
                        <a href="{{ route('suratkeluars.index') }}"
                            class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-400">
                            Reset
                        </a>
                    @endif
                </form>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">No</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nama Surat</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nomor Surat</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Kategori</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Tujuan Surat</th>
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
                                        <a href="{{ route('suratmasuk.download', $suratkeluar->file_surat) }}"
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
    </div>
@endsection
