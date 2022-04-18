@extends('.admin.layouts.layout')
@section('content')
@section('title')
create_file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('about.update',$about->id)}}" enctype="multipart/form-data" novalidate>
@csrf
@method('PUT')
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">htext</label>
    <input type="text" class="form-control" name="htext" value="{{$about->htext}}" required>
    
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">title</label>
    <input type="text" class="form-control" name="title" value="{{$about->title}}"required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">image</label>
    <input type="text" class="form-control" name="img" value="{{$about->img}}"required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">Para1</label> 
      <input type="text" class="form-control"  name="para1" value="{{$about->para1}}"required>
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
    </div>
  </div>
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">Para2</label> 
      <input type="text" class="form-control"  name="para2" value="{{$about->para2}}"required>
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
    </div>
  </div>
  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
@endsection