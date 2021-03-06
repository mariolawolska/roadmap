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
                        <div class="col-md-12 mx-auto">
                            <div class="mb-4 col-md-8 p-3 mx-auto small">
                                <div class="row">
                                    <div class="col-lg-12 margin-tb text-right">
                                        <div class="pull-right">
                                            <h3>Add New Project</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top my-3 mb-5"></div>
                                <br>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form action="{{ route('project.store') }}" method="POST">
                                    @csrf

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Title:</strong>
                                                <input type="text" name="title" class="form-control" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Start_date:</strong>
                                                <input type="date" name="start_date" class="form-control" placeholder="date">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>End_date:</strong>
                                                <input type="date" name="end_date" class="form-control" placeholder="date">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Technologies:</strong>
                                                <input type="text" name="technologies" class="form-control" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Description:</strong>
                                                <input type="text" name="description" class="form-control" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Link_project:</strong>
                                                <input type="text" name="link_project" class="form-control" placeholder="www.wolscy.com/czarna...">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Link_image:</strong>
                                                <input type="text" name="link_image" class="form-control" placeholder="www.wolscy.com/czarna...">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Link_github:</strong>
                                                <input type="text" name="link_github" class="form-control" placeholder="www.github/mariola...">
                                            </div>
                                        </div>
                                        <div class="col-12 border-top my-3 ml-3"></div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 ">
                                            <a class="btn btn-primary pull-left" href="{{ route('project.index') }}">Back</a>
                                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </form>

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






