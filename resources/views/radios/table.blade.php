<div class="table-responsive-sm">
    <table class="table table-striped" id="radios-table">
        <thead>
            <tr>
                <th>Название</th>
        <th>Логотип</th>
        <th>Описание</th>
        <th>Поток</th>
        <th>Категория</th>
        <th>Страна</th>
                <th colspan="3">Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($radios as $radio)
            <tr>
                <td>{{ $radio->title }}</td>
            <td><img src="{{ $radio->image }}" alt="{{ $radio->title }}"> </td>
            <td>{{ $radio->description }}</td>
            <td>{{ $radio->link }}</td>
            <td>{{ $radio->categories->title }}</td>
            <td>{{ $radio->countries->title }}</td>
                <td>
                    {!! Form::open(['route' => ['radios.destroy', $radio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('radios.show', [$radio->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('radios.edit', [$radio->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>