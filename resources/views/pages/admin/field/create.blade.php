@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-5">Create New Product</h4>
        <form action="{{ route('lapangan.store') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="kd_lapangan">Kode Lapangan</label>
                <input type="text" name="kd_lapangan" class="form-control" id="kd_lapangan" required>
            </div>
            <div class="mb-3">
                <label for="nama_lapangan">Name</label>
                <input type="text" name="nama_lapangan" class="form-control" id="nama_lapangan" required>
            </div>
            <div class="mb-3">
                <label for="kategori_id">Category</label>
                <select name="kategori_id" id="kategori_id" class="form-control shadow-none" required>
                    <option>- Category -</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="harga">Price</label>
                <input type="number" name="harga" class="form-control" id="harga" required>
            </div>
            <div class="mb-3">
                <label for="cover">Image</label>
                <input type="file" accept="image/*" name="cover" class="form-control" id="cover" required>
            </div>
            <div class="mb-3">
                <label for="ket">Description</label>
                <textarea type="text" name="ket" class="form-control" id="ket" required> </textarea>
            </div>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-primary rounded-2 p-2 px-3" type="submit">Save New Data</button>
                <a href="{{ route('lapangan.index') }}" class="btn btn-light px-3">Back</a>
            </div>

        </form>

    </div>
@endsection
