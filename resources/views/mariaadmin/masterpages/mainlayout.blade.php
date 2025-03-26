
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Knanaya Deepam Admin :: @yield('title')</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('mariaadmin/assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('mariaadmin/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('mariaadmin/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('mariaadmin/assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
  <link href="{{asset('mariaadmin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('mariaadmin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="{{asset('mariaadmin/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <!-- Main CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('mariaadmin/assets/css/style.css')}}" />

  <!-- FAVICON -->
  <link href="{{asset('mariaadmin/assets/images/favicon.png')}}" rel="shortcut icon" />

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('mariaadmin/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div id="toaster"></div>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
          <!-- ========== LEFT SIDEBAR WITH OUT FOOTER ========== -->
          @include('mariaadmin.masterpages.leftnavbar')
          <!-- =========== PAGE WRAPPER =========== -->
          <div class="page-wrapper">
            <!-- Header -->
            @include('mariaadmin.masterpages.header')
              @yield('contents')
            <!-- Footer -->
            @include('mariaadmin.masterpages.footer')
          </div><!-- ========== end page-wrapper  ============ -->
    </div><!-- ========== end wrapper  ============ -->

                    <!-- Card Offcanvas -->
                    <div class="card card-offcanvas" id="contact-off" >
                      <div class="card-header">
                        <h2>New Users</h2>

                      </div>
                      <div class="card-body">


                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="{{asset('mariaadmin/assets/images/user/user-sm-01.jpg')}}" alt="Renjit">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Renjit</span>
                              <span class="discribe">St. Johns Puthenpally</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>

                    <script src="{{asset('mariaadmin/assets/plugins/jquery/jquery.min.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/simplebar/simplebar.min.js')}}"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    <script src="{{asset('mariaadmin/assets/plugins/apexcharts/apexcharts.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>

                    <script src="{{asset('mariaadmin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>

                    <script src="{{asset('mariaadmin/assets/plugins/daterangepicker/moment.min.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>



                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

                    <script src="{{asset('mariaadmin/assets/plugins/toaster/toastr.min.js')}}"></script>

                    <script src="{{asset('mariaadmin/assets/js/mono.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/js/chart.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/js/map.js')}}"></script>
                    <script src="{{asset('mariaadmin/assets/js/custom.js')}}"></script>

  </body>
</html>
