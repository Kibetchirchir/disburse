@extends('layout.dashboard')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        + ADD
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">add user</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url' => '/company/adduser' ,'files' => true]) !!}
                    <div class="form-group">
                        {{Form::label('name', 'name')}}

                        {{Form::text('Name', '',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Email', 'Managers Email')}}

                        {{Form::text('Email', '',["class" => "form-control", "placeholder" => "Manager Email"])}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
                </div>
            </div>
        </div>
    </div>


@endsection
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })

</script>
