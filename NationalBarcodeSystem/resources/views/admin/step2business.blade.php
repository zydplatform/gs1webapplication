
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
	<span class="btn-inner--icon">Add Business Owner <i class="ni ni-curved-next"></i></span>
</button>
                    <th scope="col" class="sort" data-sort="name">First Name</th>
                    <th scope="col" class="sort" data-sort="budget">Last Name</th>
                    <th scope="col" class="sort" data-sort="status">Telephone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($mydata as $owner)
                <tr>
                    <th scope="row"> 
                        {{ $owner->firstName}}
                    </th>
                    <td class="budget">
                        {{ $owner->lastname}}
                    </td>
                    <td class="budget">
                        {{ $owner->telephone}}
                    </td>
                    <td class="budget">
                        {{ $owner->email}}
                    </td>

                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-icon btn-warning" type="button" style="float:right;">
	<a href="{{route('businesslines')}}" style="color:white"><span class="btn-inner--icon">Next<i class="ni ni-curved-next"></i></span></a>
</button>
    </div>
      <!-- modal -->
          <div class="modal fade" id="businessowner" tabindex="-1" role="dialog" aria-labelledby="businessownerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="businessownerLabel">Business Owner Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--  -->
      <form role="form" name="businessform" method="POST" action="{{route('createbusinessowners')}}">
          @csrf
    <div class="form-group">
      <label for="">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="">
      </div>
    <div class="form-group">
      <label for="">Telephone</label>
        <input type="text" class="form-control" id="telephone" email="telephone" placeholder="">
      </div><div class="form-group">
      <label for="">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="">
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

