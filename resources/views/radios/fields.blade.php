<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Название:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Логотип:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Описание:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Поток:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<div class="row"><!-- Categories Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categories_id', 'Категория:') !!}

    {!! Form::select('categories_id', $categories,null, ['class' => 'form-control']) !!}
</div>

<!-- Countries Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('countries_id', 'Страна:') !!}
    {!! Form::select('countries_id', $countries, null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('radios.index') }}" class="btn btn-secondary">Отменить</a>
</div>
