@extends('layout.app')
@section('content')
    <div class="container">
        <div class="col-md-3 col-lg-3">
            {{Form::open(['route' => ['shareHolder', $id]])}}
            <div class="form-group">
                {{Form::label('IdNo', 'Share holder IDNO/Passport')}}

                {{Form::text('IdNo', '',["class" => "form-control", "placeholder" => "33865745"])}}
            </div>
            <div class="form-group">
                {{Form::label('name', 'Share holder name')}}

                {{Form::text('Name', '',["class" => "form-control", "placeholder" => "Kelvin Chirchir"])}}
            </div>
            <div class="form-group">
                {{Form::label('KRA', 'KRA pin number')}}

                {{Form::text('KRA', '',["class" => "form-control", "placeholder" => "AB21451CD12"])}}
            </div>
            <div class="bottom">
                {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
