
@extends('mariaadmin.masterpages.mainlayout')
@section('title', 'Approved Users')
@section('contents')
          <!-- ========== CONTENT WRAPPER  ============ -->
            <div class="content-wrapper">
              <div class="content">
                <!-- Table Product -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card card-default">
                          <div class="card-header">
                            <h2>Approved Users</h2>
                            <!--
                            <div class="dropdown">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Yearly Chart
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          -->
                          </div>
                          <div class="card-body">
                            <table id="productsTable" class="table table-hover table-product" style="width:100%">
                              <thead>
                                <tr>
                                  <th>Photo1</th>
                                  <th>Full Name</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Church</th>
                                  <th>Place</th>
                                  <th>Change status</th>
                                  <th>Edit/Delete</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($users as $user)

                                    <tr>
                                      <td class="py-0">
                                        <img src="{{asset('storage/userprofiles/'. $user->photo)}}">
                                      </td>
                                      <td>{{ $user->firstname." ". $user->lastname }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->phone }}</td>
                                      <td>{{ $user->church }}</td>
                                      <td>{{ $user->place }}</td>
                                      <td><a class="btn-sm btn-success" href="{{ route('mariaadminapproveduserslist', ['id' => encrypt($user->id)]) }}">{{$user->status}} Unapprove</a></td>
                                      <td>
                                        <div class="dropdown">
                                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-userdetails{{$user->id}}">View</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-user-edit{{$user->id}}">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                         </div>
                                        </div>
                                      </td>
                                    </tr>
                                                                  <!-- Stock Modal -->
                              <div class="modal fade modal-stock" id="modal-userdetails{{$user->id}}" aria-labelledby="modal-userdetails" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header align-items-center p3 p-md-5">
                                        <h2 class="modal-title" id="exampleModalGridTitle">User Details</h2>
                                        <div>
                                          <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel </button>
                                        </div>

                                      </div>
                                      <div class="modal-body p3 p-md-5">
                                        <div class="row">

                                          <dl class="row">
                                            <dt class="col-sm-6">Full Name</dt>
                                            <dd class="col-sm-6">{{ $user->firstname." ". $user->lastname }}</dd>

                                            <dt class="col-sm-6">Church</dt>
                                            <dd class="col-sm-6">{{ $user->church }}</dd>

                                            <dt class="col-sm-6">Place</dt>
                                            <dd class="col-sm-6">{{ $user->place }}</dd>

                                          </dl>

                                        </div>
                                      </div>

                                    </div>
                                </div>
                              </div>


                              <div class="modal fade modal-stock" id="modal-user-edit{{$user->id}}" aria-labelledby="modal-user-edit" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                  <form action="{{ route('mariaadminusereditdetails') }}" method="post">
                                    @csrf
                                    <div class="modal-content">
                                      <div class="modal-header align-items-center p3 p-md-5">
                                        <h2 class="modal-title" id="exampleModalGridTitle">User Details</h2>
                                        <div>
                                          <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel </button>
                                          <button type="submit" class="btn btn-primary btn-pill"> save </button>

                                        </div>

                                      </div>
                                      <div class="modal-body p3 p-md-5">
                                        <div class="row">

                                          <dl class="row">
                                            <dt class="col-sm-6">First Name</dt>
                                            <dd class="col-sm-6"><input type="text" name="firstname" class="form-control" value="{{ $user->firstname}}">
                                              <input type="hidden" name="id" class="form-control" value="{{ encrypt($user->id)}}">
                                            </dd>

                                            <dt class="col-sm-6">Last Name</dt>
                                            <dd class="col-sm-6"><input type="text" name="lastname"  class="form-control" value="{{ $user->lastname}}"></dd>

                                            <dt class="col-sm-6">Email</dt>
                                            <dd class="col-sm-6"><input type="text" name="email"  class="form-control" value="{{ $user->email}}"></dd>

                                            <dt class="col-sm-6">Phone</dt>
                                            <dd class="col-sm-6"><input type="text" name="phone"  class="form-control" value="{{ $user->phone}}"></dd>

                                            <dt class="col-sm-6">Church</dt>
                                            <dd class="col-sm-6"><input type="text" name="church"  class="form-control" value="{{ $user->church}}"></dd>

                                            <dt class="col-sm-6">Photo</dt>
                                            <dd class="col-sm-6"><input type="file" name="photo"  class="form-control">
                                            <img src="{{asset('storage/userprofiles/'. $user->photo)}}" width="100px"></dd>
                                            <input type="hidden" name="userpic" class="form-control" value="{{ encrypt($user->photo)}}">

                                          </dl>

                                        </div>
                                      </div>

                                    </div>
                                  </form>
                                  </div>

                              </div>

                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

              </div><!-- ========== end content   ============ -->
            </div><!-- ========== end content-wrapper   ============ -->


@endsection
