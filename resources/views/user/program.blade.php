@extends('layout.index')

@section('konten')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">PROGRAM</h1>
            </div>
        </div>
    </div>
</div>

{{-- @dd($all_program) --}}
@foreach ($all_program as $programs)
    {{-- @include('partials.program_show', ['judul_program' => $programs['category_title'], 'programs' => $programs['programs']]) --}}
    @include('partials.program_per_category')
@endforeach

{{-- @include('partials.program_show', ['judul_program' => 'PROGRAM HARIAN',   'lokasi_gambar' => 'foto_programharian/','programs' => $program_harian])
@include('partials.program_show', ['judul_program' => 'PROGRAM MINGGUAN', 'lokasi_gambar' => 'foto_programmingguan/','programs' => $program_mingguan])
@include('partials.program_show', ['judul_program' => 'PROGRAM TRIWULAN',  'lokasi_gambar' => 'foto_programtriwulan/','programs' => $program_triwulan])
@include('partials.program_show', ['judul_program' => 'PROGRAM INSIDENTAL',  'lokasi_gambar' => 'foto_programinsidental/','programs' => $program_insidental])
@include('partials.program_show', ['judul_program' => 'PROGRAM LAINNYA',  'lokasi_gambar' => 'foto_programlainnya/','programs' => $program_lainnya]) --}}

@endsection
