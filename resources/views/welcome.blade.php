@extends('layouts.home')

@section('content')
    <!-- header -->
    <header class="text-center">
        <h1>
            Nikmati Bermain Futsal
            <br>
            Dengan Teman teman anda
        </h1>
        <p class="mt-3">
            You will see Beatiful
            <br>
            moment you never see before
        </p>
        <a href="#popularContent" class="btn btn-get-started px-4 mt-4">Get started</a>
    </header>
    <!-- end header -->

    <!-- statistik -->
    <main>

        <!-- end statistik -->


        <!-- popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Paket Lapangan</h2>
                        <p>
                            Pilih paket lapangan yang anda inginkan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($fields as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url({{ url('storage/' . $item->cover) }});">
                                <div class="travel-country">PAKET 1</div>
                                <div class="travel-location">{{ $item->nama_lapangan }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail', $item->slug)}}" class="btn btn-travel-detail px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('images/messi.jpg');">
                                <div class="travel-country">PAKET 2</div>
                                <div class="travel-location">PREMIUM OUTDOOR</div>
                                <div class="travel-button mt-auto">
                                    <a href="detail.html" class="btn btn-travel-detail px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('assets/images/ed.jpg');">
                                <div class="travel-country">PAKET 3</div>
                                <div class="travel-location">USUAL INDOR FIELD</div>
                                <div class="travel-button mt-auto">
                                    <a href="detail.html" class="btn btn-travel-detail px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('assets/images/neymar.jpg');">
                                <div class="travel-country">PAKET 4</div>
                                <div class="travel-location">USUAL OUTDOR FIELD</div>
                                <div class="travel-button mt-auto">
                                    <a href="detail.html" class="btn btn-travel-detail px-4">View Details</a>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </section>
        <!-- end popular -->

        <section id="contact-details" class="section-p1 mt-4">
            <!-- Map -->
            <div class="map">
                <div class="container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31626.060441279584!2d113.39659831027242!3d-7.762487354413318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7005a90cfc115%3A0x8331bd4f4ad8d0c0!2sKraksaan%2C%20Patokan%2C%20Kec.%20Kraksaan%2C%20Kabupaten%20Probolinggo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1693362136526!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="details">
                <div class="container">
                    <span>GET IN TOUCH</span>
                    <h2></h2>
                    <h3 class="mx-auto">Arena Field</h3>
                    <div>
                        <li>
                            <i class='bx bxs-location-plus'></i>
                            <p>Patokan
                                Kec. Kraksaan
                                Kabupaten Probolinggo
                                Jawa Timur</p>
                        </li>
                        <li>
                            <i class='bx bxl-instagram'></i>
                            <p>futsalkraksaan@gmail.com</p>
                        </li>
                        <li>
                            <i class='bx bxl-whatsapp'></i>
                            <p>08133-3333-4444</p>
                        </li>
                        <li>
                            <i class='bx bxl-tiktok'></i>
                            <p>futsalkraksaan</p>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->


        <!-- footer -->
        <footer class="section-footer mt-5 mb-4 border-top">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <h5>FEATURES</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Social Media Kit</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>ACCOUNT</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Refund</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Reward</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>COMPANY</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>GET CONNECTED</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Kraksaan</a></li>
                                    <li><a href="#">Indonesia</a></li>
                                    <li><a href="#">0851-9999-8888</a></li>
                                    <li><a href="#">futsalkraksaan@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row border-top justify-content-center align-items-center pt-4">
                    <div class="col-auto text-gray-500 font-weight-light">
                        2019 Copyright Onlenkan • All rights reserved • Made in Kraksaan
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    @endsection
