@extends('Dashboard.template')

@section('konten')
<div class="container-padding">
    <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
              <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                     <h3>{{$tot_belum}}</h3>     
                     <p>DALAM ANTRIAN</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-people"></i>
                  </div>
                    <a href="/report-dalam-antrian" class="small-box-footer">View Details <i class="fa fa-arrow-circle-right"></i></a>
                </div>
          </div>
          <!-- ./col -->
          <div class="col-md-4">
          <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$tot_proses }}</h3>
                <p>SEDANG DIPROSES</p>
              </div>
              <div class="icon">
                <i class="ion ion-load-a"></i>
              </div>
                <a href="/report-sedang-diproses" class="small-box-footer">View Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
                <h3>{{$tot_selesai }}</h3>
                <p>SELESAI</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-checkmark-outline"></i>
              </div>
                <a href="/report-selesai" class="small-box-footer">View Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="container-padding">
    <!-- Start Row -->
    <div class="row">
                
    <!-- Start Panel -->
    <div class="col-md-12">
       <div class="panel panel-default">
            <div class="panel-title">
              <div class="row">
                   <div class="col-md-12">
                      Data Antrian Pengaduan
                   </div>
                </div>
            </div>
            <div class="panel-body table-responsive">
                
            <table id="example0" class="table display">
                <thead>
                  <tr>
                    <th width="5px">No</th>
                    <th>Instansi</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($data as $alldata)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $alldata->perangkat->instansi }}</td>
                      <td>{{ $alldata->kategori->nama }}</td>
                      <td>{{ $alldata->status->nama }}</td>
                      <td><a href="/Pengaduan_Narasumber" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  {{-- @foreach ($wifi as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanWifi" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($subdomain as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanSubdomain" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($server as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanServer" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($pembuatan_app as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanPembuatanapp" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($pengembangan_app as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanPengembanganapp" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($narasumber as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/Pengaduan_Narasumber" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                  @foreach ($zoom as $data)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $data->perangkat->instansi }}</td>
                      <td>{{ $data->kategori->nama }}</td>
                      <td>{{ $data->status->nama }}</td>
                      <td><a href="/PengaduanZoom" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach --}}
                </tbody>
            </table>
            </div>
       </div>
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
    $('#example0').DataTable()
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

