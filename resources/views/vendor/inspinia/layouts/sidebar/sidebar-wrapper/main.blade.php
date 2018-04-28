<div class="sidebar-collapse">

  <ul class="nav metismenu" style="padding-left:0px;">
    <li class="nav-header">
      <div class="dropdown profile-element">
        <span>
           <img src="/img/logo-green.png" width="80%" alt="">
        </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="clear">
            <span class="block m-t-xs">
              <strong class="font-bold">@yield('user-name', 'Admin')</strong>
            </span>
            <span class="text-muted text-xs block">{{Auth::user()->email}}<b class="caret"></b></span>
          </span>
        </a>
        <ul class="dropdown-menu animated fadeInRight m-t-xs">
          <li>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          </li>
        </ul>
      </div>

    </li>
  </ul>

  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li id="home" >
      <a  href="{{route('panel')}} " ><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li id="payment">
      <a href="{{route('panel/payment/history')}}"><i class="fa fa-align-justify"></i> <span class="nav-label">Payments</span> </a>
    </li>

  </ul>

  <script>
      $(document).ready(function () {
          $(".nav li").removeClass("active");
              $('#home').addClass('active');
      });
  </script>
@show
</div>
