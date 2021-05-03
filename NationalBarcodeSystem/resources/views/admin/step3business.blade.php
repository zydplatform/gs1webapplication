
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
	<span class="btn-inner--icon">Add Business Line <i class="ni ni-curved-next"></i></span>
</button>
                    <th scope="col" class="sort" data-sort="name">BusinessLine Code</th>
                    <th scope="col" class="sort" data-sort="budget">BusinessLineName</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($mydata as $businessline)
                <tr>
                    <th scope="row"> 
                        {{ $businessline->code}}
                    </th>
                    <td class="budget">
                        {{ $businessline->businessLineName}}
                    </td>
                   
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-icon btn-warning" type="button" style="float:right;">
	<a href="{{route('businesstypes')}}" style="color:white"><span class="btn-inner--icon">Next<i class="ni ni-curved-next"></i></span></a>
</button>
    </div>
      <!-- modal -->
          <div class="modal fade" id="businessowner" tabindex="-1" role="dialog" aria-labelledby="businessownerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="businessownerLabel">Business Line Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--  -->
      <form role="form" name="businessform" method="POST" action="{{route('createbusinesslines')}}">
    @csrf
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">BusinessLine Code</label>
        <select class="form-control"  id="code" name="code" required>  
      @foreach($mydata as $businessline)  
      <option value="{{$businessline->code}}">{{$businessline->code}}</option>
      @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">BusinessLineName</label>
        <select class="form-control"  id="businessLineName" name="businessLineName" required>  
      @foreach($mydata as $businessline)  
      <option value="{{$businessline->businessLineName}}">{{$businessline->businessLineName}}</option>
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

