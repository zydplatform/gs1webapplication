
      @extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <div class="container mt--0">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive">
    
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                <button class="btn btn-icon btn-primary" type="button" style="float:right;">
	<span class="btn-inner--icon">New Business <i class="ni ni-fat-add"></i></span>
</button>
<button class="btn btn-icon btn-primary" type="button" style="float:right;">
	<span class="btn-inner--icon">Update Business <i class="ni ni-bold-down"></i></span>
</button>
<button class="btn btn-icon btn-primary" type="button" style="float:right;">
	<span class="btn-inner--icon">View Business <i class="ni ni-check-bold"></i></span>
</button>
                    <th scope="col" class="sort" data-sort="name">Business Name</th>
                    <th scope="col" class="sort" data-sort="budget">Registration Number</th>
                    <th scope="col" class="sort" data-sort="status">Business Ownership</th>
                    <th scope="col" class="sort" data-sort="status">Business TIN</th>
                    <th scope="col" class="sort" data-sort="status">Business Email</th>
                    <th scope="col" class="sort" data-sort="status">Business Physical Address</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                </tr>
            </thead>
            <tbody class="list">
                
                <tr>
                    <th scope="row">
                       
                    </th>
                    <td class="budget">
                    </td>
                    <td class="budget">
                    </td>
                    <td class="budget">
                    </td>
                    <td class="budget">
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
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
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>

@endpush

