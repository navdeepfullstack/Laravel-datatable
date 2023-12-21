@extends('layouts.admin')

@section('title')
    Edit Restaurant
@endsection

@section('content')
    @push('page_style')
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    @endpush

    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}">Restaurant</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Restaurant
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Restaurant</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('restaurant.update', encrypt($restaurantObj->id)) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="name">Name <span
                                                class="text-danger asteric-sign">&#42;</span></label>
                                        <input id="name" type="text"
                                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') ? old('name') : $restaurantObj->name }}"
                                            placeholder="Full Name">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="address">Address <span
                                                class="text-danger asteric-sign">&#42;</span></label>
                                        <input id="address" type="text"
                                            class="form-control {{ $errors->has('address') || $errors->has('latitude') ? ' is-invalid' : '' }}"
                                            name="address"
                                            value="{{ old('address') ? old('address') : $restaurantObj->address }}"
                                            placeholder="address">
                                        @if ($errors->has('address') || $errors->has('latitude'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $errors->has('address') ? $errors->first('address') : $errors->first('latitude') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <input type="hidden" name="latitude" id="latitude"
                                    value="{{ old('latitude') ? old('latitude') : $restaurantObj->latitude }}">
                                <input type="hidden" name="longitude" id="longitude"
                                    value="{{ old('longitude') ? old('longitude') : $restaurantObj->longitude }}">



                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="description">Description </label>
                                        <textarea id="description" name="description" rows="10"
                                            class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Page Content">{{ $restaurantObj->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">

                                        <label class="form-label" for="password">Restaurant Image <span
                                                class="text-danger asteric-sign">&#42;</span>
                                        </label>

                                        <input id="restaurantImage" type="file"
                                            class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                            accept="image/*" name="image">
                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                        <input type="hidden"
                                            value="{{ $restaurantObj->image ? $restaurantObj->image : '' }}"
                                            name="old_image" />
                                        <img src="{{ asset('') }}{{ $restaurantObj->image }}"
                                            class="mt-3 upload_image {{ !$restaurantObj->image ? 'd-none' : '' }}"
                                            id="restaurantImagePreview" width="100" />

                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="description">Background Color<span
                                                class="text-danger asteric-sign">&#42;</span> </label>
                                        <input type="text" id="background_color"
                                            class="form-control jscolor  {{ $errors->has('background_color') ? ' is-invalid' : '' }}"
                                            name="background_color" value="{{ $restaurantObj->background_color }}"
                                            readonly>
                                        @if ($errors->has('background_color'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('background_color') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>





                                <div class="col-12">
                                    <button type="Submit" class="btn btn-primary me-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Floating Label Form section end -->

    @push('page_script')
        @include('include.dataTableScripts')
        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
        <script src="{{ asset('js/pages/restaurant/index.js') }}"></script>
    @endpush
@endsection
