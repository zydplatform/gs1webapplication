<form role="form" name="businessform" method="POST" action="{{route('district')}}">
    @csrf
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">District Code</label>
        <input class="form-control" type="text" value="" id="districtCode" name="districtCode">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">District</label>
        <input class="form-control" type="text" value="" id="districtName" name="districtName">
    </div>
    
      <button type="submit" class="btn btn-block btn-success">Save</button>
      </form>