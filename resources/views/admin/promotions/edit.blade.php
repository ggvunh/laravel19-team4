@extends('layouts.admin')
@section('content')
<div class="panel-heading">
    Edit A Promotion <a href="{{ route('admin.promotion.index') }}" class="label label-primary pull-right">Back</a>
</div>
  {!! Form::model($promotion, ['url' => 'admin/promotion/' . $promotion->id, 'method' => 'put']) !!}
    @include('admin.forms.promotion')
  {!! Form::close() !!}
<!-- <div class="panel-body">
    <form action="{{ route('admin.promotion.update', $promotion->code_name) }}" method="POST" class="form-horizontal" autocomplete="off">
         @include('admin.forms.promotion')
    </form>
</div> -->
@stop