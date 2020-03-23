@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('radios.index') !!}">Радиостанция</a>
      </li>
      <li class="breadcrumb-item active">Создать</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Добавить Радиостанцию </strong>
                            </div>
                            <div class="card-body text-white bg-dark">
                                {!! Form::open(['route' => 'radios.store']) !!}

                                   @include('radios.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
