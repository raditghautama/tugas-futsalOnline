@extends('layouts.home')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="justify-content-around">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Lapangan
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1 class="mb-3">{{$fields->nama_lapangan}}</h1>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ url('storage/' . $fields->cover) }}" width="650px" height="650px">
                </div>

              </div>
                <h2 class="mt-3">Deskripsi</h2>
                <p>{{$fields->ket}}
                </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Informasi Lapangan</h2>
              <hr>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Tipe</th>
                  <td width="50%" class="text-right"> {{$fields->category->name}} </td>
                </tr>
                <tr>
                  <th width="50%">Harga</th>
                  <td width="50%" class="text-right">Rp {{number_format($fields->harga)}} / Jam</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{ route('home.booking', $fields->slug) }}" class="btn btn-block btn-join-now mt-3 py-2" style="width: 356px;">

              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
