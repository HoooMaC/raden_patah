@extends('index')

@section('konten')
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Kajian Harian Tiap Hari Senin</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by admin</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Lorem</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Ipsum</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="masjid1.jpg" alt="..." /></figure>
                {{-- <div
                    class="d-flex flex-row flex-md-column flex-xl-row justify-content-between align-items-end md-align-items-start xl-align-items-end gap-4">
                    <div
                        class="text-gray d-flex flex-column flex-md-row gap-1 gap-md-3 gap-2xl-6 align-items-start md-align-items-center text-sm">
                        <p>by admin</p>
                        <p class="d-none d-md-block">|</p>
                        <div class="d-flex align-items-center gap-2">
                            <p>24 Oktober 2023</p>
                        </div>
                        <p class="d-none d-md-block">|</p>
                        <div class="d-flex align-items-center gap-2">
                            <p>24 Oktober 2023</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae earum expedita
                        fuga molestiae veniam libero aut obcaecati delectus quaerat veritatis in, odio facilis, natus
                        dolorem ea. Similique beatae dicta, amet expedita saepe doloribus! Nulla distinctio aperiam quos
                        sapiente magni fugit ullam placeat, itaque, in corporis dolor maxime aspernatur nihil ratione!
                    </p>
                    <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque temporibus enim
                        est cumque suscipit delectus laudantium totam impedit? Debitis, sunt! Eaque corrupti quaerat
                        fuga hic sint quod odio nostrum odit repellendus explicabo et aliquam fugiat obcaecati ab iusto,
                        quisquam dolorum, nesciunt tenetur mollitia pariatur numquam! Praesentium, incidunt! Molestiae
                        ab delectus explicabo culpa vel ipsa deleniti hic harum animi, et nam minima, dolores quia quos
                        fugit, omnis officiis numquam? Impedit quas eos nulla possimus placeat culpa!</p>
                    <p class="fs-5 mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam in deleniti
                        voluptas iure dolore ex eius nostrum? Officia distinctio tempore totam, exercitationem earum sit
                        itaque nostrum, provident ad, eaque nesciunt. Accusamus veniam dolore incidunt sapiente eos modi
                        animi quos quidem ipsum? Iusto ipsam corrupti repellat quidem iste asperiores consequuntur iure
                        doloremque, odit dignissimos fuga delectus quis totam eius! Quod perferendis nulla non quia a
                        dolor eius itaque at asperiores nesciunt! Quia similique libero ratione vel nemo neque pariatur
                        reprehenderit et.</p>
                </section>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tambahkan Komentar Anda ...">
                                <button class="btn btn-primary" type="button">Kirim</button>
                            </div>
                        </form>
                        <!-- Single comment-->
                    </div>
                </div>
            </section>

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Pencarian</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Pencarian Kategori ..."
                            aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Loremn</a></li>
                                <li><a href="#!">Ipsum</a></li>
                                <li><a href="#!">Dolor</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Sit Amet</a></li>
                                <li><a href="#!">Lorem</a></li>
                                <li><a href="#!">Garment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Pemberitahuan</div>
                <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio consectetur similique excepturi sed, vitae assumenda quisquam facilis iste accusamus inventore maxime recusandae, quae, iure magnam!</div>
            </div>
        </div>
    </div>
</div>
@endsection
