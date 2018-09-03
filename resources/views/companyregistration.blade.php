@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    @include('inc.messages')

                    <div class="panel-body">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form contact-form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                {!! Form::open(['url' => '/company/register' ,'files' => true]) !!}

                                <div class="form-group">
                                    {{Form::label('Companyname', 'Company name')}}

                                    {{Form::text('companyName', '',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
                                </div>
                                @if ($errors->has('companyName'))
                                    <span class="alert-error">
                                        <strong>company name required</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    {{Form::label('ManagerEmail', 'Managers Email')}}

                                    {{Form::text('ManagerEmail', '',["class" => "form-control", "placeholder" => "Manager Email"])}}
                                </div>
                                @if ($errors->has('ManagerEmail'))
                                    <div id="errormessage">
                                        <strong class="alert-danger">Managers Email is  required</strong>
                                    </div>
                                @endif
                                <div class="form-group">
                                    {{Form::label('ManagerName', 'Managers Name')}}

                                    {{Form::text('ManagerName', '',["class" => "form-control", "placeholder" => "Manager Name"])}}
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="alert-danger">{{ $errors->first('ManagerName') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    {{Form::label('PhysicalAdress', 'Physical Address')}}

                                    {{Form::text('PhysicalAdress', '',["class" => "form-control", "placeholder" => "Marsabit plaza 6th floor"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('postalAdress', 'Postal Address')}}

                                    {{Form::text('postalAdress', '',["class" => "form-control", "placeholder" => "342 Nanyuki"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('GPS', 'GPS coordinates')}}

                                    {{Form::text('GPS', '',["class" => "form-control", "placeholder" => "40 'E 50'S"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('phone', 'phone')}}

                                    {{Form::text('phone', '',["class" => "form-control", "placeholder" => "254715428709"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('KRA', 'KRA pin')}}

                                    {{Form::text('KRA', '',["class" => "form-control", "placeholder" => "A12511A2D2541"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('category', 'category')}}

                                    {{Form::text('category', '',["class" => "form-control", "placeholder" => "NGO"])}}
                                    {{ Form::file('upload_file') }}
                                </div>
                                    <h3>contact person</h3>
                                    <div class="form-group">
                                        {{Form::label('ContactName', 'Contact name')}}

                                        {{Form::text('ContactName', '',["class" => "form-control", "placeholder" => "Kelvin Chirchir"])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('ContactEmail', 'Contact email')}}

                                        {{Form::text('ContactEmail', '',["class" => "form-control", "placeholder" => "info@nouveta.tech"])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('ContactPhone', 'Phone number')}}

                                        {{Form::text('ContactPhone', '',["class" => "form-control required", "placeholder" => "254715428709"])}}
                                    </div>
                                </div>
                                <div>
                                    {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                </div>

@endsection