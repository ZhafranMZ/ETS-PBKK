<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Daftar Item</h1>

                <table>
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
                            <th>Kecacatan</th>
                            <th>Jumlah</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->kondisi }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->kecacatan }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->gambar }}</td>
                                <td>
                                    <a href="{{ route('item.show', $item->id) }}">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ route('item.edit', $item->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
