
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
    
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                <button class="btn btn-icon btn-primary" type="button" style="float:right;" data-toggle="modal" data-target="#businessowner">
	<span class="btn-inner--icon">Add Business Type <i class="ni ni-curved-next"></i></span>
</button>
                    <th scope="col" class="sort" data-sort="name">Business Type Code</th>
                    <th scope="col" class="sort" data-sort="budget">Business Type</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($mydata as $businesstype)
                <tr>
                    <th scope="row"> 
                        {{ $businesstype->code}}
                    </th>
                    <td class="budget">
                        {{ $businesstype->type}}
                    </td>
                   
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-icon btn-warning" type="button" style="float:right;">
	<a href="{{route('admindashboard')}}" style="color:white"><span class="btn-inner--icon">Finish<i class="ni ni-curved-next"></i></span></a>
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
        <select class="form-control"  id="code" name="code" required>  
      @foreach($mydata as $businesstype)  
      <option value="{{$businesstype->code}}">{{$businesstype->code}}</option>
      @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Business Type</label>
        <select class="form-control"  id="type" name="type" required>  
      @foreach($mydata as $businesstype)  
      <option value="{{$businesstype->type}}">{{$businesstype->type}}</option>
      @endforeach
    </select>
     
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

