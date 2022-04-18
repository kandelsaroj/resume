@extends('admin.layouts.layout')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage files
              @endsection
             

              <a href="{{route('filemanager.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD File
        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Action</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>file-link</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                      @if($filemanager)
                      @foreach($filemanager as $filemanager)

                  <tr>
                    <td>
                    
                        <form action="{{route('filemanager.destroy',$filemanager->id)}}" method="POST">
                            @csrf
                         @method('DELETE')
                         <div class="col-md-3">
                         
                         <button class="btn btn-danger btn-sm " type="submit" role="button">delete </button>

                         </div>
                         <div class="col-md-3">
                           
                           <a class="btn btn-info btn-sm " type="submit" role="button" href="{{route('filemanager.edit',$filemanager->id)}}" >edit </a>
                         </div>
                        
                      
                
                    </td>
                  
                    <td>{{$filemanager->name}}</td>
                    <td>{{$filemanager->details}}</td>
                    <td>{{$filemanager->img}}</td>
                
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  