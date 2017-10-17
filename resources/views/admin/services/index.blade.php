@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Promotion List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="http://localhost:8000/admin/services/create"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="10">Name Serviec</th>
                        <th width="50%">Price</th>
                        <th width="10">Type</th>
                        <th width="20%">Function</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td class="table-text">
                                <div>{{$service->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$service->price}} $</div>
                            </td>
                            <td class="table-text">
                                <div>
                                    @if ($service->type == 0) Spa Service @else Food Service @endif
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.services.show', $service->id) }}" class="label label-success">show</a>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="label label-success">edit</a>
                                <a href="{{ route('admin.services.delete', $service->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop