@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Booking List </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    	<th width="10">STT</th>
                        <th width="10">User Name</th>
                        <th width="50%">Check In</th>
                        <th width="20%">Check Out</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                        	<td class="table-text">
                                <div>{{$dem++}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$booking->user->username}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$booking->check_in_date}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$booking->check_out_date}}</div>
                            </td>
                            <td>
                                <a href="{{ route('admin.managerbooking.show', $booking->id) }}" class="label label-success">show</a>
                                
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