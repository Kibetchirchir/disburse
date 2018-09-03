@extends('email.layout.Emailmaster')

@section('message_content')

    <p>Hi {{$first_name}}</p>
    <p>
        Thank you for registering for Disbursent. We're thrilled to have you on board.
    </p>

    <p>
        You can login and set up your account as we verify your documents once everything is ok we will notify you to start Disbursement.
    </p>

    <div style="padding: 5px; border: 1px solid #ccc;">
        {{url('/firsttime/'.$email_token)}}
    </div>
    <br><br>
    <p>
        If you have any questions, feedback or suggestions feel free to reply to this email.
    </p>
    <p>
        Thank you
    </p>

@stop

@section('footer')


@stop
