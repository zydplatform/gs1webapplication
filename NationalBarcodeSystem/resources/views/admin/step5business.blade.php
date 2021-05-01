<form role="form" name="businessform" method="POST" action="{{route('country')}}">
    @csrf
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Country Code</label>
        <input class="form-control" type="text" value="Uganda" id="countryCode" name="countryCode">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Country</label>
        <input class="form-control" type="text" value="Uganda" id="countryName" name="countryName">
    </div>
    
      <button type="submit" class="btn btn-block btn-success">Save</button>
      </form>