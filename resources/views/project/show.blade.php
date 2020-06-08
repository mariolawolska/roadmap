<!--@extends('layout.app')-->
@extends('layout.head')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto small" >

                            <div class="mb-4 col-md-8 p-3  mx-auto">


                                <div class="row">
                                    <div class="col-lg-12 margin-tb text-right">
                                        <div class="pull-right">
                                            <h3>Project details</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top my-3 mb-5"></div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Title:</strong>
                                            {{ $project->title }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Start_date:</strong>
                                            {{ $project->start_date }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>End_date:</strong>
                                            {{ $project->end_date }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Technologies:</strong>
                                            {{ $project->technologies }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group justify-center">
                                            <strong>Description:</strong>
                                            @php
                                            echo $project->description;
                                            @endphp
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Link_project:</strong>
                                            {{ $project->link_project }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Link_image:</strong>
                                            {{ $project->link_image }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <strong>Link_github:</strong>
                                            {{ $project->link_github }}
                                        </div>
                                    </div>
                                    <div class="col-12 border-top my-3"></div>

                                    <div class="pull-right">
                                        <a class="btn btn-primary" href="{{ route('project.index') }}">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection
