@extends('layouts.master')

@section('content')
<br><br><br><br><br>
<div class="container">
  	<h1>Your booking payment:</h1>
  	<br><br>
  	<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <form method="post" action="{!!url('/cart/checkout')!!}">
  	<input type="hidden" name="_token" value="{{csrf_token()}}">
    @foreach ($content as $row)
      <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->qty}}</td>
        <td>{{$row->price}}$</td>
        <td>{{number_format($row->total)}}$</td>
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
        	<td><button type="submit">Payment</button></td>
        	<td></td>
        	<td></td>
        </tr>
        </form>
    </tfoot>
  </table>   	
</div>
<br><br><br><br><br>
@stop