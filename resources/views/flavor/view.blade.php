@extends('layouts.admin')

@section('title') Flavor @endsection

@section('content')

<!-- Main content -->
    <section>
       <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('user.home')}}">Home</a>
                                    </li>
                                     <li class="breadcrumb-item"><a href="{{route('flavor.index')}}">Flavor</a>
                                    </li>
                                    <li class="breadcrumb-item active">View
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
              </div>


        <div class="row">
          <div class="col-12">
            <div class="card">
  
              <!-- /.card-header -->
              <div class="card-body">

                     <table id="w0" class="table table-striped table-bordered detail-view">
                      <tbody>
                        <tr>
              
                          <th>Name</th>
                          <td colspan="1">{{$flavorObj->name}}</td>
                         <th>IceCream</th>
                          <td colspan="1">{{($flavorObj->iceCreamDetails->name)??''}}</td>
                        
                        </tr>
                    
                                  <tr>
                                 <th>Description</th>
                                    <td colspan="1">{{$flavorObj->description}}</td>
                                  <th>Background Color</th>
                                    <td colspan="1">{{$flavorObj->background_color}}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td colspan="1">{{$flavorObj->created_at}}</td>
                                      
                                    
                                 
                                     <th>Image</th>
                                    <td colspan="1"><img height="50" width="50" src="{{ asset('') }}{{ $flavorObj->image }}" alt="post" class=""></td>
                                    
                                   
                                    </tr>
                               </tbody>
                           </table>
                           <br>
                              <div class="row"> 
                            <div class="col-md-12 text-center">
                            <a id="tool-btn-manage"  class="btn btn-primary text-right" href="{{ url()->previous() }}" title="Back">Back</a>
                        </div>
                    </div>
                         
                </div>


              
              </div>
          
              <!-- /.card-body -->

            </div>



            <!-- /.card -->
        </div>
       </div>   




      
 
</section>



@endsection
