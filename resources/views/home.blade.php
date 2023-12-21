@extends('layouts.admin')

@section('title') Dashboard @endsection

@section('content')
  <!-- Dashboard Ecommerce Starts -->
  <section id="dashboard-ecommerce">
    <div class="row match-height">

      <!-- Statistics Card -->
 
                      <div class="col-xl-3 col-sm-4 col-6 mb-2 mb-xl-0">
                        <a href="{{route('users.index')}}">
                          <div class="d-flex flex-row colbox bg-success">
                              <div class="avatar bg-light-primary me-2">
                                  <div class="avatar-content">
                                      <i data-feather="user" class="avatar-icon text-success"></i>
                                  </div>
                              </div>
                              <div class="my-auto">
                                  <h4 class="fw-bolder mb-0">{{$users}}</h4>
                                  <p class="card-text  mb-0">Users</p>
                              </div>
                          </div>
                        </a>
                      </div>
                         <div class="col-xl-3 col-sm-4 col-6 mb-2 mb-xl-0">
                        <a href="{{route('restaurant.index')}}">
                          <div class="d-flex flex-row colbox bg-warning">
                              <div class="avatar bg-light-primary me-2">
                                  <div class="avatar-content">
                                      <i data-feather="award" class="avatar-icon text-warning"></i>
                                  </div>
                              </div>
                              <div class="my-auto">
                                  <h4 class="fw-bolder mb-0">{{$restaurants}}</h4>
                                  <p class="card-text  mb-0">Restaurants</p>
                              </div>
                          </div>
                        </a>
                      </div>
                         <div class="col-xl-3 col-sm-4 col-6 mb-2 mb-xl-0">
                        <a href="{{route('iceCream.index')}}">
                          <div class="d-flex flex-row colbox bg1-primary">
                              <div class="avatar bg-light-primary me-2">
                                  <div class="avatar-content">
                                      <i data-feather="droplet" class="avatar-icon text-light-primary"></i>
                                  </div>
                              </div>
                              <div class="my-auto">
                                  <h4 class="fw-bolder mb-0">{{$iceCreams}}</h4>
                                  <p class="card-text mb-0">iceCreams</p>
                              </div>
                          </div>
                        </a>
                      </div>
                            <div class="col-xl-3 col-sm-4 col-6 mb-2 mb-xl-0">
                        <a href="{{route('flavor.index')}}">
                          <div class="d-flex flex-row colbox bg-danger">
                              <div class="avatar bg-light-danger me-2">
                                  <div class="avatar-content">
                                      <i data-feather="stop-circle" class="avatar-icon text-light-primary"></i>
                                  </div>
                              </div>
                              <div class="my-auto">
                                  <h4 class="fw-bolder mb-0">{{$flavors}}</h4>
                                  <p class="card-text   mb-0">Flavors</p>
                              </div>
                          </div>
                        </a>
                      </div>

      <!--/ Statistics Card -->
    </div>
     <div class="row mt-5">

            <div class="col-md-6">

                <h4 class="mb-3 earning-title">{{ __('Latest Users') }}</h4>

                <div class="table-wrap table-responsive">

                    <table class="table table-bordered">

                        <thead>

                        <th>{{__('ID')}}</th>

                        <th>{{__('Name')}}</th>

                        <th>{{__('Email')}}</th>

                        <th>{{__('Phone')}}</th>

                        </thead>

                        <tbody>

                           @if($user_list)

                            @foreach($user_list as $user)

                            <tr>

                                <td>{{$loop->index + 1}}</td>

                                <td>{{$user->full_name}}</td>

                                 <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>

                              

                            </tr>

                            @endforeach

                           @endif

                        </tbody>

                    </table>

                </div>
               </div>
                 <div class="col-md-6">

                <h4 class="mb-3 earning-title">{{ __('Latest Restaurants') }}</h4>

                <div class="table-wrap table-responsive">

                    <table class="table table-bordered">

                        <thead>

                        <th>{{__('ID')}}</th>

                        <th>{{__('Name')}}</th>

                        <th>{{__('Address')}}</th>

                        <th>{{__('Description')}}</th>

                        </thead>

                        <tbody>

                           @if($restaurant_list)

                            @foreach($restaurant_list as $restaurant)

                            <tr>

                                <td>{{$loop->index + 1}}</td>

                                <td><span class="max-chracters">{{$restaurant->name}}</span></td>

                                 <td><span class="max-chracters">{{$restaurant->address}}</span></td>
                                <td><span class="max-chracters">{{$restaurant->description}}</span></td>

                              

                            </tr>

                            @endforeach

                           @endif

                        </tbody>

                    </table>

                </div>

            </div>

              <div class="col-md-6">

                <h4 class="mb-3 earning-title">{{ __('Latest IceCreams') }}</h4>

                <div class="table-wrap table-responsive">

                    <table class="table table-bordered">

                        <thead>

                        <th>{{__('ID')}}</th>

                        <th>{{__('Name')}}</th>

                        <th>{{__('Restaurant')}}</th>

                        <th>{{__('Price')}}</th>

                        </thead>

                        <tbody>

                           @if($ice_cream_list)

                            @foreach($ice_cream_list as $ice_cream)

                            <tr>

                                <td>{{$loop->index + 1}}</td>

                                <td><span class="max-chracters">{{$ice_cream->name}}</span></td>

                                 <td><span class="max-chracters">{{($ice_cream->restaurantDetails->name)??''}}</span></td>

                                <td>{{$ice_cream->price}}</td>

                              

                            </tr>

                            @endforeach

                           @endif

                        </tbody>

                    </table>

                </div>

            </div>

            <div class="col-md-6">

                <h4 class="mb-3 earning-title">{{ __('Latest Flavors') }}</h4>

                <div class="table-wrap table-responsive">

                    <table class="table table-bordered">

                        <thead>

                        <th>{{__('ID')}}</th>

                        <th>{{__('Name')}}</th>

                        <th>{{__('IceCream')}}</th>

                        <th>{{__('Description')}}</th>

                        </thead>

                        <tbody>

                           @if($flavor_list)

                            @foreach($flavor_list as $flavor)

                            <tr>

                                <td>{{$loop->index + 1}}</td>

                                <td><span class="max-chracters">{{$flavor->name}}</span></td>

                                 <td><span class="max-chracters">{{($flavor->iceCreamDetails->name)??''}}</span></td>

                                <td><span class="max-chracters">{{$flavor->description}}</span></td>

                              

                            </tr>

                            @endforeach

                           @endif

                        </tbody>

                    </table>

                </div>

            </div>



             </div>

  
          





  </section>
  

    
@endsection
