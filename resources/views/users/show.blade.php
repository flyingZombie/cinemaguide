@extends('layouts.app')

@section('title', $user->name . ' profile')

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="media-body">
                        <hr>
                        <h4><strong>profile</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <hr>
                        <h4><strong>Registered on </strong></h4>
                        <p>January 01 1901</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                </span>
            </div>
        </div>
        <hr>

        {{-- Comment by user --}}
        <div class="panel panel-default">
            <div class="panel-body">
                user comment
            </div>
        </div>

    </div>
</div>
@stop
