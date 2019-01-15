@extends('layouts.app')

@section('titulo-pagina')
    <h1>Nova entrega</h1>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal" method="post" action="{{ route('deliveryngs.store') }}">
              {{ csrf_field() }}

              @include('deliveryngs.form')
            </form>

        <a href="{{ route('deliveryngs.index') }}">Volta para a lista de entregas</a>
      </div>
    </div>
@endsection
