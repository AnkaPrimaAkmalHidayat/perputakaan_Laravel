<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                {{-- Form Pencarian --}}
                <form action="{{ route('buku.index') }}" method="GET" class="mb-6 flex flex-col md:flex-row md:items-center gap-3">
                    <input type="text" name="search" placeholder="Cari buku..."
                        value="{{ request('search') }}"
                        class="w-full md:w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Cari</button>
                </form>

                {{-- Tombol Tambah --}}
                <div class="mb-4 text-right">
                    <a href="{{ route('buku.create') }}"
                        class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">+ Tambah Buku</a>
                </div>

                {{-- Tabel Daftar Buku --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white dark:bg-gray-700 rounded-lg shadow text-sm text-gray-800 dark:text-white">
                        <thead class="bg-gray-200 dark:bg-gray-600">
                            <tr>
                                <th class="px-4 py-3 text-left">Judul</th>
                                <th class="px-4 py-3 text-left">Penulis</th>
                                <th class="px-4 py-3 text-left">Penerbit</th>
                                <th class="px-4 py-3 text-left">Tahun</th>
                                <th class="px-4 py-3 text-left">Cover</th>
                                <th class="px-4 py-3 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bukus as $buku)
                                <tr class="border-t border-gray-300 dark:border-gray-600">
                                    <td class="px-4 py-2">{{ $buku->judul }}</td>
                                    <td class="px-4 py-2">{{ $buku->penulis }}</td>
                                    <td class="px-4 py-2">{{ $buku->penerbit }}</td>
                                    <td class="px-4 py-2">{{ $buku->tahun_terbit }}</td>
                                    <td class="px-4 py-2">
                                        @if ($buku->cover)
                                            <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Buku" class="h-20 rounded-md">
                                        @else
                                            <span class="text-gray-500 italic">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 flex gap-2">
                                        <a href="{{ route('buku.edit', $buku->id) }}"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center px-4 py-4 text-gray-500">Tidak ada data buku</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="mt-6">
                    {{ $bukus->appends(['search' => request('search')])->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
