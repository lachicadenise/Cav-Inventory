@extends('layouts.default')

@section('title')
    Change Password
@stop

@section('view')
    <div><h2>Change Password</h2></div>
    <div>
        {{ Form::open(['route' => ['userProfile.update', Auth::user()->username], 'method' => 'PATCH', 'class' => 'pure-form pure-form-stacked cav-form-stacked-1']) }}
            
        {{ Form::password('old_password', ['placeholder' => 'Current Password']) }}
        {{ Form::password('new_password', ['placeholder' => 'New Password']) }}
        {{ Form::password('new_password_confirmation', ['placeholder' => 'Retype New Password']) }}
        
        {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
        or 
        <a class="pure-button" href="{{ action('UserProfileController@show', Auth::user()->username) }}">Cancel</a>
        
        {{ Form::close() }}
    </div>
@stop