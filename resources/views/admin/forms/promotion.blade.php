{{ csrf_field() }}
<div class="form-group">
  {!! Form::label('code_name', 'Code Name') !!}
  <div class="form-controls">
    {!! Form::text('code_name', null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('code_name'))
    <span class="text-warning">
      <strong>{{ $errors->first('code_name') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('promotion', 'Promotion') !!}
  <div class="form-controls">
    {!! Form::text('promotion', null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('promotion'))
    <span class="text-warning">
      <strong>{{ $errors->first('promotion') }}</strong>
    </span>
  @endif
</div>

{!! Form::submit('Save Promotion', ['class' => 'btn btn-primary']) !!}