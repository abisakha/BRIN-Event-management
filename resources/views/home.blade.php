@extends('layouts.main')
@section('content')
    <div class="brin-home">
        <!-- ================= NAVBAR ================= -->
        <header class="brin-navbar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand">
                            <img src="{{asset('assets/images/logo.svg')}}">
                            <div>
                                <h6>
                                    BRIN
                                </h6>
                                <span>
                                    EVENT MANAGEMENT
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="search-box">
                            <input class="form-control" placeholder="Search events...">
                            <img src="{{asset('assets/images/search.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <ul class="nav justify-content-center gap-5">
                            <li class="active">
                                Home
                            </li>
                            <li>
                                Events
                            </li>
                            <li>
                                Calendar
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-1 text-end ">
                        <a  href="" class="signin">
                            Sign in
                        </a>
                    </div>

                </div>
            </div>
        </header>


        <!-- ================= HERO ================= -->
        <section class="hero">
                <img src="{{ asset('assets/images/Rectangle.png') }}" class="hero-image">

                <div class="container">
                    <div class="hero-content">

                        <div class="badge-brin">
                            BRIN RESEARCH NETWORK
                        </div>

                        <h1>
                            Discover and Join
                            <br>
                            Research & Innovation
                            <br>
                            Events at BRIN
                        </h1>

                        <p>
                            Explore world-class academic seminars,
                            scientific conferences, and hands-on technical
                            workshops led by leading global and Indonesian innovators.
                        </p>

                        <div class="d-flex gap-3 mt-4">
                            <a href="#" class="btn btn-primary-custom">
                                Explore Events
                            </a>

                            <a href="#" class="btn btn-outline-custom">
                                <img src="{{ asset('assets/images/calendar.png') }}">
                                View Calendar
                            </a>
                        </div>

                    </div>
                </div>
        </section>


        <!-- ================= EVENT ================= -->
        <section class="events-section">
            <div class="container">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2>Upcoming Research Events</h2>
                        <p>Actively enrolling sessions for researchers, academics, and partners</p>
                    </div>
                    <button class="btn btn-outline-custom">See All Events</button>
                </div>

                <div class="row g-4">
                    @for($i = 0; $i < 8; $i++)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="event-card">
                                <img src="{{ asset('assets/images/card-image.png') }}">

                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <span class="status">ONLINE</span>
                                        <span class="date">20 May 2025</span>
                                    </div>

                                    <h5>BRIN Environment Policy Analysis Talk</h5>

                                    <p>📍 Jakarta, Indonesia</p>

                                    <button class="btn btn-outline-custom">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>


        <!-- ================= CALENDAR ================= -->
        <section class="calendar-area">
            <div class="container-fluid">
                <div class="row calendar-row align-items-start">
                    <div class="col-lg-auto">
                        <div class="calendar-box">
                          <h4>
                                May 2025
                            </h4>
                            <div class="calendar-grid">
                                @for($i = 1; $i <= 31; $i++)
                                    <div>
                                        {{$i}}
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="col-lg designed-column">
                        <h2>
                            Designed for Researchers & Innovators
                        </h2>
                        <div class="benefit">
                            <h5>
                                Easy Registration
                            </h5>
                            <p>
                                Register securely in seconds with your institutional credential.
                            </p>
                        </div>
                        <div class="benefit">
                            <h5>
                                Real-time Updates
                            </h5>
                            <p>
                                Get immediate system and schedule updates.
                            </p>
                        </div>
                        <div class="benefit">
                            <h5>
                                Digital Certificates
                            </h5>
                            <p>
                                Claim verified digital certificates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- foooter --}}
        <footer class="brin-footer">
            <div class="container">

                <div class="row footer-top">

                    {{-- BRAND --}}
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="footer-brand">

                            <div class="d-flex align-items-center mb-3">
                                <div class="footer-logo">
                                    B
                                </div>
                                <h5>BRIN</h5>
                            </div>

                            <p>
                                Badan Riset dan Inovasi Nasional (BRIN) adalah lembaga pemerintah nonkementerian yang berada di bawah dan bertanggung jawab kepada Presiden dalam menyelenggarakan penelitian, pengembangan, pengkajian, dan penerapan.
                            </p>

                        </div>
                    </div>

                    {{-- TENTANG --}}
                    <div class="col-lg-2 col-md-4 col-6">
                        <h6>Tentang</h6>

                        <ul>
                            <li>Profil BRIN</li>
                            <li>Struktur Organisasi</li>
                            <li>Deputi Bidang Riset</li>
                            <li>Hubungi Kami</li>
                        </ul>
                    </div>

                    {{-- LAYANAN --}}
                    <div class="col-lg-2 col-md-4 col-6">
                        <h6>Layanan</h6>

                        <ul>
                            <li>Pendaftaran Event</li>
                            <li>Pengajuan Fasilitas</li>
                            <li>Dana Riset</li>
                            <li>Publikasi Ilmiah</li>
                        </ul>
                    </div>

                    {{-- BANTUAN --}}
                    <div class="col-lg-2 col-md-4 col-6">
                        <h6>Bantuan</h6>

                        <ul>
                            <li>Pusat Bantuan</li>
                            <li>Panduan Pengguna</li>
                            <li>F.A.Q</li>
                            <li>Kebijakan Privasi</li>
                        </ul>
                    </div>

                    {{-- IKUTI KAMI --}}
                    <div class="col-lg-2 col-md-4 col-6">
                        <h6>Ikuti Kami</h6>

                        <ul>
                            <li>Instagram</li>
                            <li>YouTube</li>
                            <li>LinkedIn</li>
                            <li>X / Twitter</li>
                        </ul>
                    </div>

                </div>

                {{-- COPYRIGHT --}}
                <div class="footer-bottom">
                    <div>
                        © 2024 BRIN. Hak Cipta Dilindungi.
                    </div>

                    <div>
                        Sistem Informasi Manajemen Event Ilmiah Nasional
                    </div>
                </div>

            </div>
        </footer>



@endsection
