<x-layout-adm>
    <x-slot:title>Konten</x-slot:title>
    <x-bg />
    <div class="py-20">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Daftar Packages</h1>

            <!-- Form untuk menambah package -->
            <form action="{{ route('paket.store') }}" method="POST" class="mb-6">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="nama" placeholder="Nama package" class="border p-2 mr-2 rounded w-full"
                        required>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Tambah
                    </button>
                </div>
                @if ($errors->any())
                    <div class="text-red-500 mt-2">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
            </form>

            <!-- Daftar packages -->
            <div class="bg-white rounded shadow p-4">
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-center mt-8">
                    <div class="w-full ">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-300 text-center">No</th>
                                    <th class="py-2 px-4 border-b border-gray-300 text-center">Nama</th>
                                    <th class="py-2 px-4 border-b border-gray-300 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-300 text-center">{{$loop->iteration}}</td>
                                        <td class="py-2 px-4 border-b border-gray-300 text-center">{{$package->nama}}</td>
                                        <td class="py-2 px-4 border-b border-gray-300 text-center">
                                            <form action="{{ route('paket.destroy', $package->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus package ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                                                    Hapus
                                                </button>
                                            </form>
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
    <x-bg1 />
</x-layout-adm>