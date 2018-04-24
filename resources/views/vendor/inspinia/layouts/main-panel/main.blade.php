<div id="page-wrapper" class="gray-bg">
  <div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
      </div>
      <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
           <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li>
              <a href="mailbox.html">
                <div>
                  <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="profile.html">
                <div>
                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                  <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="grid_options.html">
                <div>
                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block">
                <a href="notifications.html">
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
        <li>
         <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
         </form>
         <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>Logout
         </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
      <h2>@yield('content-title', 'Title')</h2>
      @section('breadcrumbs')
      <ol class="breadcrumb">
        <li>
          <a href="#">Home</a>
        </li>
        <li class="active">
          <strong>Breadcrumb</strong>
        </li>
        <li>
          <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>Logoutssssss
          </a>
        </li>
      </ol>

      @show
    </div>

  </div>

  <div class="wrapper wrapper-content">
    @yield('content')
  </div>
  @include('inspinia::layouts.main-panel.footer.main')
</div>
