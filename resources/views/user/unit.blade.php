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
                    <p class="mb-4" style="text-align: justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe impedit inventore
                        corrupti quae eius animi necessitatibus repellat molestiae aspernatur pariatur eligendi libero
                        eveniet quas doloremque facilis voluptatem id, consequuntur, deleniti quidem dolores, voluptates
                        modi! Non repellat porro dicta voluptatibus, sit, totam quasi reprehenderit alias nam culpa magni
                        veniam beatae suscipit expedita deserunt necessitatibus quibusdam perspiciatis ad temporibus
                        corporis quas. Eius possimus, nostrum, omnis consectetur similique nam quam quaerat soluta
                        architecto accusantium temporibus eligendi repellat, aut harum dolore deleniti perspiciatis iste
                        aperiam unde sint quis porro eos error perferendis. Aliquam, molestiae libero! Autem esse quaerat
                        sed nisi sit earum soluta expedita.</p>
                    <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button>
                </div>
            </div>
        </div>
    </div>

    <!-- UMAR End -->

    <!-- PTQ Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="mb-4">PTQ (Pusat Tahfidz Qur'an) </h2>
                    <p class="mb-4" style="text-align: justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga quis distinctio quos quam deserunt
                        aliquam iusto quaerat, facilis provident consectetur unde cupiditate sint ipsa, repellat eius ipsum,
                        reiciendis aperiam sapiente eveniet? Rerum mollitia, magni placeat doloremque qui labore dolorem
                        distinctio natus molestiae saepe voluptate, dicta repellendus. Similique voluptatum iusto inventore
                        cumque est, fuga soluta velit unde aut consequatur placeat ipsa ipsum asperiores illum fugit
                        suscipit, nemo libero, quaerat repellendus quis nostrum? Impedit autem itaque enim eius fugiat!
                        Doloribus nemo porro quidem amet minus sit illo magnam eos, laudantium atque dolorem, ducimus
                        accusamus voluptatibus ipsum rerum ex fuga incidunt ea? Maxime!
                    </p>
                    <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
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
                    <p class="mb-4" style="text-align: justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe impedit inventore
                        corrupti quae eius animi necessitatibus repellat molestiae aspernatur pariatur eligendi libero
                        eveniet quas doloremque facilis voluptatem id, consequuntur, deleniti quidem dolores, voluptates
                        modi! Non repellat porro dicta voluptatibus, sit, totam quasi reprehenderit alias nam culpa magni
                        veniam beatae suscipit expedita deserunt necessitatibus quibusdam perspiciatis ad temporibus
                        corporis quas. Eius possimus, nostrum, omnis consectetur similique nam quam quaerat soluta
                        architecto accusantium temporibus eligendi repellat, aut harum dolore deleniti perspiciatis iste
                        aperiam unde sint quis porro eos error perferendis. Aliquam, molestiae libero! Autem esse quaerat
                        sed nisi sit earum soluta expedita.</p>
                    <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DC End -->

    <!--  IMC Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="mb-4">IMC (Imam Muda Center)</h2>
                    <p class="mb-4" style="text-align: justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga quis distinctio quos quam deserunt
                        aliquam iusto quaerat, facilis provident consectetur unde cupiditate sint ipsa, repellat eius ipsum,
                        reiciendis aperiam sapiente eveniet? Rerum mollitia, magni placeat doloremque qui labore dolorem
                        distinctio natus molestiae saepe voluptate, dicta repellendus. Similique voluptatum iusto inventore
                        cumque est, fuga soluta velit unde aut consequatur placeat ipsa ipsum asperiores illum fugit
                        suscipit, nemo libero, quaerat repellendus quis nostrum? Impedit autem itaque enim eius fugiat!
                        Doloribus nemo porro quidem amet minus sit illo magnam eos, laudantium atque dolorem, ducimus
                        accusamus voluptatibus ipsum rerum ex fuga incidunt ea? Maxime!
                    </p>
                    <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
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
                    <p class="mb-4" style="text-align: justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe impedit inventore
                        corrupti quae eius animi necessitatibus repellat molestiae aspernatur pariatur eligendi libero
                        eveniet quas doloremque facilis voluptatem id, consequuntur, deleniti quidem dolores, voluptates
                        modi! Non repellat porro dicta voluptatibus, sit, totam quasi reprehenderit alias nam culpa magni
                        veniam beatae suscipit expedita deserunt necessitatibus quibusdam perspiciatis ad temporibus
                        corporis quas. Eius possimus, nostrum, omnis consectetur similique nam quam quaerat soluta
                        architecto accusantium temporibus eligendi repellat, aut harum dolore deleniti perspiciatis iste
                        aperiam unde sint quis porro eos error perferendis. Aliquam, molestiae libero! Autem esse quaerat
                        sed nisi sit earum soluta expedita.</p>
                    {{-- TEMPORARY  Inactive for now --}}
                    {{-- <button type="button" class="btn btn-primary" style="border-radius: 10px">See More</button> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Lunch Space End -->
@endsection
