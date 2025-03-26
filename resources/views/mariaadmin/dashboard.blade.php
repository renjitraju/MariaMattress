
@extends('mariaadmin.masterpages.mainlayout')
@section('title', 'Dashboard')
@section('contents')






        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-6 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h2>New Users</h2>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>

                          </div>

                          <div class="sub-title">
                            <hr/>
                            <span class="mr-1">New Registration</span> |
                            <span class="mx-1">5</span>
                            <hr/>
                            <span class="mr-1">Approved Users</span> |
                            <span class="mx-1">67</span>
                            <hr/>
                            <span class="mr-1">Unapproved Users</span> |
                            <span class="mx-1">7</span>
                            <hr/>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>








              </div><!-- ========== end content   ============ -->
            </div><!-- ========== end content-wrapper   ============ -->
@endsection














