@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">  <a href="#">Engines</a> <a href="#" class="current">Add Engine</a> </div>
            <h1>Engines</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add Engines</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ url('/admin/add-engine') }}" name="add_engine" id="add_engine" novalidate="novalidate"> {{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label">Engine Name</label>
                                    <div class="controls">
                                        <input type="text" name="engine_name" id="engine_name" value="{{old('engine_name')}}">
                                        @if($errors->has('engine_name'))
                                            <span class="alert alert-danger" role="alert">
                                              {{$errors->first('engine_name')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Engine" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection