<x-layout-adm>
    <x-slot:title>Guru</x-slot:title>
    <x-bg />
    <div class="max-w-2xl mx-auto  p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Create New Teacher</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="nama_guru" class="block text-sm font-medium text-gray-700">Nama Guru:</label>
                <input type="text" name="nama_guru" id="nama_guru" value="{{ old('nama_guru') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body:</label>
                <textarea name="body" id="body"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">{{ old('body') }}</textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar:</label>
                <input type="file" name="gambar" id="gambar"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <button type="submit"
                        class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
                    Save
                </button>
            </div>
        </form>
    </div>
    <x-bg1 />
</x-layout-adm>