@extends('frontend.admin.admin_dashboard')



@php

$user = DB::table('regular_users')->get();

$admin = DB::table('admins')->get() ; 


@endphp



@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-12 text-center">
            <h3>user list</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 text-center" style="font-weight: bold;">
            user name
        </div>
        <div class="col-md-3 text-center" style="font-weight: bold;">
            status
        </div>
        <div class="col-md-3 text-center" style="font-weight: bold;">
            refered id
        </div>
        <div class="col-md-3 text-center">
            <!-- <span>edit</span>
            <span>delete</span> -->
        </div>
    </div>

    @foreach($user as $row) 

    <div class="row my-2">
        <div class="col-md-3 text-center text-bold" style="background:#ddd">
        <a href="{{route('user_info',$row->id)}}">{{$row->username}}</a>
        </div>
        <div class="col-md-3 text-center text-bold" style="background:#ddd">
            
        </div>
        <div class="col-md-3 text-center text-bold" style="background:#ddd">
          
        </div>
        <div class="col-md-3 text-center text-bold" style="background:#ddd">
            <span>edit</span>
            <span>delete</span>
        </div>
    </div>
    @endforeach



</div>

@stop