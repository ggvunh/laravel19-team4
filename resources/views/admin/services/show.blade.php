@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Services</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.promotion.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name Services: </strong>
            {{ $service->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price: </strong>
            {{ $service->price }}<strong>USD</strong>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tylde:</strong>
            @if ($service->type == 0) Spa Service @else Food Service @endif
        </div>
    </div>
</div>
@stop
