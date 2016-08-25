@extends('layouts.layout')

@section('title', 'Edit Player')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <table id="playersTable" class="display" cellspacing="0" width="90%">
                <thead>
                <tr>
                    <th>Edit Player</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Stamina</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Edit Player</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Stamina</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($players as $player)
                    <tr id="player{{$player->id}}">
                        <td>
                            <button type="button" class="btn btn-info">Edit Player</button>
                        </td>
                        <td>{{$player->name}}</td>
                        <td>{{$player->attack}}</td>
                        <td>{{$player->defense}}</td>
                        <td>{{$player->stamina}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="js/playersTable.js"></script>
@stop