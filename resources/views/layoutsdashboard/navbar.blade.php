<div id="top" class="clearfix">
  <!-- Start App Logo -->
  <div class="applogo">
    <a href="/dashboard" class="logo">MRP UB</a>
  </div>
  <!-- End App Logo -->
                 
  <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
  <!-- End Sidebar Show Hide Button -->
                 
  <!-- Start Top Right -->
  @auth
    <ul class="top-right">
      <li class="dropdown link">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{asset('Dashboard/img/profile.jpg')}}" alt="img">
          {{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
            <li role="presentation" class="dropdown-header">Akun</li>
            <li>
              <form action="/signin/logout" method="POST">
              @csrf
                 <button class="btn" style="background-color:rgba(0,0,0, 0.1);color:black; margin-bottom:10px;margin-left:10px;width:85%">
                  <i class="fa falist fa-power-off"></i>&nbsp;Logout</button>
              </form> 
            </li>
      </ul>
      </li>
    </ul>
  <!-- End Top Right -->   
  @endauth          
</div>

