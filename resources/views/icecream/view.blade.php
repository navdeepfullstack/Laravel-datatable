@extends('layouts.admin')

@section('title') IceCream @endsection

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
                                     <li class="breadcrumb-item"><a href="{{route('iceCream.index')}}">IceCream</a>
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
                          <td colspan="1">{{$iceCreamObj->name}}</td>
                         <th>Restaurant</th>
                          <td colspan="1">{{($iceCreamObj->restaurantDetails->name)??''}}</td>
                        
                        </tr>
                    
                                  <tr>
                                       <th>Price</th>
                               <td colspan="1">{{$iceCreamObj->price}}</td>
                                    <th>Description</th>
                                    <td colspan="1">{{$iceCreamObj->description}}</td>
                                      
                                    
                                  </tr>
                                   <tr>
                                     <th>Image</th>
                                    <td colspan="1"><img height="50" width="50" src="{{ asset('') }}{{ $iceCreamObj->image }}" alt="post" class=""></td>
                                    <th>Background Color</th>
                                    <td colspan="1">{{$iceCreamObj->background_color}}</td>
                                  </tr>
                                  <tr>
                                    <th>Category</th>
                                      <td>{{($iceCreamObj->categoryDetails->name)??''}}</td>
                                    <th>Created At</th>
                                    <td colspan="1">{{$iceCreamObj->created_at}}</td>
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
<section>
          <div class="row">
          <div class="col-12">
            <div class="card data-table">
               <div class="card-header">
                  <div class="heading-text">
                    <h4 class="m-0"><i class="fas fa-users mr-2"></i>&nbsp;{{ __('Flavors') }}</h4>
                  </div>

                  <div class="right-side mr-2">



                <a href="{{route('iceCream/flavor-create', encrypt($iceCreamObj->id))}}" class="dt-button btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Create New Flavor</a>

              </div>
              </div>
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="iceCreamFlavorTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>IceCream</th>
                    <th>Created At</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                  </thead>
                   
              
                </table>
              </div>
          
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
       </div>  
    </section>

  @push('page_script')
    <script type="text/javascript">
        var ice_cream_id={{$iceCreamObj->id}};
    </script>
      @include('include.dataTableScripts')   
       
      <script src="{{ asset('js/pages/icecream/view.js') }}"></script>

  @endpush


@endsection
