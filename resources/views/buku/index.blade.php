<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-end mb-4">
                <a href="{{ route('buku.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    + Tambah Buku
                </a>
            </div>

            <div class="bg-white shadow-md rounded p-4">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Judul</th>
                            <th class="border px-4 py-2">Penulis</th>
                            <th class="border px-4 py-2">Penerbit</th>
                            <th class="border px-4 py-2">Tahun</th>
                            <th class="border px-4 py-2">Cover</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bukus as $buku)
                        <tr>
                            <td class="border px-4 py-2">{{ $buku->judul }}</td>
                            <td class="border px-4 py-2">{{ $buku->penulis }}</td>
                            <td class="border px-4 py-2">{{ $buku->penerbit }}</td>
                            <td class="border px-4 py-2">{{ $buku->tahun_terbit }}</td>
                            <td class="border px-4 py-2">
                                @if($buku->cover)
                                    <img src="{{ asset('storage/' . $buku->cover) }}" class="w-16">
                                @else
                                    <span>Tidak ada</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2 flex space-x-2">
                                <a href="{{ route('buku.edit', $buku->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                                <form method="POST" action="{{ route('buku.destroy', $buku->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Hapus buku ini?')" class="bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada buku ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $bukus->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
