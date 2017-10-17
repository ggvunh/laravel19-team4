{{ csrf_field() }}
<div class="form-group">
  {!! Form::label('name', 'Name Service') !!}
  <div  class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('name'))
    <span class="text-warning">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('price', 'Price') !!}
  <div class="row">
    <div class="col-sm-8" class="form-controls">
      {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
    <div>
       $
    </div>
  </div>
  @if ($errors->has('price'))
      <span class="text-warning">
          <strong>{{ $errors->first('price') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('type', 'Type') !!}
  <div class="form-controls">
      {!! Form::select('type', array(
      '0' => 'Spa Services',
      '1' => 'Food Services'
      ), null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('name'))
    <span class="text-warning">
      <strong>{{ $errors->first('type') }}</strong>
    </span>
  @endif 
  </div>


{!! Form::submit('Save Service', ['class' => 'btn btn-primary']) !!}
