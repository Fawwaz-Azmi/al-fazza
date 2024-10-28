<x-layout-adm>
    <x-slot:title>Pendaftar</x-slot:title>
    <x-bg />
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Data Pendaftar</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full  border-gray-300">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Nama</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Kelas</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Umur</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Nama Orang Tua</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Nomor Telepon</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">
                            Paket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">{{ $student->nama_siswa }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">{{ $student->kelas }}</td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">{{ $student->umur }}</td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">
                                {{ $student->nama_orangtua }}</td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">{{ $student->nomor_hp }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-300 text-sm text-gray-800">{{$student->package->nama}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-bg1 />
</x-layout-adm>