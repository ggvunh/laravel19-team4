@extends('layouts.admin')
@section('content')
	<h1>Create Promotion</h1><br>
	{!! Form::open( ['url' => 'admin/promotion/index',] ) !!}
	    @include('hotels.promotions.forms.promotion')
	{!! Form::close() !!}
@stop

