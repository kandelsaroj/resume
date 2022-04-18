@extends('.admin.layouts.layout')
@section('content')
@section('title')
create_file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data" novalidate>
@csrf
@method('PUT')
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">htext</label>
    <input type="text" class="form-control" name="htext" value="{{$service->htext}}" required>
    
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">title</label>
    <input type="text" class="form-control" name="title" value="{{$service->title}}"required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">Ptext</label> 
      <input type="text" class="form-control"  name="ptext" value="{{$service->ptext}}"required>
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