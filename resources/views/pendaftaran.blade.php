<x-layout>
    <x-slot:title>Daftar</x-slot>
        <x-bg />
        <x-bg1 />
        <div class=" p-8 rounded-lg shadow-lg w-full max-w-screen-lg">
            <h2 class="text-2xl font-bold mb-6">Form Pendaftaran Peserta Didik Baru</h2>
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 mb-6 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa:</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" value="{{ old('kelas') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="umur" class="block text-sm font-medium text-gray-700">Umur:</label>
                    <input type="number" name="umur" id="umur" value="{{ old('umur') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="nama_orangtua" class="block text-sm font-medium text-gray-700">Nama Orang Tua:</label>
                    <input type="text" name="nama_orangtua" id="nama_orangtua" value="{{ old('nama_orangtua') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="nomor_hp" class="block text-sm font-medium text-gray-700">Nomor HP:</label>
                    <input type="text" name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="package_id" class="block text-sm font-medium text-gray-700">Paket:</label>
                    <select name="package_id" id="package_id"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Pilih Paket</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}" {{ old('package_id') == $package->id ? 'selected' : '' }}>
                                {{ $package->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
                        Save
                    </button>
                </div>
            </form>
        </div>
</x-layout>