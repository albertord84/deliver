@extends('layouts.app')

@section('titulo-pagina')
    <h1>Editar Entrega</h1>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal" method="post" action="{{ route('deliveryngs.update', $deliveryng->id) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}

              @include('deliveryngs.form')
            </form>

        <a href="{{ route('deliveryngs.index') }}">Volta para a lista de entregas</a>
      </div>
    </div>
@endsection