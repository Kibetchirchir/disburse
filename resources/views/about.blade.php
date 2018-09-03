@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <div class="col-md-3 col-lg-3">
        <h1>documentstype</h1>
        {{Form::open(['route' => ['adddocument']])}}
        <div class="form-group">
            {{Form::label('desc', 'desc')}}

            {{Form::text('description', '',["class" => "form-control", "placeholder" => "desc"])}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'type')}}

            {{Form::text('name', '',["class" => "form-control", "placeholder" => "type"])}}
        </div>
        <div class="bottom">
            {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
        </div>
    {!! Form::close() !!}
    </div>





    <div class="col-md-3 col-lg-3">
        <h1>contact type</h1>
        {{Form::open(['route' => ['addContact']])}}

        <div class="form-group">
            {{Form::label('name', 'contact type')}}

            {{Form::text('contact_type', '',["class" => "form-control", "placeholder" => "type"])}}
        </div>
        <div class="bottom">
            {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
        </div>
        {!! Form::close() !!}
    </div>

@endsection