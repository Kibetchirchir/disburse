@extends('layout.app')

@section('content')
    <div class="row container">
        <div class="col-lg-4 col-lg-4">
    <h1>Company Registration</h1>
    {!! Form::open(['url' => '/company/register' ,'files' => true]) !!}

    <div class="form-group">
        {{Form::label('Companyname', 'Company name')}}

        {{Form::text('companyName', '',["class" => "form-control", "placeholder" => "company name"])}}
    </div>
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
        {{ Form::file('my_pdf') }}
    </div>
            <div class="container">
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

@endsection