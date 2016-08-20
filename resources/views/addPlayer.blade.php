@extends('layouts.layout')

@section('title', 'Add Player')

@section('content')
    <div id="addPlayer">
        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '',[
                    'class' => "form-control",
                    'v-model' => "playerName"
               ])
            !!}
            {!! Form::label('attack', 'Attack:') !!}
            {!! Form::selectRange('attack', 1,5,1, [
                'class' => "form-control"
            ])
             !!}
            {!! Form::label('defense', 'Defense:') !!}
            {!! Form::selectRange('defense',1,5,1, [
                'class' => "form-control"
            ])
             !!}
            {!! Form::label('stamina', 'Stamina:') !!}
            {!! Form::selectRange('stamina',1,5,1, [
                'class' => "form-control"
            ])
             !!}
            {!! Form::submit('Add Player',[
                 'v-show' => "playerName",
                  'class' => "btn btn-primary",
                  'style' => "margin: 10px"
              ])
             !!}
        </div>
        {!! Form::close() !!}
    </div>

    @if (session()->has('name'))
        <script src="js/sweetalert.min.js"></script>
        <script>
            swal({
                title: "{{session()->get('name')}}",
                text:"was added to players",
                type: "success",
                timer: 1500,
                showConfirmButton: false });
        </script>
        {{session()->forget('name')}}
    @elseif ($errors->any())
        <script src="js/sweetalert.min.js"></script>
        <script>
            var errorMSg = "";
            @foreach($errors->all() as $error)
                errorMSg += "{{$error}}\n";
            @endforeach
            swal({   title: "{{session()->get('name')}} could not be added",
                text: errorMSg
                ,
                type: "error" })
        </script>
    @endif

@stop
@section('js')
    <script src="js/addPlayer.js"></script>
@stop