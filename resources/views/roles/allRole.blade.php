@extends('layouts.master')
@section('title', 'Amar Jobs | All Role')

@section('content')


    @if(count($roles))
        <table id="example2" class="table table-bordered table-hover" width="100%">

            <thead>
            <tr>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->role}}</td>
                    <td><a class="btn btn-info badge" href="{{route('editRole',$role->id)}}">Edit</a> | <a class="btn btn-danger badge" href="{{route('deleteRole',$role->id)}}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{$roles->links()}}

    @endif

@endsection