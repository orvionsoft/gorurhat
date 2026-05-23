<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>@yield('title') - {{$generalsetting->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" />

    <!-- Bootstrap css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('public/backEnd/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets/css/toastr.min.css" />
    <!-- custom css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Head js -->
    @yield('css')
    <script src="{{asset('public/backEnd/')}}/assets/js/head.js"></script>
    <style>
        /* Sidebar white background */
        .left-side-menu {
            background-color: #ffffff !important;
            border-right: 1px solid #e9ecef !important;
        }
        
        /* Menu items text gray */
        #sidebar-menu a {
            color: #6c757d !important;
        }
        
        /* Menu items hover effect */
        #sidebar-menu a {
            transition: color .2s ease, background-color .2s ease, box-shadow .2s ease, transform .2s ease;
        }

        #sidebar-menu a:hover {
            color: #c00000 !important;
            background-color: rgba(255, 255, 255, 0.32) !important;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transform: translateX(2px);
        }
        
        /* Active menu item */
        #sidebar-menu .mm-active > a {
            color: #495057 !important;
            background-color: #f8f9fa !important;
        }
        
        /* Submenu items */
        #sidebar-menu .nav-second-level li a {
            color: #6c757d !important;
        }
        
        /* Submenu hover */
        #sidebar-menu .nav-second-level li a:hover {
            color: #495057 !important;
            background-color: #f8f9fa !important;
        }
        
        /* Menu arrows */
        #sidebar-menu .menu-arrow {
            color: #6c757d !important;
        }
        
        /* User box in sidebar */
        .user-box {
            border-bottom: 1px solid #e9ecef !important;
        }
        
        .user-box .text-dark {
            color: #6c757d !important;
        }
        
        .user-box .text-muted {
            color: #adb5bd !important;
        }
        
        /* Icons in sidebar */
        #sidebar-menu i {
            color: #6c757d !important;
        }
        
        /* Border colors */
        .left-side-menu .h-100 {
            border-right: 1px solid #e9ecef !important;
        }

        /* Topbar background color - REMOVED for new design */
        /* .navbar-custom {
            background-color: #000 !important;
        } */

        /* Topbar menu items - REMOVED for new design */
        /* .navbar-custom .topnav-menu > li > a {
            color: #ffffff !important;
        } */

        /* Topbar dropdown toggles - REMOVED for new design */
        /* .navbar-custom .dropdown-toggle {
            color: #ffffff !important;
        } */

        /* Topbar icons - REMOVED for new design */
        /* .navbar-custom .noti-icon {
            color: #ffffff !important;
        } */

        /* Topbar user name - REMOVED for new design */
        /* .navbar-custom .pro-user-name {
            color: #ffffff !important;
        } */

        /* Topbar badge - REMOVED for new design */
        /* .navbar-custom .badge.bg-danger {
            background-color: #ffffff !important;
            color: #03a416 !important;
        } */

        /* Topbar menu button - REMOVED for new design */
        /* .navbar-custom .button-menu-mobile {
            color: #ffffff !important;
        } */

        /* Topbar navbar toggle lines - REMOVED for new design */
        /* .navbar-custom .lines span {
            background-color: #ffffff !important;
        } */

        /* Visit site link - REMOVED for new design */
        /* .navbar-custom .dropdown .nav-link {
            color: #ffffff !important;
        } */

        /* Topbar dropdown arrows - REMOVED for new design */
        /* .navbar-custom .arrow-none:after {
            border-color: #ffffff transparent transparent transparent !important;
        } */

        /* Fix for menu button click design issue - REMOVED for new design */
        /* .navbar-custom .button-menu-mobile.open {
            background-color: rgba(255, 255, 255, 0.1) !important;
        } */

        /* Fix for mobile menu toggle - REMOVED for new design */
        /* .navbar-custom .navbar-toggle .lines {
            background-color: transparent !important;
        }

        .navbar-custom .navbar-toggle .lines span {
            background-color: #ffffff !important;
        }

        .navbar-custom .navbar-toggle.open .lines span {
            background-color: #ffffff !important;
        } */

        /* Ensure proper hover states - REMOVED for new design */
        /* .navbar-custom .topnav-menu > li > a:hover,
        .navbar-custom .topnav-menu > li > a:focus,
        .navbar-custom .dropdown-toggle:hover,
        .navbar-custom .dropdown-toggle:focus {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
        } */

        /* Fix for collapsed states - REMOVED for new design */
        /* .navbar-custom .button-menu-mobile:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
        } */

        /* Ensure proper z-index and positioning - REMOVED for new design */
        /* .navbar-custom .container-fluid {
            position: relative;
            z-index: 10;
        } */

        /* Fix for any inherited issues - REMOVED for new design */
        /* body[data-topbar-color="dark"] .navbar-custom {
            background-color: #000 !important;
        } */

        /* Fixed topbar */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            width: 100%;
        }

        #wrapper {
            padding-top: 80px;
        }

        /* Font settings */
        body {
            font-family: 'Poppins', sans-serif;
        }
        :lang(bn) {
            font-family: 'Hind Siliguri', serif;
        }
    </style>
  </head>

  <!-- body start -->
  <body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="false">
    <!-- Begin page -->
    <div id="wrapper">
      <!-- Topbar Start -->
      <header style="
          display: flex;
          align-items: center;
          background-color: #fdfdfd;
          height: 80px;
          border-bottom: 1px solid #f0f0f0;
          box-shadow: 0 2px 5px rgba(0,0,0,0.02);
      ">

          <div style="
              width: 260px;
              height: 100%;
              display: flex;
              align-items: center;
              padding-left: 30px;
              border-right: 1px solid #eee;
              box-sizing: border-box;
          ">
              <a href="{{ route('dashboard') }}" style="display:flex; align-items:center;">
                  <img src="{{ asset(optional($generalsetting)->dark_logo ?: 'public/backEnd/assets/images/logo-dark.png') }}" alt="{{ optional($generalsetting)->name ?: 'Dashboard Logo' }}" height="40" style="max-width: 220px; object-fit: contain;">
              </a>
          </div>

          <div style="
              flex: 1;
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 0 40px;
          ">
              <h1 style="
                  color: #c00000;
                  font-size: 24px;
                  margin: 0;
                  font-weight: 700;
              ">
                  স্বাগতম, {{Auth::user()->name}}
              </h1>

              <div style="display: flex; align-items: center; gap: 25px;">
                  <div class="dropdown notification-list topbar-dropdown" style="position: relative; cursor: pointer; color: #555; font-size: 20px;">
                      <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="color: #555; text-decoration: none; position: relative; display: inline-flex; align-items: center; justify-content: center;">
                          <i class="fe-bell"></i>
                          @if($neworder > 0)
                          <span style="
                              position: absolute;
                              top: -2px;
                              right: -2px;
                              width: 8px;
                              height: 8px;
                              background: #c00000;
                              border-radius: 50%;
                              border: 2px solid #fff;
                          "></span>
                          @endif
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                          <!-- item-->
                          <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                              <span class="float-end">
                                <a href="{{route('admin.orders',['slug'=>'pending'])}}" class="text-dark">
                                  <small>View All</small>
                                </a>
                              </span>
                              Orders
                            </h5>
                          </div>

                          <div class="noti-scroll" data-simplebar>
                            @foreach($pendingorder as $porder)
                            <!-- item-->
                            <a href="{{route('admin.orders',['slug'=>'pending'])}}" class="dropdown-item notify-item active">
                              <div class="notify-icon">
                                <img src="{{asset($porder->customer?$porder->customer->image:'')}}" class="img-fluid rounded-circle" alt="" />
                              </div>
                              <p class="notify-details">{{$porder->customer?$porder->customer->name:''}}</p>
                              <p class="text-muted mb-0 user-msg">
                                <small>Invoice : {{$porder->invoice_id}}</small>
                              </p>
                            </a>
                            @endforeach
                          </div>

                          <!-- All-->
                          <a href="{{route('admin.orders',['slug'=>'pending'])}}" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fe-arrow-right"></i>
                          </a>
                      </div>
                  </div>

                  <div class="dropdown notification-list topbar-dropdown">
                      <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="
                          width: 38px;
                          height: 38px;
                          border-radius: 50%;
                          border: 1px solid #ddd;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                          color: #555;
                          cursor: pointer;
                          font-size: 22px;
                          background-color: #fff;
                          text-decoration: none;
                      ">
                          <img src="{{asset(Auth::user()->image)}}" alt="user-image" class="rounded-circle" style="width: 100%; height: 100%; object-fit: cover;" />
                      </a>
                      <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                          <!-- item-->
                          <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                          </div>

                          <!-- item-->
                          <a href="{{url('admin/dashboard')}}" class="dropdown-item notify-item">
                            <i class="fe-package"></i>
                            <span>Dashboard</span>
                          </a>

                          <!-- item-->
                          <a href="{{route('change_password')}}" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Change Password</span>
                          </a>

                          <!-- item-->
                          <a href="{{route('locked')}}" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="dropdown-item notify-item"
                          >
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- end Topbar -->

      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">
        <div class="h-100" data-simplebar>
          <!-- User box -->
          <div class="user-box text-center">
            <img src="{{asset('public/backEnd/')}}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
            <div class="dropdown">
              <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
              <div class="dropdown-menu user-pro-dropdown">
                <!-- item-->
                <a href="{{url('admin/dashboard')}}" class="dropdown-item notify-item">
                  <i class="fe-user me-1"></i>
                  <span>My Account</span>
                </a>

                <!-- item-->
                <a href="{{url('admin/dashboard')}}" class="dropdown-item notify-item">
                  <i class="fe-settings me-1"></i>
                  <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-lock me-1"></i>
                  <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                  class="dropdown-item notify-item"
                >
                  <i class="fe-log-out me-1"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
            <p class="text-muted">Admin Head</p>
          </div>

          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <ul id="side-menu">
              <li>
                <a href="{{url('admin/dashboard')}}">
                  <i data-feather="airplay"></i>
                  <span> Dashboard </span>
                </a>
              </li>
              <li>
                <a href="{{ route('categories.index') }}">
                  <i data-feather="grid"></i>
                  <span> Category </span>
                </a>
              </li>
              <li>
                <a href="{{ route('products.index') }}">
                  <i data-feather="shopping-cart"></i>
                  <span> Products </span>
                </a>
              </li>
              <li>
                <a href="{{ route('footer.index') }}">
                  <i data-feather="layout"></i>
                  <span> Footer Settings </span>
                </a>
              </li>
              <li>
                <a href="{{ route('settings.index') }}">
                  <i data-feather="settings"></i>
                  <span> General Settings </span>
                </a>
              </li>
              <li>
                <a href="{{ route('contact-message.index') }}">
                  <i data-feather="message-circle"></i>
                  <span> Messages </span>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Sidebar -->

          <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
      </div>
      <!-- Left Sidebar End -->

      <div class="content-page" style="margin-top: -10px">
        <div class="content">
          @yield('content')
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-end"><a href="https://orvionsoft.com/" target="_blank">Website Designed & Developed by: OrvionSoft</a></div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
          <li class="nav-item">
            <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
              <i class="mdi mdi-message-text d-block font-22 my-1"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
              <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
              <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
            </a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-0">
          <div class="tab-pane" id="chat-tab" role="tabpanel">
            <form class="search-bar p-3">
              <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search..." />
                <span class="mdi mdi-magnify"></span>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="tasks-tab" role="tabpanel">
            <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
          </div>
          <div class="tab-pane active" id="settings-tab" role="tabpanel">
            <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
              <span class="d-block py-1">Theme Settings</span>
            </h6>

            <div class="p-3">
              <div class="alert alert-warning" role="alert"><strong>Customize </strong> the overall color scheme, sidebar menu, etc.</div>

              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="layout-color" value="light" id="light-mode-check" checked />
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="layout-color" value="dark" id="dark-mode-check" />
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
              </div>

              <!-- Width -->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="layout-width" value="fluid" id="fluid-check" checked />
                <label class="form-check-label" for="fluid-check">Fluid</label>
              </div>
              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="layout-width" value="boxed" id="boxed-check" />
                <label class="form-check-label" for="boxed-check">Boxed</label>
              </div>

              <!-- Menu positions -->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="menu-position" value="fixed" id="fixed-check" checked />
                <label class="form-check-label" for="fixed-check">Fixed</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="menu-position" value="scrollable" id="scrollable-check" />
                <label class="form-check-label" for="scrollable-check">Scrollable</label>
              </div>

              <!-- Left Sidebar-->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light-check" />
                <label class="form-check-label" for="light-check">Light</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark-check" checked />
                <label class="form-check-label" for="dark-check">Dark</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand-check" />
                <label class="form-check-label" for="brand-check">Brand</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient-check" />
                <label class="form-check-label" for="gradient-check">Gradient</label>
              </div>

              <!-- size -->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default" id="default-size-check" checked />
                <label class="form-check-label" for="default-size-check">Default</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed" id="condensed-check" />
                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact" id="compact-check" />
                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
              </div>

              <!-- User info -->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="sidebar-user" value="fixed" id="sidebaruser-check" />
                <label class="form-check-label" for="sidebaruser-check">Enable</label>
              </div>

              <!-- Topbar -->
              <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                <label class="form-check-label" for="darktopbar-check">Dark</label>
              </div>

              <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                <label class="form-check-label" for="lighttopbar-check">Light</label>
              </div>

              <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{asset('public/backEnd/')}}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{asset('public/backEnd/')}}/assets/js/app.min.js"></script>
    <script src="{{asset('public/backEnd/')}}/assets/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="{{asset('public/backEnd/')}}/assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(".delete-confirm").click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
      });
      $(".change-confirm").click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
          title: `Are you sure you want to change this record?`,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
      });
    </script>
    <!--patho courier-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.pathaocity').change(function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/pathao-city') }}?city_id=" + id,
                        success: function(res) {
                            if (res && res.data && res.data.data) {
                                $(".pathaozone").empty();
                                $(".pathaozone").append('<option value="">Select..</option>');
                                $.each(res.data.data, function(index, zone) {
                                    $(".pathaozone").append('<option value="' + zone.zone_id + '">' + zone.zone_name + '</option>');
                                    $('.pathaozone').trigger("chosen:updated");
                                });
                            } else {
                                 $(".pathaoarea").empty();
                                $(".pathaozone").empty();
                            }
                        }
                    });
                } else {
                     $(".pathaoarea").empty();
                    $(".pathaozone").empty();
                }
            });
        });
    </script>
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('.pathaozone').change(function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/pathao-zone') }}?zone_id=" + id,
                        success: function(res) {
                            if (res && res.data && res.data.data) {
                                $(".pathaoarea").empty();
                                $(".pathaoarea").append('<option value="">Select..</option>');
                                $.each(res.data.data, function(index, area) {
                                    $(".pathaoarea").append('<option value="' + area.area_id + '">' + area.area_name + '</option>');
                                    $('.pathaoarea').trigger("chosen:updated");
                                });
                            } else {
                                $(".pathaoarea").empty();
                            }
                        }
                    });
                } else {
                    $(".pathaoarea").empty();
                }
            });
        });
    </script>
    @yield('script')
  </body>
</html>