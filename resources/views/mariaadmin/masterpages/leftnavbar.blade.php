
<!-- ========== LEFT SIDEBAR WITH OUT FOOTER ========== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="index.html">
                <img src="{{asset('mariaadmin/assets/images/logo.png')}}" alt="KnanayaDeepam">
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">

                  <li class="active">
                    <a class="sidenav-item-link" href="">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">MariaMatress Dashboard</span>
                    </a>
                  </li>
                  <li class="section-title">Pages</li>
                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li>
                              {{-- <a class="sidenav-item-link" href="{{route('admin.user.details')}}"> --}}
                                <span class="nav-text">New users</span>
                              </a>
                            </li>
                            <li>
                              {{-- <a class="sidenav-item-link" href="{{route('admin.approveduserslist')}}"> --}}
                                <span class="nav-text">Approved users</span>
                              </a>
                            </li>
                            <li>
                              {{-- <a class="sidenav-item-link" href="{{route('admin.user.details')}}"> --}}
                                <span class="nav-text">Unapproved users</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li class="section-title">Apps</li>
                  <li>
                    <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
                        {{-- <a class="sidenav-item-link" href=""> --}}
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">Contact</span>
                    </a>
                  </li>

               </ul>
            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
