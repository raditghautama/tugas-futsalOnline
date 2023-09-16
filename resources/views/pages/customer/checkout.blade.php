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
                                    Form Data
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>PREMIUM INDORFIELD</h1>
                            <div class="gallery">
                                <div class="card border-light container justify-content-center mt-5">
                                    <h5 class="card-title mt-3 container">Validation Form</h5>
                                    <div class="card-body">
                                        <table class="table">
                                            <form action="{{ route('booking.store') }}" class="row g-3" method="post"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="field_id" value="{{ $fields->id }}">
                                                <div class="col ">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="Name"
                                                        name="name" id="name" aria-label="Name">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="no_telepon" class="form-label">Number Phone</label>
                                                    <input type="text" class="form-control" id="no_telepon"
                                                        name="no_telepon" placeholder="Your Phone Number ">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="date">Tanggal Bermain</label>
                                                    <input type="date" class="form-control" id="date"
                                                        name="date">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="time">Jam Bermain</label>
                                                    <input type="time" class="form-control" id="time"
                                                        name="time">
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="mb-3">
                                                        <label for="duration">Pilih Durasi Bermain</label>
                                                        <select name="duration" class="form-control" id="duration"
                                                            required>
                                                            <option value="1">...</option>
                                                            <option value="1">1 jam</option>
                                                            <option value="2">2 jam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="proof_of_payment">Image</label>
                                                    <input type="file" accept="image/*" name="proof_of_payment"
                                                        class="form-control" id="proof_of_payment" required>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Check me out
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" class="btn btn-primary">Konfimasi</button>
                                                </div>

                                            </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
