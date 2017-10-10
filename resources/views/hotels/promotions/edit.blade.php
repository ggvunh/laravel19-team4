@extends('layouts.admin')
@section('content')
 	<h1>Edit Promotion</h1><br>
  	{!! Form::model($promotion, ['url' => 'admin/promotion/' . $promotion->id, 'method' => 'put']) !!}
    @include('hotels.promotions.forms.promotion')
  {!! Form::close() !!}
@stop