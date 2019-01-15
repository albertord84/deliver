@extends('layouts.app')

@section('titulo-pagina')
    <h1>Lista de Entregas</h1>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:5%">Id</th>
              <th style="width:10%">Cliente</th>
              <th style="width:5%">Data</th>
              <th style="width:35%">Origem</th>
              <th style="width:35%">Destino</th>
              <th style="width:5%">Rota</th>
              <th style="width:5%">Ações</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($deliveryngs as $deliveryng)
              <tr>
                <td style="width:5%">{{ $deliveryng->id }}</td>
                <td style="width:15%">{{ $deliveryng->client }}</td>
                <td style="width:10%">{{ $deliveryng->deliverydate }}</td>
                <td style="width:30%">{{ $deliveryng->source }}</td>
                <td style="width:30%">{{ $deliveryng->destiny }}</td>
                <td style="width:5%">
                  <a href="{{ route('deliveryngs.show', $deliveryng->id) }}">Ver</a>
                </td>
                <td style="width:5%">

                  <a href="{{ route('deliveryngs.edit', $deliveryng->id) }}">Editar</a>
                </td>
              </tr>
            @empty
              <tr><td>Nenhuma entrega cadastrada</td></tr>
            @endforelse
          </tbody>
        </table>

        <a href="{{ route('deliveryngs.create') }}">Criar Entrega</a>
      </div>
    </div>
@endsection
