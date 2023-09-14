<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>ADMIN MRP UB</title>

  <!-- ========== Css Files ========== -->
  <link href="{{asset('Dashboard/css/root.css')}}" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- favicon -->
  <link rel="icon" type="image/png" href="{{ asset('img/logo MRP.png')}}">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="{{asset('Dashboard/img/Neon-Loading.gif')}}" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  @include('layoutsdashboard.navbar')
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
@include('layoutsdashboard.sidebar')
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
@include('layoutsdashboard.header')
                  <div class="container-fluid">
                      @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error )
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  </div>
                  @endif
  <!-- End Page Header -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
@yield('konten')
</div>

<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
@include('layoutsdashboard.footer')
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 
{{-- <!-- ================================================
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
<script src="{{asset('Dashboard/js/plugins.js')}}"></script> --}}

<!-- ================================================
Bootstrap Select
================================================ -->
<script src="{{asset('Dashboard/js/bootstrap-select/bootstrap-select.js')}}"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script src="{{asset('Dashboard/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script src="{{asset('Dashboard/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js')}}"></script>
<!-- bootstrap file -->
<script src="{{asset('Dashboard/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

<!-- ================================================
Summernote
================================================ -->
<script src="{{asset('Dashboard/js/summernote/summernote.min.js')}}"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script src="{{asset('Dashboard/js/flot-chart/flot-chart.js')}}"></script>
<!-- time.js -->
<script src="{{asset('Dashboard/js/flot-chart/flot-chart-time.js')}}"></script>
<!-- stack.js -->
<script src="{{asset('Dashboard/js/flot-chart/flot-chart-stack.js')}}"></script>
<!-- pie.js -->
<script src="{{asset('Dashboard/js/flot-chart/flot-chart-pie.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('Dashboard/js/flot-chart/flot-chart-plugin.js')}}"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script src="{{asset('Dashboard/js/chartist/chartist.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('Dashboard/js/chartist/chartist-plugin.js')}}"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script src="{{asset('Dashboard/js/easypiechart/easypiechart.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('Dashboard/js/easypiechart/easypiechart-plugin.js')}}"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="{{asset('Dashboard/js/rickshaw/d3.v3.js')}}"></script>
<!-- main file -->
<script src="{{asset('Dashboard/js/rickshaw/rickshaw.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('Dashboard/js/rickshaw/rickshaw-plugin.js')}}"></script>

{{-- <!-- ================================================
Data Tables
================================================ -->
<script src="{{asset('Dashboard/js/datatables/datatables.min.js')}}"></script> --}}

<!-- ================================================
Sweet Alert
================================================ -->
<script src="{{asset('Dashboard/js/sweet-alert/sweet-alert.min.js')}}"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="{{asset('Dashboard/js/kode-alert/main.js')}}"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script src="{{asset('Dashboard/js/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- ================================================
Moment.js
================================================ -->
<script src="{{asset('Dashboard/js/moment/moment.min.js')}}"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script src="{{asset('Dashboard/js/full-calendar/fullcalendar.js')}}"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script src="{{asset('Dashboard/js/date-range-picker/daterangepicker.js')}}"></script>

</body>
</html>