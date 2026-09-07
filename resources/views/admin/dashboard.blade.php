<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-6">Halo Admin! Selamat datang di Panel Administrator Perpus.</p>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('admin.buku.index') }}" class="bg-emerald-600 hover:bg-emerald-700 font-semibold px-4 py-2 rounded-md shadow inline-block">
                            📚 Kelola Data Buku
                        </a>
                        <a href="{{ route('admin.user.index') }}" class="bg-blue-600 hover:bg-blue-700 font-semibold px-4 py-2 rounded-md shadow inline-block">
                            👤 Kelola Data Anggota
                        </a>
                        <a href="{{ route('admin.peminjaman.index') }}" class="bg-blue-600 hover:bg-blue-700 font-semibold px-4 py-2 rounded-md shadow inline-block">Kelola peminjaman</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>