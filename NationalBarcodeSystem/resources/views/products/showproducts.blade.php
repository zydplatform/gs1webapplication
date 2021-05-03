
      @extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Companies</h5>
                                    <span class="h2 font-weight-bold mb-0">128
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Barcodes</h5>
                                    <span class="h2 font-weight-bold mb-0">40,000</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Products</h5>
                                    <span class="h2 font-weight-bold mb-0">1138</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-cubes"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                    <span class="h2 font-weight-bold mb-0">49,9876</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <link rel="stylesheet" href="assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <style type="text/css">
        .no-gutters {
  margin-right: 0;
  margin-left: 0;

  > .col,
  > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }
}
    </style>
    <div class="container mt--0" >

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
               <button class="btn btn-icon btn-secondary" type="button" style="float:right;">
    <a href="{{route('step4')}}" style="color:black;"><span class="btn-inner--icon">Update<i class="fa fa-edit"></i></span></a></button>
                <button class="btn btn-icon btn-default" type="button" style="float:right;">
    <a href="{{route('addproducts')}}" style="color:white"><span class="btn-inner--icon">Add New <i class="ni ni-fat-add"></i></span></a>
</button>
                <button class="btn btn-icon btn-primary" type="button" style="float:right;">
    <a href="{{route('businessproducts')}}" style="color:white"><span class="btn-inner--icon">Show All <i class="fa fa-eye"></i></span></a>
</button>
<div class="table-responsive py-4">
        <table class="table table-bordered table-striped" style="margin-right: 15%; width: 100%;" id="datatable-basic">
            <thead class="thead-light">
                <tr>
         
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Product Description</th>
                    <th>Product Core Attribute </th>
                    <th>Product Price (UGX)</th>
                    <th>Product Code</th>
                </tr>
            </thead>
            <tbody class="list">
                <tr>
                    <th scope="row"> Honey
                    </th>
                    <td class="budget">Foods&Recepies
                    </td>
                    <td class="budget">African Sweetened Honey
                    </td>
                    <td class="budget">500gms African Honey
                    </td>
                    <td class="budget">10000
                    </td>
                    <td>2301
                    </td>

                </tr>   
            </tbody>
        </table>
    </div></div>
    
            </div>
        </div>
    </div>

    
</div>
    </div>
    @endsection

@push('js')
<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>

@endpush

