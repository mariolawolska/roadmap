<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>

        @include('layout.head_login')

    </head>
    <body style="background: #BC9B78">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">

                                    <div class="mb-4 col-md-8" style="background: #BC9B78; padding: 15px;">
                                        <h4 class="login-heading mb-4">Welcome {{ ucfirst(Auth()->user()->name) }}.</h4>

                                        <div class="col-lg-12 margin-tb">
                                            <div class="pull-right">
                                                <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold" href="{{ route('project.index') }}"> Add/Edit/Delete Project</a>
                                            </div>
                                        </div>


                                        <div class="row pt-5">
                                            <div class="col-md-4">
                                                <a  href="{{url('logout')}}">Logout</a>
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
    </body>
</html>