<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Item Display') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            <h1>Edit Formulir</h1>

            <form method="POST" action="{{ route('item.update', $items->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="jenis">Jenis Barang</label>
                    <input type="text" name="jenis" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type="radio" name="kondisi" value="Baik" class="form-control" required>Baik</input>
                    <input type="radio" name="kondisi" value="Layak" class="form-control" required>Layak</input>
                    <input type="radio" name="kondisi" value="Rusak" class="form-control" required>Rusak</input>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kecacatan">Kecacatan</label>
                    <input type="text" name="kecacatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Barang</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <button type="submit">Simpan</button>
                <a href="{{ route('item.index') }}">Back</a>
            </form>

            </div>
        </div>
    </div>
</x-app-layout>
