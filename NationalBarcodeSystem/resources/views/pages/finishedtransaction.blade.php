@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Transactions</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Company Name</th>
                    <th scope="col" class="sort" data-sort="budget">Barcode sales</th>
                    <th scope="col" class="sort" data-sort="status">Transaction Status</th>
                    <th scope="col" class="sort" data-sort="status">Issued Date</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Mega Standard Ltd</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      400
                    </td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Finished</span>
                      </span>
                    </td>
                    <td class="budget">12-12-2023</td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Uganda Batteries Ltd</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      600
                    </td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Finished</span>
                      </span>
                    </td>
                    <td class="budget">12-12-2023</td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Mukwano Industries</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      1500
                    </td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Finished</span>
                      </span>
                    </td>
                    <td class="budget">12-12-2023</td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Jesa Fresh Dairy </span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      7899
                    </td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Finished</span>
                      </span>
                    </td>
                    <td class="budget">12-12-2023</td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Uganda Tea Bags Ltd</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      100
                    </td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Finished</span>
                      </span>
                    </td>
                    <td class="budget">12-12-2023</td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

@include('layouts.footers.auth')
    </div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush