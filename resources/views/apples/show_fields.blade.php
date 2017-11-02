<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $apple->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $apple->title !!}</p>
</div>

<!-- Msg Field -->
<div class="form-group">
    {!! Form::label('msg', 'Msg:') !!}
    <p>{!! $apple->msg !!}</p>
</div>

<!-- Help Field -->
<div class="form-group">
    {!! Form::label('help', 'Help:') !!}
    <p>{!! $apple->help !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $apple->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $apple->updated_at !!}</p>
</div>

