@extends('admin.layouts.layout')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage about us
              @endsection
             

              <a href="{{route('about.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD about us
        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Action</th>
                    <th>htext</th>
                    <th>title</th>
                    <th>img</th>
                    <th>para1</th>
                    <th>para2</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                      @if($about)
                      @foreach($about as $about)

                  <tr>
                    <td>
                    
                        <form action="{{route('about.destroy',$about->id)}}" method="POST">
                            @csrf
                         @method('DELETE')
                         <div class="col-md-3">
                         
                         <button class="btn btn-danger btn-sm " type="submit" role="button">delete </button>

                         </div>
                         <div class="col-md-3">
                           
                           <a class="btn btn-info btn-sm " type="submit" role="button" href="{{route('about.edit',$about->id)}}" >edit </a>
                         </div>
                        
                      
                
                    </td>
                  
                    <td>{{$about->htext}}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->img}}</td>
                    <td>{{$about->para1}}</td>
                    <td>{{$about->para2}}</td>
                
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  