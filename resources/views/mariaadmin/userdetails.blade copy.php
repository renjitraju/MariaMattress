
@extends('knaadmin.masterpages.mainlayout')
@section('title', 'Userdetails')
@section('contents')
          <!-- ========== CONTENT WRAPPER  ============ -->
            <div class="content-wrapper">
              <div class="content">                
                <!-- Table Product -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card card-default">
                          <div class="card-header">
                            <h2>New User Registrations</h2>
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
                                  <th>Photo</th>
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
                                        <img src="{{asset('assets/img/userphotos/'. $user->photo)}}" alt="{{$user->photo}}">
                                      </td>
                                      <td>{{ $user->firstname." ". $user->lastname }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->phone }}</td>
                                      <td>{{ $user->church }}</td>
                                      <td>{{ $user->place }}</td>
                                      <td><a class="btn-sm btn-success" href="{{ route('admin.userstatus', ['id' => $user->id]) }}">Approve</a></td>
                                      <td>
                                        <div class="dropdown">
                                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                          </div>

                                        </div>
                                      </td>
                                    </tr>
                                  
                                @endforeach  
                              




                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-xl-12">
                        <!-- Sales by Product -->
                        <div class="card card-default">
                          <div class="card-header align-items-center">
                            <h2 class="">Sales by Product</h2>
                            <a href="#" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#modal-stock">Add Stock</a>
                          </div>
                          <div class="card-body">
                            <div class="tab-content">
                              <table id="product-sale" class="table table-product " style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Product Name</th>
                                    <th>Unit</th>
                                    <th>Amount</th>
                                    <th>%sold</th>
                                    <th class="th-width-250"></th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr>
                                    <td>Coach Swagger</td>
                                    <td>134</td>
                                    <td>$24541</td>
                                    <td>35.28%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Toddler Shoes</td>
                                    <td>119</td>
                                    <td>$20225</td>
                                    <td>27.05%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55%" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Hat Black Suits</td>
                                    <td>101</td>
                                    <td>$17,290</td>
                                    <td>20.25%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Backpack Gents</td>
                                    <td>59</td>
                                    <td>$1150</td>
                                    <td>12.50%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25%" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Speed 500 Ignite</td>
                                    <td>25</td>
                                    <td>$590</td>
                                    <td>02.10%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Earphone & Headphone</td>
                                    <td>23</td>
                                    <td>$450</td>
                                    <td>02%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                          aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Gucci Watch</td>
                                    <td>32</td>
                                    <td>$554</td>
                                    <td>8%</td>
                                    <td>
                                      <div class="progress progress-md rounded-0">
                                        <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                          aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <!-- Stock Modal -->
                  <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                      <form action="#">
                        <div class="modal-content">
                          <div class="modal-header align-items-center p3 p-md-5">
                            <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                            <div>
                              <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel </button>
                              <button type="submit" class="btn btn-primary  btn-pill" data-dismiss="modal"> save </button>
                            </div>

                          </div>
                          <div class="modal-body p3 p-md-5">
                            <div class="row">
                              <div class="col-lg-8">
                                <h3 class="h5 mb-5">Product Information</h3>
                                <div class="form-group mb-5">
                                  <label for="new-product">Product Title</label>
                                  <input type="text" class="form-control" id="new-product" placeholder="Add Product">
                                </div>
                                <div class="form-row mb-4">
                                  <div class="col">
                                    <label for="price">Price</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                      </div>
                                      <input type="text" class="form-control" id="price" placeholder="Price" aria-label="Price"
                                        aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="col">
                                    <label for="sale-price">Sale Price</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                      </div>
                                      <input type="text" class="form-control" id="sale-price" placeholder="Sale Price" aria-label="SalePrice"
                                        aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                </div>

                                <div class="product-type mb-3 ">
                                  <label class="d-block" for="sale-price">Product Type <i class="mdi mdi-help-circle-outline"></i> </label>
                                  <div>

                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="checked">
                                      <label class="custom-control-label" for="customRadio1">Physical Good</label>
                                    </div>

                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadio2">Digital Good</label>
                                    </div>

                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadio3">Service</label>
                                    </div>

                                  </div>
                                </div>

                                <div class="editor">
                                  <label class="d-block" for="sale-price">Description <i class="mdi mdi-help-circle-outline"></i></label>
                                  <div id="standalone">
                                    <div id="toolbar">
                                      <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                      </span>
                                      <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                      </span>
                                      <span class="ql-formats">
                                        <select class="ql-color"></select>
                                      </span>
                                      <span class="ql-formats">
                                        <button class="ql-blockquote"></button>
                                      </span>
                                      <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                      </span>
                                      <span class="ql-formats">
                                        <button class="ql-direction" value="rtl"></button>
                                        <select class="ql-align"></select>
                                      </span>
                                    </div>
                                  </div>
                                  <div id="editor"></div>

                                  <div class="custom-control custom-checkbox d-inline-block mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Hide product from published site</label>
                                  </div>

                                </div>

                              </div>
                              <div class="col-lg-4">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile" placeholder="please imgae here">
                                  <span class="upload-image">Click here to <span class="text-primary">add product image.</span> </span>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </form>
                    </div>
                  </div>
              </div><!-- ========== end content   ============ -->
            </div><!-- ========== end content-wrapper   ============ -->
@endsection        