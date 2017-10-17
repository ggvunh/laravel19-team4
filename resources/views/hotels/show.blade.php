@extends('layouts.master')

@section('content')
        @foreach($promotions as promtion)
        <div>
            <p>Code Name: {{$promotion->code_name}} <br>Promotion:{{$promotion->promotion}}</p>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>     
        <script src="js/bookingform/plugins.js"></script>
        <script src="js/bookingform/main.js"></script>

    <br>
@stop