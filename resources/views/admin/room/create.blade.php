@extends('layouts.admin')
@section('header')
	<h1>Create Room</h1>
@stop
@section('content')

	{!! Form::open(['url'=>'admins','files' => true,'enctype' => 'multipart/form-data']) !!}
		@include('admin.forms.room')
	{!! Form::close() !!}
@stop