@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    Edit A Promotion <a href="{{ route('admin.services.index') }}" class="label label-primary pull-right">Back</a>
</div>
{!! Form::model($service, ['url' => 'admin/services/' . $service->id, 'method' => 'put']) !!}
    @include('admin.forms.services')
  {!! Form::close() !!}
@stop