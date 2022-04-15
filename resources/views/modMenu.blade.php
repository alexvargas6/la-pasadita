@extends('navbar.all')
@section('cont')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Menú de hoy</h4>
            <p class="card-description">
                Captura las <code>comidas de hoy</code>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Precio
                        </th>
                        <th>
                            Foto
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>
                            @{{nombreAlimento}}
                        </td>
                        <td>
                            @{{precioAlimento}}
                        </td>
                        <td>
                            @{{fotoAlimento}}
                        </td>

                    </tr>
                </tbody>
            </table>

            <!--Añadimos nuestro componente vuejs-->
            <div class="mb-3">
                <label for="name1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name1" v-model="nombreAlimento" placeholder="Frijo con puerco, but negro, etc.">
            </div>
            <div class="mb-3">
                <label for="precio1" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio1" v-model="precioAlimento" placeholder="$0.00">
            </div>
            <div class="mb-3">
                <label for="Foto1" class="form-label">Foto</label>
                <input id="Foto1" type="file" accept="image/*" capture="camera" v-model="fotoAlimento" placeholder="foto">
            </div>
            <input type="button" value="Añadir" @click="add">
        </div>
    </div>
</div>

@endsection
