@extends('navbar.all')
@section('js')
    <script language="javascript">
        function agregarFila() {
            var alimento = document.getElementById('name1').value;
            var Precio = document.getElementById('precio1').value;
            var Foto = document.getElementById('Foto1').value;
            var html = "";
            html +=
                `<td><INPUT type="checkbox" NAME="chk" /></td><td>${alimento} <input type="hidden" name="alimento" value=${alimento}> </td><td>${Precio} <input type="hidden" name="precio" value=${Precio}> </td><td>${Foto} <input type="hidden" name="Foto" value=${Foto}> </td>`;

            document.getElementById("dataTable").insertRow(-1).innerHTML = html;

            document.getElementById("name1").value = "";
            document.getElementById("precio1").value = "";
            document.getElementById("Foto1").value = "";
        }

        function deleteRow(tableID) {

            try {

                var table = document.getElementById(tableID);

                var rowCount = table.rows.length;



                for (var i = 0; i < rowCount; i++) {

                    var row = table.rows[i];

                    var chkbox = row.cells[0].childNodes[0];

                    if (null != chkbox && true == chkbox.checked) {

                        table.deleteRow(i);

                        rowCount--;

                        i--;

                    }

                }

            } catch (e) {

                alert(e);

            }

        }
    </script>
@endsection
@section('cont')
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Menú de hoy</h4>
                <p class="card-description">
                    Captura las <code>comidas de hoy</code>
                </p>
                <form method="POST" action="{{ route('generarMenu') }}">
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>

                                <th>
                                    X
                                </th>
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

                        </tbody>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-success mr-2">Generar menú</button>
                </form>
                <!--Añadimos nuestro componente vuejs-->
                <div class="mb-3">
                    <label for="name1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name1" v-model="nombreAlimento"
                        placeholder="Frijo con puerco, but negro, etc." name="aliment">
                </div>
                <div class="mb-3">
                    <label for="precio1" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio1" v-model="precioAlimento" placeholder="$0.00">
                </div>
                <div class="mb-3">
                    <label for="Foto1" class="form-label">Foto</label>
                    <input id="Foto1" type="file" accept="image/*" capture="camera" v-model="fotoAlimento"
                        placeholder="foto">
                </div>
                <INPUT type="button" value="Añadir" onclick="agregarFila();" />
                <INPUT type="button" value="Eliminar comida" onclick="deleteRow('dataTable');" />
            </div>
        </div>
    </div>
@endsection
