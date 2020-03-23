<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Название:') !!}
    <p>{{ $radio->title }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Логотип:') !!}
    <p>{{ $radio->image }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $radio->description }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Поток:') !!}
    <p>{{ $radio->link }}</p>
</div>

<!-- Categories Id Field -->
<div class="form-group">
    {!! Form::label('categories_id', 'Категория:') !!}
    <p>{{ $radio->categories_id }}</p>
</div>

<!-- Countries Id Field -->
<div class="form-group">
    {!! Form::label('countries_id', 'Страна:') !!}
    <p>{{ $radio->countries_id }}</p>
</div>

