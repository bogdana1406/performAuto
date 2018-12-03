@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#">Cars</a> <a href="#" class="current">Edit Car</a> </div>
            <h1>Cars</h1>
            @if(Session::has('flash_massage_error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> {!! session('flash_massage_error') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_massage_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> {!! session('flash_massage_success') !!}</strong>
                </div>
            @endif
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Car</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-car/'.$carDetails->id) }}"
                                  name="edit_car" id="edit_car" novalidate="novalidate"> {{ csrf_field() }}

                                <div class="control-group">
                                    <label class="control-label">Car ID</label>
                                    <div class="controls">
                                        <input type="text" readonly name="id" id="id" value="{{ $carDetails->id }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Car Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" value="{{old('name') ?? $carDetails->name }}">
                                        @if($errors->has('name'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('name')}}
                                            </span>
                                        @endif.
                                    </div>

                                </div>
                                <div class="control-group">
                                    <label class="control-label">Brand</label>
                                    <div class="controls">
                                        <select name="brand_id" style="width: 220px">
                                            {{--<option value="{{ $carDetails->brand->id }}">{{ $carDetails->brand->name }}</option>--}}
                                            @foreach ($brands as $id=>$name)
                                                <option {{$id==old('brand_id')??$carDetails->brand->id ? "selected": ""}} value="{{$id}}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('brand_id'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('brand_id')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Model</label>
                                    <div class="controls">
                                        <input type="text" name="model" id="model" value="{{old('model')??$carDetails->model }}">
                                        @if($errors->has('model'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('model')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Meliage</label>
                                    <div class="controls">
                                        <input type="text" name="mileage" id="mileage" value="{{ old('mileage')??$carDetails->mileage }}">
                                        @if($errors->has('mileage'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('mileage')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Transmission_types</label>
                                    <div class="controls">
                                        <select name="transmission_types" style="width: 220px">
                                            {{--<option>{{ $carDetails->transmission_types }}</option>--}}
                                            <option {{"automatic"==old('transmission_types')??$carDetails->transmission_types ? "selected":""}}>automatic</option>
                                            <option {{"manual"==old('transmission_types')??$carDetails->transmission_types ? "selected":""}}>manual</option>
                                        </select>
                                        @if($errors->has('transmission_types'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('transmission_types')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Body_type</label>
                                    <div class="controls">
                                        <select name="body_type" style="width: 220px">
                                            @foreach ($bodyTypes as $key=>$value)
                                                <option {{$key==(old('body_type')??$carDetails->body_type) ? "selected": ""}} value="{{$key}}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Year</label>
                                    <div class="controls">
                                        <input type="text" name="year" id="year" value="{{ old('year')??$carDetails->year }}">
                                        @if($errors->has('year'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('year')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Engine</label>
                                    <div class="controls">
                                        <select name="engine_id" style="width: 220px">
                                            {{--<option value="{{ $carDetails->engine->id }}">{{ $carDetails->engine->name }}</option>--}}
                                            @foreach ($engines as $id=>$name)
                                                <option {{$id==old('engine_id')??$carDetails->engine->id ? "selected":""}} value="{{$id}}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('engine_id'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('engine_id')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Seats</label>
                                    <div class="controls">
                                        <input type="text" name="seats" id="seats" value="{{ old('seats')??$carDetails->seats }}">
                                        @if($errors->has('seats'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('seats')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Doors</label>
                                    <div class="controls">
                                        <input type="text" name="doors" id="doors" value="{{old('doors')??$carDetails->doors}}">
                                        @if($errors->has('doors'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('doors')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="price" id="price" value="{{old('price')??$carDetails->price}}">
                                        @if($errors->has('price'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('price')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                @foreach(['en', 'fr'] as $locale)
                                    <div class="control-group">
                                        <label class="control-label">About_{{$locale}}</label>
                                        <div class="controls">
                                            <textarea type="text" rows="10" cols="45" name="about[{{$locale}}]" id="about">{{old("about.$locale")?? $carDetails->about[$locale]}}</textarea>

                                            @if($errors->has("about.$locale"))
                                                <span class="alert alert-danger" role="alert">
                                                    {{$errors->first("about.$locale")}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach


                                @foreach(['en', 'fr'] as $locale)
                                    <div class="control-group">
                                        <label class="control-label">Description_{{$locale}}</label>
                                        <div class="controls">
                                            <textarea type="text" rows="10" cols="45" name="descriptions[{{$locale}}]" id="description">{{old("descriptions.$locale")?? $carDetails->descriptions[$locale]}}</textarea>
                                            @if($errors->has("descriptions.$locale"))
                                                <span class="alert alert-danger" role="alert">
                                                    {{$errors->first("descriptions.$locale")}}
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach

                                    <label class="control-label">Parameters Small Image</label>
                                    <div class="controls">
                                        <input type="text" class="span1" name="small_h" id="small_h" value="300">

                                        <input type="text" class="span1" name="small_w" id="small_w" value="300">
                                    </div>

                                    <label class="control-label">Parameters Medium Image</label>
                                    <div class="controls">
                                        <input type="text" class="span1" name="medium_h" id="medium_h" value="600">

                                        <input type="text" class="span1" name="medium_w" id="medium_w" value="600">
                                    </div>

                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image">
                                        <input type="hidden" name="current_image" value="{{$carDetails->image}}">
                                        {{--@if(!empty($car->image))--}}
                                            {{--<img src="{{ asset('/images/backend_images/cars/small/'.$car->image) }}" style="width:30px;">--}}
                                        {{--@endif--}}
                                    @if(!empty($carDetails->image))
                                        <img style="width:30px;" src="{{ asset('files/images/backend_images/small/'.$carDetails->image) }}" > |
                                        <a href="{{ url('/admin/delete-car-image/'.$carDetails->id) }}">Delete</a>
                                        @endif
                                    </div>

                                        {{--<a href="{{ url('/admin/upload-car-images/'.$carDetails->id) }}" class="btn btn-primary btn-mini">Upload Images</a>--}}

                                <div class="form-actions">
                                    <input type="submit" value="Edit Car" class="btn btn-success">
                                </div>
                            </form>


                            {{--<form action="/admin/upload-car-images/{{$carDetails->id}}" method="post" enctype="multipart/form-data">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--Car model:--}}
                                {{--<br />--}}
                                {{--<input type="hidden" name="id_car_image" value="{{ $carDetails->id }}"/>--}}
                                {{--<br /><br />--}}
                                {{--<input type="hidden" name="name_car_image" value="{{ $carDetails->model }}"/>--}}
                                {{--@if (count($errors) > 0)--}}
                                    {{--<ul>--}}
                                        {{--@foreach ($errors->all() as $error)--}}
                                            {{--<li>{{ $error }}</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--@endif--}}
                                {{--<br /><br />--}}
                                {{--Car Images (can attach more than one):--}}
                                {{--<br />--}}
                                {{--<input type="file" name="images[]"  multiple />--}}
                                {{--<br /><br />--}}
                                {{--<input type="submit" value="Upload" />--}}


                                {{--@if($errors->has('images[]'))--}}
                                    {{--<span class="alert alert-danger" role="alert">--}}
                                     {{--{{$errors->first('images[]')}}--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection