<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GS1ugandaAdministrationsystem') }}</title>
        <link href="{{ asset('argon') }}/img/brand/small.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="http://jquerypost.com/cdn/bs3/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/businessprofile/css/material-bootstrap-wizard.css" rel="stylesheet" />

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/businessprofile/img/wizard-profile.jpg')">
	  
		
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container" style="padding-top: 30px;">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="{{ route('registerbusiness') }}" method="POST" autocomplete="off">
		                    	<div class="wizard-header">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/brand/small.png"></span>
		                        	<h3 class="wizard-title">
		                        	   Build Your Business Profile
		                        	</h3>
                                    
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Step 1</a></li>
			                            <li><a href="#account" data-toggle="tab">Step 2</a></li>
			                            <li><a href="#address" data-toggle="tab">Step 3</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<div class="col-sm-8 col-sm-offset-1">
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">business</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Business Name <small>(required)</small></label>
			                                          <input id="businessName" name="businessName" type="text" class="form-control">
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person_add</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Business Owner <small>(required)</small></label>
			                                          <input id="businessOwner" name="businessOwner" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person_pin</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Business Ownership <small>(required)</small></label>
													  <input id="businessOwnership" name="businessOwnership" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person_pin_circle</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Business registration Number <small>(required)</small></label>
													  <input id="registrationNumber" name="registrationNumber" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Business Email <small>(required)</small></label>
			                                            <input id="email" name="email" type="email" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <div class="row">
                                        <div class="col-sm-8 col-sm-offset-1">
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">sell</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Business Tin Number <small>(required)</small></label>
			                                          <input id="tinNumber" name="tinNumber" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">my_location</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Physical Address <small>(required)</small></label>
													  <input id="physicalAddress" name="physicalAddress" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">room</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Postal Address/ Zip Code<small>(required)</small></label>
													  <input id="postalAddress" name="postalAddress" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">place</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">District <small>(required)</small></label>
			                                            <input id="district" name="district" type="text" class="form-control">
			                                        </div>
												</div>
                                                </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
                                    <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1">
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">phone</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Business Contacts <small>(required)</small></label>
			                                          <input id="contacts" name="contacts" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">business</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Business Type <small>(required)</small></label>
													  <input id="businessType" name="businessType" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">add_business</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Business Line<small>(required)</small></label>
													  <input id="businessLine" name="businessLine" type="text" class="form-control">
													</div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
                                                    <i class="material-icons">location_on</i>
													</span>
		                                        <div class="form-group label-floating">
                                                
		                                            <label class="control-label">Country</label>
                                                    <input id="country" name="country" type="text" class="form-control">
		                                        </div>
		                                </div>
		                            </div>
                                    </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
										<button type="submit" name='finish' class='btn btn-finish btn-fill btn-success btn-wd'><a href="{{ route('products') }}" style="color:white;">{{ __('Submit') }}</a></button>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="http://jquerypost.com/cdn/jquery-1.12.4.min.js" type="text/javascript"></script>
	<script src="http://jquerypost.com/cdn/bs3/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/businessprofile/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/businessprofile/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/businessprofile/js/jquery.validate.min.js"></script>

</html>
