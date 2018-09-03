@extends('layout.app')
@section('content')
    <div class=”container”>
        <div class=”row”>
            <div class=”col-md-8 col-md-offset-2">
            <div class=”panel panel-default”>
                <div class=”panel-heading”>Registration Confirmed</div>
                <div class=”panel-body”>
                    Your Email is successfully verified. Click here to <a href=”{{url('/login')}}”>login</a>
                    NB your account is dormant until it is verified
                    You'll receive an email once its verified
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection