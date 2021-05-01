@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <div class="container mt--0">
    <div class="card text-center">
        <h2 style="padding: 10px 10px;">Register Business Profile</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 ">
                   <form role="form" name="businessform" method="POST" action="{{route('registerbusiness')}}">
                        @csrf
     <div class="form-group">
      <label for="">Business Name</label>
        <input type="text" class="form-control" id="businessName" name="businessName" placeholder="" required>
      </div>
      <div class="form-group">
      <label for="">Business Ownership</label>
        <input type="text" class="form-control" id="businessOwnership" name="businessOwnership" placeholder="" required>
      </div>
      <div class="form-group">
      <label for="">Business Physical Address</label>
        <input type="text" class="form-control" id="physicalAdress" name="physicalAdress" placeholder="" required>
      </div>
    
          <div class="form-group">
      <label for="">Business Email</label>
        <input type="email" class="form-control" id="businessEmail" email="businessEmail" placeholder="" required>
      </div>
    
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Business Registration Number</label>
        <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" placeholder="" required>
      </div><div class="form-group">
      <label for="">Business TIN Number</label>
        <input type="text" class="form-control" id="tinNumber" name="tinNumber" placeholder="" required>
      </div>
  
   
      <div class="form-group">
      <label for="">Business Postal Address</label>
        <input type="text" class="form-control" id="postalAdress" name="postalAdress" placeholder="" required>
      </div>
      </div>
      <button type="submit" class="btn btn-md btn-success" name="submit">Next</button>
      </form>
      
                    
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