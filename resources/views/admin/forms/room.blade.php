<div class="form-group">
  {!! Form::label('name','Name of Room') !!} 
  <div class="form-controls {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::text('name',null,['class'=>'form-control']) !!}
  @if ( $errors->has('name') )
      <span class="text-warning">
          <strong> {{ $errors->first('name') }}</strong>
      </span>
    @endif
  </div>

  {!! Form::label('price','Price of Room') !!} 
  <div class="form-controls {{ $errors->has('price') ? 'has-error' : '' }}">
    {!! Form::text('price',null,['class'=>'form-control']) !!}
  @if ( $errors->has('price') )
      <span class="text-warning">
          <strong> {{ $errors->first('price') }}</strong>
      </span>
    @endif  
  </div>

  {!! Form::label('status','Status of Room') !!} 
  <div class="form-controls">
    {!! Form::radio('status', '1',['class'=>'form-control']) !!} Available <br>
    {!! Form::radio('status', '0',['class'=>'form-control']) !!} Not Available
  </div>

  {!! Form::label('description','Description') !!} 
  <div class="form-controls">
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
  </div>

  {!! Form::label('mount','People amount in Room') !!} 
  <div class="form-controls">
    {!! Form::select('mount', array(
      '2' => 'Room for 2 persons',
      '4' => 'Room for 4 persons',
      '6' => 'Room for 6 persons'
      ), $peoples, ['class' => 'form-control']) !!}
  </div>

  {!! Form::label('room_type_id','Room type') !!} 
  <div class="form-controls">
    {!! Form::select('room_type_id',$roomTypes,null,['class'=>'form-control']) !!}
  </div>

  {!! Form::label('image','Upload Image') !!}
  <div class="form-controls {{ $errors->has('room_price') ? 'has-error' : '' }}">
    {!! Form::file('image',['class'=>'form-control', 'id' => 'imageUpload']) !!}
  @if ( $errors->has('image') )
      <span class="text-warning">
          <strong> {{ $errors->first('image') }}</strong>
      </span>
    @endif
  </div>

  {!! Form::label('image_2','Upload Image 1') !!}
  <div class="form-controls">
    {!! Form::file('image_2',['class'=>'form-control']) !!}
  </div>

  {!! Form::label('image_3','Upload Image 2') !!}
  <div class="form-controls">
    {!! Form::file('image_3',['class'=>'form-control']) !!}
  </div>

</div>
{!! Form::submit('Save Room',['class'=>'btn btn-primary pull-left']) !!}