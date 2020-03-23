@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('radios.index') }}">Радиостанция</a>
            </li>
            <li class="breadcrumb-item active">Подробная информация</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Подробная информация</strong>
                                  <a href="{{ route('radios.index') }}" class="btn btn-light">Вернуться к списку</a>
                             </div>
                             <div class="card-body">
                                 @include('radios.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
