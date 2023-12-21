@extends('layouts.admin')

@section('title')
    Restaurant
@endsection

@section('content')
    <!-- Main content -->
    <section>
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}">Restaurant</a>
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
                                    <td colspan="1">{{ $restaurantObj->name }}</td>
                                    <th>Address</th>
                                    <td colspan="1">{{ $restaurantObj->address }}</td>

                                </tr>

                                <tr>

                                    <th>Description</th>
                                    <td colspan="1">{{ $restaurantObj->description }}</td>
                                    <th>Background Color</th>
                                    <td colspan="1">{{ $restaurantObj->background_color }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td colspan="1">{{ $restaurantObj->created_at }}</td>
                                    <th>Image</th>
                                    <td colspan="1"><img height="50" width="50"
                                            src="{{ asset('') }}{{ $restaurantObj->image }}" alt="restaurant"
                                            class="">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a id="tool-btn-manage" class="btn btn-primary text-right" href="{{ url()->previous() }}"
                                    title="Back">Back</a>
                                <a href="{{route('restaurant.changeStatus',encrypt($restaurantObj->id))}}" class="active_status btn btn-{{($restaurantObj->status ==1)?'danger':'primary'}}"  data-id = {{encrypt($restaurantObj->id)}} title="Manage">{{($restaurantObj->status == 1)?"Remove Trending":"Trending"}}</i></a>
                            </div>
                        </div>

                    </div>
                </div> 
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card data-table">
                    <div class="card-header">
                        <div class="heading-text">
                            <h4 class="m-0"><i class="fas fa-users mr-2"></i>&nbsp;{{ __('IceCreams') }}</h4>
                        </div>

                        <div class="right-side mr-2">



                            <a href="{{ route('restaurant/iceCream-create', encrypt($restaurantObj->id)) }}"
                                class="dt-button btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Create New
                                IceCream</a>

                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="restaurantIceCreamTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Restaurant</th>
                                    <th>Price</th>
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
            var restaurant_id = {{ $restaurantObj->id }};
        </script>
        @include('include.dataTableScripts')

        <script src="{{ asset('js/pages/restaurant/view.js') }}"></script>
    @endpush
@endsection
