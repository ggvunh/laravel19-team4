@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Promotion</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.promotion.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Code Name:</strong>
            {{ $promotion->code_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Promotion:</strong>
            {{ $promotion->promotion }}<strong>%</strong>
        </div>
    </div>
</div>
@stop
