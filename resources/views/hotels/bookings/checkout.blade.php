@extends('layouts.master')

@section('content')
<br><br>        <br><br><br>
<div class="container">
  <h1>Checkout</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($content as $row)
      <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->qty}}</td>
        <td>{{$row->price}}$</td>
        <td>{{$row->total}}$</td>
        <td><a href="/carts/{{$row->rowId}}/delete" class="btn btn-danger">Delete</a></td>
      </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td><b>Tong Hoa Don</b></td>
            <td><strong> ${{\Cart::total()}} </strong></td>
            <td></td>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
        	<td><button type="button" class="btn btn-success">Continue Booking</button> <a href="{!!url('/cart/checkout')!!}" class="btn btn-success">Check Out</a>
        	<td></td>
        	<td></td>
        </tr>
    </tfoot>
  </table>
</div>
<br><br><br><br><br>

@stop