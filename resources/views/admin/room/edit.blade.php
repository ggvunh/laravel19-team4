@extends('layouts.admin')
@section('content')
	<h1>Edit {{$room->name}}</h1>
	{!! Form::model($room,['url'=>'admin/room/'.$room->id,'files' => true,'enctype' => 'multipart/form-data','method'=>'put']) !!}
		@include('admin.forms.room')
	{!! Form::close() !!}
@stop