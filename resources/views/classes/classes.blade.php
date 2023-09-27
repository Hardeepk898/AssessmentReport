@extends('master')
@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ URL::to('dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ URL::to('dashboard') }}">Classes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">

                    <div class="card">
                        <div class="card-header">
                            <h5>Class Details</h5>
                        </div>
                        <div class="card-block">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('message'))
                            <div class="col-sm-12 alert alert-success">
                                {{ Session::get('message') }}
                            </div>  
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    {{ Form::open(array('url' => 'classes', 'method' => 'post', 'class' => 'form-material')) }}
                                    <div class="form-group form-default">
                                        {{ Form::text('class_name','', ['class' => 'form-control', 'required' => true]) }}
                                        <span class="form-bar"></span>
                                        {{ Form::label('name', 'Name', ['class' => 'float-label']) }}
                                    </div>
                                    <div class="form-group form-default">
                                        {{ Form::textarea('description','', ['class' => 'form-control']) }}
                                        <span class="form-bar"></span>
                                        {{ Form::label('description', 'Description', ['class' => 'float-label']) }}
                                    </div>
                                    <div class="form-group form-default">
                                        {{ Form::select('status', ['' => 'Select Status','0' => 'In-Active', '1' => 'Active'], '', ['class' => 'form-control']) }}
                                        <span class="form-bar"></span>
                                        {{ Form::label('status', 'Status', ['class' => 'float-label']) }}
                                    </div>
                                    <div class="form-group form-default">
                                        {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-sm']) }}
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
    </div>
</div>
@endsection