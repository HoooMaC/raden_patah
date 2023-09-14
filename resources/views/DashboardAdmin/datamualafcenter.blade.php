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
                          Data Mualaf Center
                         </div>
                         <div class="col-md-12">
                                    <button src="{{url('/Datamualafcenter')}}" style="float: right;margin-bottom:20px" data-toggle="modal" data-target="#myModal"
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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>no.HP</th> 
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $no =1;
                                @endphp
                                @foreach ($mualafcenter as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->telpon}}</td>
                                            <td>{{$data->email}}</td>
                                           
                                            <td>
                                                <button data-toggle="modal" data-target="#myModalEdit{{$data->id_mualaf_center}}"
                                                        data-nama="{{ $data->nama}}" 
                                                        data-alamat="{{$data->alamat}}" 
                                                        data-telpon="{{$data->telpon}}"
                                                        data-email="{{$data->email}}"
                                                        
                                                        class="btn btn-warning btn-sm"><i class=""></i> Edit
                                                </button>
                                                

                                                <form action="/Datamualafcenter/{{$data->id_mualaf_center}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <div class="template-demo">
                                                        <div>
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class=""></i> Hapus          
                                                            </button>
                                                        </div>
                                                        
                                                    </div>
                                                </form>

                                                        
                                                        <div>
                                                            <div>
                                                                <button type="submit" class="btn btn-success btn-sm" onclick="changeText(this)">
                                                                    <span id="buttonText">Ceklist</span>
                                                                </button>
                                                                <script>
                                                                    function changeText(button) {
                                                                        var buttonText = document.getElementById("buttonText");
                                                                        buttonText.innerHTML = "ACC";
                                                                        button.disabled = true; // Opsional: Menonaktifkan tombol setelah diklik
                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>
                                                    
                                            </td>
                                        </tr>
                                        <div id="myModalEdit{{$data->id_mualaf_center}}" class="modal fade"  tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">EDIT DATA Mualaf Center<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                                    </div>
                                    
                                                    <form method="post" enctype="multipart/form-data" action="/Datamualafcenter/update/{{$data->id_mualaf_center}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" class="form-control" value="{{$data->id_mualaf_center}}"> 
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <input type="hidden" name="id_mualaf_center" class="form-control" value="{{$data->id_mualaf_center}}"> 
                                                                    <div class="form-group">
                                                                    <label>Nama</label>
                                                                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                                                        placeholder="Masukkan Nama" id="nama" value="{{$data->nama}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                                        placeholder="Masukkan Alamat" id="alamat" value="{{$data->alamat}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="form-group">
                                                                    <label>No. HP</label>
                                                                    <input name="telpon" type="text" class="form-control @error('telpon') is-invalid @enderror"
                                                                        placeholder="Masukkan telpon" id="telpon" value="{{$data->telpon}}" required>
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                      <label>Email</label>
                                                                      <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                                                          placeholder="Masukkan Email" id="email" value="{{$data->email}}" required>
                                                                     </div>
                                                                  </div>
                                                                  
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myModalDelete{{$data->id_mualaf_center}}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">HAPUS DATA MUALAF CENTER<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                                    </div>
                                    
                                                    <form method="get" enctype="multipart/form-data" action="/Datamualafcenter/delete/{{$data->id_mualaf_center}}">
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
                                                <h4 class="modal-title">TAMBAH DATA MUALAF CENTER<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                            </div>
                            
                                            <form method="post" enctype="multipart/form-data" action="/Datamualafcenter">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <input type="hidden" name="id_mualaf_center" class="form-control" value="{{$data->id_mualaf_center}}"> 
                                                            <div class="form-group">
                                                            <label>Nama</label>
                                                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                                                placeholder="Masukkan Nama" id="nama" value="" required>
                                                           </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                                placeholder="Masukkan Alamat" id="alamat" value="" required>
                                                           </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="form-group">
                                                            <label>No. HP</label>
                                                            <input name="telpon" type="text" class="form-control @error('telpon') is-invalid @enderror"
                                                                placeholder="Masukkan Telpon" id="telpon" value="" required>
                                                           </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                              <label>Email</label>
                                                              <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                                                  placeholder="Masukkan Email" id="email" value="" required>
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