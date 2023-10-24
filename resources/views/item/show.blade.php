<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Item Display') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <h1>Detail Formulir</h1>

                <p>Jenis: {{ $items->jenis }}</p>
                <p>Kondisi: {{ $items->kondisi }}</p>
                <p>Keterangan: {{ $items->keterangan }}</p>
                <p>Kecacatan: {{ $items->kecacatan }}</p>
                <p>Jumlah: {{ $items->jumlah }}</p>
                <p>Gambar: {{ $items->gambar }}</p>

                <a href="{{ route('item.edit', $items->id) }}">Edit</a>
                <form method="POST" action="{{ route('item.destroy', $items->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
                <a href="{{ route('item.index') }}">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>
