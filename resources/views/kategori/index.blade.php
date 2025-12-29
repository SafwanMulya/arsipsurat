@extends('layout.app')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-4 py-3 bg-gradient-to-r from-blue-800 to-blue-400 border-b border-gray-200">
                <div class="text-gray-100 font-semibold flex gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                    <span>Daftar Kategori</span>
                </div>
            </div>

            <div class="p-6 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">No</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Nama Kategori</th>
                            <th class="px-4 py-2 text-left text-sm font-bold text-gray-500 uppercase">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($kategoris as $kategori)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ $loop->iteration + ($kategoris->currentPage() - 1) * $kategoris->perPage() }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $kategori->nama_kategori }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $kategori->deskripsi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Tailwind -->
                {{ $kategoris->links() }}
            </div>
        </div>
        <div class="mt-4">
            <a href="/"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow-sm">
                Kembali
            </a>
        </div>
    </div>
@endsection
