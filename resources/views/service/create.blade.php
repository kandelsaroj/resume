@extends('.admin.layouts.layout')
@section('content')
@section('title')
create_new service
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('service.store')}}" enctype="multipart/form-data" novalidate>
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
    <label for="validationCustom02" class="form-label">para</label>
    <input type="text" class="form-control" name="ptext" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Add </button>
  </div>
</form>
@endsection