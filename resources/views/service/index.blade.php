@extends('admin.layouts.layout')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage services
              @endsection
             

              <a href="{{route('service.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD services
        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Action</th>
                    <th>htext</th>
                    <th>title</th>
                    <th>ptext</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                      @if($service)
                      @foreach($service as $service)

                  <tr>
                    <td>
                    
                        <form action="{{route('service.destroy',$service->id)}}" method="POST">
                            @csrf
                         @method('DELETE')
                         <div class="col-md-3">
                         
                         <button class="btn btn-danger btn-sm " type="submit" role="button">delete </button>

                         </div>
                         <div class="col-md-3">
                           
                           <a class="btn btn-info btn-sm " type="submit" role="button" href="{{route('service.edit',$service->id)}}" >edit </a>
                         </div>
                        
                      
                
                    </td>
                  
                    <td>{{$service->htext}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->ptext}}</td>
                
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  