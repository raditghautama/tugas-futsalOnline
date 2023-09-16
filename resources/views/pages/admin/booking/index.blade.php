@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="text-dark fw-semibold mb-5">Booking</h4>

            <div class="card border-0">
                <div class="card-body">
                    @if ($bookings->count() > 0)
                        <div class="table">
                            <table class="table">
                                <thead class="fw-semibold text-uppercase fs-7">
                                    <tr>
                                        <th>tanggal booking</th>
                                        <th>kode booking</th>
                                        <th>paket dibooking</th>
                                        <th>total harga</th>
                                        <th>status</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $item)
                                        <tr style="vertical-align: middle">
                                            <td>{{ $item->date }}
                                            </td>
                                            <td>#BOOKING000{{ $item->id }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-light d-flex align-items-center gap-2"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#detailModal{{ $item->id }}">
                                                        <i class="bx bx-file"></i> Lihat Paket
                                                    </button>
                                                </div>
                                            </td>
                                            <td>Rp. {{ number_format($item->total_price) }}</td>
                                            <td>
                                                @if ($item->status == 'pending')
                                                    <span class="badge bg-warning py-2 d-flex align-items-center gap-2"
                                                        style="width: max-content">
                                                        <i class='bx bx-package'></i> Pending
                                                    </span>
                                                @elseif($item->status == 'diterima')
                                                    <span class="badge bg-info py-2 d-flex align-items-center gap-2"
                                                        style="width: max-content">
                                                        <i class='bx bx-car'></i> Diterima
                                                    </span>
                                                @elseif($item->status == 'selesail')
                                                    <span class="badge bg-success py-2 d-flex align-items-center gap-2"
                                                        style="width: max-content">
                                                        <i class='bx bx-check'></i> Selesai
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @if ($item->status == 'success')
                                                        <p class="mb-0 text-success fw-semibold">Sukses</p>
                                                    @elseif ($item->status == 'cancelled')
                                                        <p class="mb-0 text-danger fw-semibold">Dibatalkan</p>
                                                    @else
                                                        <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Ubah Status
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <form
                                                                        action="{{ route('admin.booking.update', $item->id) }}"
                                                                        class="d-inline" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="status"
                                                                            value="in_progress">
                                                                        <button type="submit" class="dropdown-item">
                                                                            Di Proses
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                <li>
                                                                    <form
                                                                        action="{{ route('admin.booking.update', $item->id) }}"
                                                                        class="d-inline" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="status"
                                                                            value="on_delivery">
                                                                        <button type="submit" class="dropdown-item">
                                                                            Dikirim
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                <li>
                                                                    <form
                                                                        action="{{ route('admin.booking.update', $item->id) }}"
                                                                        class="d-inline" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="status"
                                                                            value="success">
                                                                        <button type="submit" class="dropdown-item">
                                                                            Success
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                <li>
                                                                    <form
                                                                        action="{{ route('admin.booking.update', $item->id) }}"
                                                                        class="d-inline" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="status"
                                                                            value="cancelled">
                                                                        <button type="submit" class="dropdown-item">
                                                                            Dibatalkan
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade " id="detailModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="detailModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg ">
                                                <div class="modal-content bg-white">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="detailModalLabel">Detail Paket
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-1">
                                                            <div class="col-5">Produk</div>
                                                            <div class="col-7 fw-semibold">:
                                                                {{ $item->field->nama_lapangan }}</div>
                                                        </div>
                                                        <div class="row mb-1">
                                                            <div class="col-5">Duration</div>
                                                            <div class="col-7 fw-semibold">:
                                                                {{ number_format($item->duration) }} Jam
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1">
                                                            <div class="col-5">Harga</div>
                                                            <div class="col-7 fw-semibold">: Rp.
                                                                {{ number_format($item->field   ->harga) }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-5">Sub Total</div>
                                                            <div class="col-7 fw-semibold">: Rp.
                                                                {{ number_format($item->total_price) }}
                                                            </div>
                                                        </div>

                                                        <hr class="mb-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="mb-0 text-danger text-center">Belum ada transaksi</p>
                    @endif
                </div>
            </div>
    </section>
@endsection
