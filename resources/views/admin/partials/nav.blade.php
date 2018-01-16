  <header class="main-header">
    <!-- Logo -->
    <a href="/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span><h2 style="color: white;"></h2></span>
		  <span class="dark-logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><h2 style="color: white;">Sacred Admin</h2>
	  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/storage/pratik.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="/storage/pratik.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small class="mb-5">{{Auth :: user()->email}}</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>

          <div class="col-12 text-left">
                    <a href="/"><i class="ti-settings"></i> Go to Website</a>
                  </div>
				<div role="separator" class="divider col-12"></div>

				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="/logout" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                      <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>