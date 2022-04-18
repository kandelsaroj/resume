@extends('.admin.layouts.layout')
@section('content')
@section('title')
create_new about
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('about.store')}}" enctype="multipart/form-data" novalidate>
@csrf
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">htext</label>
    <input type="text" class="form-control" name="htext" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">title</label>
    <input type="text" class="form-control" name="title" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">img</label>
    <input type="text" class="form-control" name="img" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">para1</label>
    <input type="text" class="form-control" name="para1" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">para2</label>
    <input type="text" class="form-control" name="para2" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
@endsection