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
                            @foreach ($food as $comida)
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="{{ $comida->id }}"
                                            name="comida[]">
                                    </td>
                                    <td>{{ $comida->comida }}</td>
                                    <td>entera:{{ $comida->precio }} | media: {{ $comida->media }} </td>
                                    <td><img height="100" width="100" src="{{ $comida->foto }}"
                                            alt="{{ $comida->comida }}">
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-success mr-2">Generar menú</button>
                </form>

            </div>
        </div>
    </div>
@endsection
