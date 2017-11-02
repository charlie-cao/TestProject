<!-- Help Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::label('msg', 'msg:') !!}
    {!! Form::text('msg', null, ['class' => 'form-control']) !!}
    {!! Form::label('help', 'Help:') !!}
    {!! Form::textarea('help', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('apples.index') !!}" class="btn btn-default">Cancel</a>
</div>
