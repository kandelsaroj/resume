@extends('.admin.layouts.layout')
@section('content')
@section('title')
Add new file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('filemanager.store')}}" enctype="multipart/form-data" novalidate>
@csrf
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Details</label>
    <input type="text" class="form-control" name="details" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">File-link</label>
    <input type="file" class="form-control" name="img" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  

  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
@endsection