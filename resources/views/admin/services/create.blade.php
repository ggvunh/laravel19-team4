@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Service <a href="{{ route('admin.services.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.service') }}" method="POST" class="form-horizontal" autocomplete="off">
                @include('admin.forms.services')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
