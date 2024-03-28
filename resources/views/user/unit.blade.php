@extends('layout.index')

@section('konten')
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">UNIT</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- UMAR Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100" style="display:flex; align-items:center; justify-content:center;">
                        <img class="img-fluid position-absolute" style="max-height: 100%"
                            src="{{ asset('logo_unit/Logo_Umar.png') }}" alt="logo umar" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> // --}}
                    <h2 class="mb-4">UMAR (Unit Mahasiswa Masjid Raden Patah) </h2>
                    <p class="mb-4" style="text-align: justify">
                        Umar adalah unit mahasiswa di Masjid Raden Patah yang berfokus pada eksekutor program-program yang
                        ada di masjid.
                        Ada banyak program yang dijalankan seperti kismala, kultum zuhur, kelas pranikah dan parenting, dll.
                    </p>
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- UMAR End -->

    <!-- PTQ Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 order-last order-md-first wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="mb-4">PTQ (Pusat Tahfidz Qur'an) </h2>
                    <p class="mb-4" style="text-align: justify">
                        PTQ Adalah unit di Masjid Raden Patah yang berfokus kepada Al-Qur'an. Khususnya program tahfidz.
                        Program tahfidz yang ada di PTQ terbuka untuk umum dan bisa diikuti oleh siapa saja.
                        Selain program tahfidz, PTQ juga mengadakan program baca tulis Al-Qur'an, kelas tahsin, kajian
                        tafsir,
                        tahfidz camp, wisuda tahfidz, dan lain-lain.
                    </p>
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                </div>
                <div class="col-lg-6 order-first order-md-last wow fadeInUp" data-wow-delay="0.1s"
                    style="min-height: 400px;">
                    <div class="position-relative h-75" style="display:flex; align-items:center; justify-content:center;">
                        <img class="img-fluid position-absolute" style="max-height: 100%;"
                            src="{{ asset('logo_unit/Logo_PTQ.png') }}" alt="logo ptq" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PTQ End -->

    <!-- DC Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100" style="display:flex; align-items:center; justify-content:center;">
                        <img class="img-fluid position-absolute" style="max-height: 100%"
                            src="{{ asset('logo_unit/Logo_DC.png') }}" alt="logo digital creative"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> // --}}
                    <h2 class="mb-4">DC (Digital Creative)</h2>
                    <p class="mb-4" style="text-align: justify">
                        Digital Creative adalah unit yang ada di Masjid Raden Patah yang berfokus kepada pengembangan media
                        digital.
                        Mulai dari desain, fotografi, videografi, sosial media, dan juga pengembangan web. Digital Creative
                        bertujuan
                        untuk mengembangkan dakwah dalam bentuk digital.
                    </p>
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- DC End -->

    <!--  IMC Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 order-last order-md-first wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="mb-4">IMC (Imam Muda Center)</h2>
                    <p class="mb-4" style="text-align: justify">
                        Imam Muda Center merupakan unit yang bergerak dibidang pembinaan kader imam muda di Universitas
                        Brawijaya yang nantinya dibimbing langsung oleh ahli dibidangnya dengan program program menarik yang
                        ditawarkan. Imam Muda merupakan wadah bagi ahasiswa muslim Universitas Brawijaya yang
                        ingin berkontribusi dalam kegiatan beribadatan dan mengembangkan potensi menjadi imam sholat untuk
                        bergabung ke salah satu unit binaannya yaitu Imam Muda Center.
                    </p>
                    <p style="text-align: justify">
                        Ada 2 program yang dilaksanakan oleh Imam Muda Center yaitu: 
                        <ol>
                            <li>Kelas seni baca Al-Qur'an</li>
                            <li>Pembinaan Imam Muda</li>
                        </ol>
                    </p>
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
                <div class="col-lg-6 order-first order-md-last wow fadeInUp" data-wow-delay="0.1s"
                    style="min-height: 400px;">
                    <div class="position-relative h-100" style="display:flex; align-items:center; justify-content:center;">
                        <img class="img-fluid position-absolute" style="max-height: 100%"
                            src="{{ asset('logo_unit/Logo_IMC.png') }}" alt="logo imam muda center"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- IMC End -->

    <!-- Lunch Space Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100" style="display:flex; align-items:center; justify-content:center;">
                        <img class="img-fluid position-absolute" style="max-height: 100%"
                            src="{{ asset('logo_unit/Logo_Lunch_Space.png') }}" alt="logo mrp lunch space"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> // --}}
                    <h2 class="mb-4">MRP Lunch Space</h2>
                    <p class="mb-4" style="text-align: justify">
                        MRP Lunch Space adalah unit kantin yang ada di Masjid Raden Patah.
                        Yang menyediakan berbagai makanan yang sehat, halal, dan murah.
                    </p>
                    {{-- TEMPORARY  Inactive for now --}}
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Lunch Space End -->
@endsection
