
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
             
                  <li class="has-sub">
                  <li>
                      <a class="sidenav-item-link" href="{{ route('user.index') }}">
                     
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Users</span>
                        
                      </a>
                  
                  </li>
                  <li class="section-title">Orders</li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('completed.orders') }}">
                     
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Completed  Orders</span>
                        
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('incompleted.orders') }}">
                        
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Pending Orders</span>
                        
                      </a>
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
