
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
                <button class="btn btn-icon btn-primary" type="button" style="float:right;" data-toggle="modal" data-target="#businessowner">
	<span class="btn-inner--icon">Add Business Type <i class="ni ni-curved-next"></i></span>
</button>
                    <th scope="col" class="sort" data-sort="name">Business Type Code</th>
                    <th scope="col" class="sort" data-sort="budget">Business Type</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                </tr>
            </thead>
            <tbody class="list">
                
                <tr>
                    <th scope="row">
                       
                            <div class="media-body">
                            </div>
                        </div>
                    </th>
                    <td class="budget">
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
    <button class="btn btn-icon btn-warning" type="button" style="float:right;">
	<a href="{{route('step5')}}" style="color:white"><span class="btn-inner--icon">Next<i class="ni ni-curved-next"></i></span></a>
</button>
    </div>
      <!-- modal -->
          <div class="modal fade" id="businessowner" tabindex="-1" role="dialog" aria-labelledby="businessownerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="businessownerLabel">Business Type Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--  -->
      <form role="form" name="businessform" method="POST" action="{{route('createbusinesstypes')}}">
        @csrf
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Business Type Code</label>
        <input class="form-control" type="text" value="" id="code" name="code">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Business Type</label>
        <input class="form-control" type="text" value="" id="type" name="type">
    </div>
    
      <button type="submit" class="btn btn-block btn-success">Save</button>
      </form>
      <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
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

