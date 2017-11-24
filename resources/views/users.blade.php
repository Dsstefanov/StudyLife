@extends('layouts.admin')
@section('content')
<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col s8 offset-s2 col m8 offset-m2 col l8 offset-l2">
        <table class="responsive-table bordered highlight centered">
            <tr>
                <td><b>Name</b></td>
                <td><b>Email</b></td>
                <td><b>Admin</b></td>
                <td><b>Edit</b></td>
                <td><b>Delete</b></td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{($user->admin)? "The user is admin" : "The user is not admin"}}</td>
                <td><a href="#modal{{$user->id}}"  class="waves-effect waves-light btn" onclick="openModal({{$user}})"><i class="material-icons right">edit</i>edit</a></td>
                <td>
                    @if(Auth::user()->id !== $user->id)
                    <form action="{{route('users.delete', $user->id)}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{csrf_field()}}
                        <input type="submit" class="waves-effect waves-light btn" value="Delete">
                    </form>
                    @endif
                </td>
            </tr>

                <div id="modal{{$user->id}}" class="modal">
                    <div class="modal-content center">

                        <form action="{{route('users.update', $user->id)}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="patch">
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <input value="{{$user->name}}" id="name" name="name" type="text" class="validate">
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <input placeholder="New password" id="password" name="password" type="password" class="validate">
                                    <label for="password">Change user password</label>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <input value="{{$user->email}}" id="email" name="email" type="text" class="validate">
                                    <label for="email" >Email</label>
                                </div>
                                <div class="input-field col s4 m4 l4 offset-l4 offset-m4 offset-s4 waves-effect waves-light btn">
                                    <input value="Save changes"  type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </table>
    </div>
</div>
@endsection