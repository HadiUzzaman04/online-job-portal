@extends('website.master')

@section('contents')
<br>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/static/core/img/favicon.png" type="image/gif/png" sizes="16x16">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .row a button:hover {
            border: none;
        }
    </style>

</head>

<body>


    <hr>
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">User Profile</a></li>
                    <li class="active"><a data-toggle="tab" href="#status">Status</a></li>
                    <li>
                        @if(session()->has('message'))
                        <p class="alert alert-success">{{session()->get('message')}}</p>
                        @endif
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>

                        <form class="form" action="{{ route('user.update.profile',auth()->user()->id) }}" method="post" id="registrationForm">
                            @csrf
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Name</h4>
                                    </label>
                                    <input value="{{auth()->user()->name}}" type="text" class="form-control" name="name" id="Name" placeholder="Name" title="enter your name if any." >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Email</h4>
                                    </label>
                                    <input value="{{auth()->user()->email}}" type="email" class="form-control" name="email" id="email" placeholder="Email" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input value="{{auth()->user()->phone}}" type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update
                                    </button>

                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>
                    <div class="tab-pane" id="status">
                        <ul>
                            <li class="nav-item"><a href="#" class="nav-link" style="margin-left:110px;margin-top:20px;">{{auth()->user()->status}}</a></li>
                        </ul>
                    </div>

                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->


    <!-- <a href="" style="text-decoration: none; text-align: center;"
   title="Green Agro"><h3>Login to the site first</h3></a> -->




</body>

</html>






@endsection