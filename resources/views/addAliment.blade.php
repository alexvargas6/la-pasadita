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
                <h4 class="card-title">Añade la comida de hoy</h4>
                <br>
                <form method="POST" enctype="multipart/form-data" action="{{ route('storeFood') }}">
                    <div class="mb-3">
                        <label for="name1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name1" v-model="nombreAlimento"
                            placeholder="Frijo con puerco, but negro, etc." name="comida">
                    </div>
                    <div class="mb-3">
                        <label for="precio1" class="form-label">Precio</label>
                        <input type="number" name="precio" class="form-control" id="precio1" v-model="precioAlimento"
                            placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="precio1" class="form-label">Precio media</label>
                        <input type="number" name="media" class="form-control" id="precio2" placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="Foto1" class="form-label">Foto</label>
                        <input id="Foto1" type="file" name="foto" accept="image/*" capture="camera" v-model="fotoAlimento"
                            placeholder="foto">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Añadir</button>
                </form>
            </div>
        </div>
    </div>
@endsection
