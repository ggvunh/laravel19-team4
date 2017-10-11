@extends('layouts.master')

@section('content')
<style>#imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
  border-right:0; 
  box-shadow:0 0 0; 
  border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
} </style>
  <form method="get" id="searchform" action="{{('searchresult')}}">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                  <div id="imaginary_container"> 
                      <div class="input-group stylish-input-group">
                          <input type="text" class="form-control" value="" name="keyword" placeholder="Search">
                          <span class="input-group-addon">
                              <button type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>  
                          </span>
                      </div>
                  </div>
              </div>
        </div>
      </div>
  </form>  
  <br><br><br>
@stop