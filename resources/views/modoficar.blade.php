@extends('navbar.all')
@section('cont')
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (\Session::has('ERROR'))
                    <div class="alert alert-warning">
                        <ul>
                            <li>{!! \Session::get('ERROR') !!}</li>
                        </ul>
                    </div>
                @endif
                <h2 class="card-title">Modifique el menú desde aquí</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                COMIDA
                            </th>
                            <th>
                                Acción
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($food as $comida)
                            <tr>
                                <td>
                                    {{ $comida->comida }}
                                </td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-{{ $comida->id }}">
                                        MODIFICAR
                                    </button></td>
                            </tr>
                            @include('modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
