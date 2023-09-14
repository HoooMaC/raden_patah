@extends('template')

@section('konten')
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('success'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{session('success')}}
</div>
@endif
<div class="container-padding">
                  <!-- Start Row -->
                  <div class="row">
                
                    <!-- Start Panel -->
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-title">
                        <div class="row">
                         <div class="col-md-12">
                          Data Pengumuman
                         </div>
                         <div class="col-md-12">
                                    <button src="{{url('/pengumuman')}}" style="float: right;margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                    class="btn btn-rounded btn-option2"><i class="bi bi-plus-lg"></i><span
                                        class="glyphicon glyphicon-plus"></span> Tambah Data</button>
                         </div>
                        </div>
                        </div>
                        <div class="panel-body table-responsive">
                
                            <table id="example0" class="table display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th >Nama Kegiatan</th>
                                        <th >Judul</th>
                                        <th >Pemateri</th>
                                        <th >Pelaksanaan</th> 
                                        <th >Tempat</th>
                                        <th >Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $no =1;
                                @endphp
                                @foreach ($pengumuman1 as $data)
                                        <tr>
                                            <td class="dtr-cobtrol sorting_1" tabindex="0">{{$no++}}</td>
                                            <td  class="dtr-cobtrol sorting_1" tabindex="1">{{$data->nama_kegiatan}}</td>
                                            <td  class="dtr-cobtrol sorting_1" tabindex="2">{{$data->judul}}</td>
                                            <td class="dtr-cobtrol sorting_1" tabindex="3">{{$data->pemateri}}</td>
                                            <td class="dtr-cobtrol sorting_1" tabindex="3">{{$data->pelaksanaan}}</td>
                                            <td class="dtr-cobtrol sorting_1" tabindex="3">{{$data->tempat}}</td>
                                            <td>
                                                <button data-toggle="modal" data-target="#myModalEdit{{$data->id_pengumuman}}"
                                                        data-nama_kegiatan="{{ $data->nama_kegiatan}}" 
                                                        data-judul="{{$data->judul}}" 
                                                        data-pemateri="{{$data->pemateri}}"
                                                        data-pelaksanaan="{{$data->pelaksanaan}}"
                                                        data-tempat="{{$data->tempat}}"
                                                        class="btn btn-warning btn-m"><i class="fa fa-edit"></i>
                                                </button>
                                            
                                                <form action="/pengumuman/{{$data->id_pengumuman}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <div class="template-demo">
                                                        <div>
                                                            <button type="submit" class="btn btn-danger btn-m">
                                                                <i class="fa fa-trash"></i>           
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                            
                                        <div id="myModalEdit{{$data->id_pengumuman}}" class="modal fade"  tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">EDIT DATA Pengumuman<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                                    </div>
                                    
                                                    <form method="post" enctype="multipart/form-data" action="/pengumuman/update/{{$data->id_pengumuman}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" class="form-control" value="{{$data->id_pengumuman}}"> 
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <input type="hidden" name="id_pengumuman" class="form-control" value="{{$data->id_pengumuman}}"> 
                                                                    <div class="form-group">
                                                                    <label>Nama Kegiatan</label>
                                                                    <input name="nama_kegiata" type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror"
                                                                        placeholder="Masukkan Nama Kegiatan" id="nama_kegiatan" value="{{$data->nama_kegiatan}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>Judul</label>
                                                                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror"
                                                                        placeholder="Masukkan Judul" id="judul" value="{{$data->judul}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>Pemateri</label>
                                                                    <input name="pemateri" type="text" class="form-control @error('pemateri') is-invalid @enderror"
                                                                        placeholder="Masukkan Pemateri" id="pemateri" value="{{$data->pemateri}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="form-group">
                                                                     <label>Pelaksanaan</label>
                                                                     <input name="pelaksanaan" type="text" class="form-control @error('pelaksanaan') is-invalid @enderror"
                                                                         placeholder="Masukkan Pelaksanaan" id="pelaksanaan" value="{{$data->pelaksanaan}}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                      <label>Tempat</label>
                                                                      <input name="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror"
                                                                          placeholder="Masukkan Tempat" id="tempat" value="{{$data->tempat}}" required>
                                                                     </div>
                                                                </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myModalDelete{{$data->id_pengumuman}}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">HAPUS DATA PENGUMUMAN<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                                    </div>
                                    
                                                    <form method="post" enctype="multipart/form-data" action="/pengumuman/delete/{{$data->id_pengumuman}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="container-fluid">
                                                            <h1 style="color:#C91D22; text-align:center;">Delete Data</h1>
                                                            <p style="color:red; text-align:center;">Anda yakin ingin menghapus data yang telah tersimpan?</p>
                                                          
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                          </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                
                      </div>
                    </div>
                    <!-- End Panel -->
                  </div>
                  <!-- End Row -->
                  <div id="myModal" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">TAMBAH DATA PENGUMUMAN<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                            </div>
                            
                                            <form method="post" enctype="multipart/form-data" action="/pengumuman">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">

                                                                <div class="row">
                                                                    <input type="hidden" name="id_pengumuman" class="form-control" value="{{$data->id_pengumuman}}"> 
                                                                    <div class="form-group">
                                                                    <label>Nama Kegiatan</label>
                                                                    <input name="nama_kegiata" type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror"
                                                                        placeholder="Masukkan Nama Kegiatan" id="nama_kegiatan" value="{{$data->nama_kegiatan}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>Judul</label>
                                                                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror"
                                                                        placeholder="Masukkan Judul" id="judul" value="{{$data->judul}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>Pemateri</label>
                                                                    <input name="pemateri" type="text" class="form-control @error('pemateri') is-invalid @enderror"
                                                                        placeholder="Masukkan Pemateri" id="pemateri" value="{{$data->pemateri}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="form-group">
                                                                     <label>Pelaksanaan</label>
                                                                     <input name="pelaksanaan" type="text" class="form-control @error('pelaksanaan') is-invalid @enderror"
                                                                         placeholder="Masukkan Pelaksanaan" id="pelaksanaan" value="{{$data->pelaksanaan}}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                      <label>Tempat</label>
                                                                      <input name="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror"
                                                                          placeholder="Masukkan Tempat" id="tempat" value="{{$data->tempat}}" required>
                                                                     </div>
                                                                </div>

                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" name="">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

<!-- ================================================
jQuery Library
================================================ -->
<script src="{{asset('Dashboard/js/jquery.min.js')}}"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{asset('Dashboard/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script src="{{asset('Dashboard/js/plugins.js')}}"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="{{asset('Dashboard/js/datatables/datatables.min.js')}}"></script>



<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>



<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );

</script>

@endsection