@extends('layouts.master')
@section('title', 'Amar Jobs | All Permission')

@section('content')
    <a class="btn btn-success badge" href="{{route('addAction')}}">Add New Permission</a>
    <form action="{!! route('permissions.add') !!}" method="post">
        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
        <table id="example2" class="table table-bordered table-hover" width="100%">
            <thead>
            <tr>
                <th># Method</th>
                <th>URI</th>
                <th>Action</th>
                @foreach($roles as $roleKey=>$roleVal)
                    <th>{{$roleVal}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            <?php
                $routeList='';
            ?>
            @foreach($actions as $action)
                <tr>
                    <td>{{$action->method}}</td>
                    <td>{{$action->uri}}</td>
                    <td>{{$action->action}}</td>
                    <?php reset($roles) ?>
                    @while(list($roleKey,$roleVal)=each($roles))
                        <td><input type="checkbox" {!! $activeList[$action->id.$roleKey] !!} name="role{!! $action->id !!}{!! $roleKey !!}" class="flat-red"></td>
                    @endwhile
                </tr>
                <?php
                    $routeList.=$action->id.',';
                ?>
            @endforeach
            <input type="hidden" value="{!! $routeList !!}" name="routeList">
            </tbody>
        </table>
        <button class="btn btn-primary pull-right">Permission</button>
    </form>


{{$actions->links()}}


@endsection