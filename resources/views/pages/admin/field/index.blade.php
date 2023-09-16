@extends('layouts.app')

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Product</h4>
                <a href="{{ route('lapangan.create') }}" class="btn btn-primary" type="button">
                    Add Product
                </a>
            </div>

            <div class="table-responsive mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark text-white">
                            <th>No</th>
                            <th>Image</th>
                            <th>Kode field</th>
                            <th>Name</th>
                            <th>Kategori</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ url('storage/' . $item->cover) }}" alt="image"
                                        style="width: 50px; height: 50px; object-fit: cover"></td>
                                <td>{{ $item->kd_lapangan }}</td>
                                <td>{{ $item->nama_lapangan }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ route('lapangan.show', $item->id) }}"
                                            class="btn btn-info rounded-2 px-2 py-1 text-decoration-none btn-sm">Detail</a>
                                        <a href="{{ route('lapangan.edit', $item->id) }}"
                                            class="btn btn-primary rounded-2 px-2 py-1 text-decoration-none btn-sm">Edit</a>
                                        <form action="{{ route('lapangan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger rounded-2 px-1 py-1 btn-sm " type="submit"
                                                onclick="return confirm('Temenan?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
