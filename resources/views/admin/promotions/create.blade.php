@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Promotion <a href="{{ route('admin.promotion.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.promotion') }}" method="POST" class="form-horizontal" autocomplete="off">
                    @include('admin.forms.promotion')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
