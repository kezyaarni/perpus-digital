<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <a href="{{ route('admin.buku.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded mb-4 inline-block">+ Tambah Buku Baru</a>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full border-collapse border border-gray-300 mt-4">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 p-2 text-left">Kode</th>
                            <th class="border border-gray-300 p-2 text-left">Judul</th>
                            <th class="border border-gray-300 p-2 text-left">Pengarang</th>
                            <th class="border border-gray-300 p-2 text-left">Penerbit</th>
                            <th class="border border-gray-300 p-2 text-left">Stok</th>
                            <th class="border border-gray-300 p-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bukus as $buku)
                            <tr>
                                <td class="border border-gray-300 p-2">{{ $buku->kode_buku }}</td>
                                <td class="border border-gray-300 p-2">{{ $buku->judul }}</td>
                                <td class="border border-gray-300 p-2">{{ $buku->pengarang }}</td>
                                <td class="border border-gray-300 p-2">{{ $buku->penerbit }}</td>
                                <td class="border border-gray-300 p-2">{{ $buku->stok }}</td>
                                <td class="border border-gray-300 p-2 text-center">
                                    <a href="{{ route('admin.buku.edit', $buku->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                                    <form action="{{ route('admin.buku.destroy', $buku->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin mau hapus buku ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-4 text-center text-gray-500">Belum ada data buku.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>