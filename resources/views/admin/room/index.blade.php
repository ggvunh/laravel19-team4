@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Room List </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box-header">
              <a href="{{ url('admin/room/create') }}" class="btn btn-primary fa fa-plus"> Create Room</a>  
              <form class="box-tools" action="{{asset('admins/search')}}" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="key_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="10%">STT</th>
                        <th width="10%">Name</th>
                        <th width="20%">Description</th>
                        <th width="20%">Price</th>
                        <th width="20%">Status</th>
                        <th width="10%">Room Type</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach($rooms as $index => $room)
                        <tr>
                            <td class="table-text">
                                <div>{{++$index}}</div>
                            </td>
                            <td class="table-text">
                                <a href="{{ url('admin/room/'.$room->id) }}">{!! $room->name !!}</a>
                            </td>
                            <td class="table-text">
                                <div>{{$room->description}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$room->price}} $</div>
                            </td>
                            <td class="table-text">
                                <div>{!!$room->status ? 'Available' : 'NOT Available'!!}</div>
                            </td>
                            <td class="table-text">
                                <div>@if ($room->room_types->id == 1) VIP @elseif($room->room_types->id == 2) Deluxe @else Family  @endif</div>
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