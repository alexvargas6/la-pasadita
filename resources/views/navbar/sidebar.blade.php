<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('addFood') }}">
                <span class="menu-title">Añadir nueva comida</span>

                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('verMod') }}">
                <span class="menu-title">Generar menú</span>
                <span class="menu-sub-title">( Menú de hoy )</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('upd') }}">
                <span class="menu-title">Modificar menú</span>
                <span class="menu-sub-title">( Actualizar )</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
    </ul>
    <!--<div class="sidebar-progress">
        <p>Total Sales</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 72%" aria-valuenow="72"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>50 Items sold</p>
    </div>-->
    <!--<div class="sidebar-progress">
        <p>Customer Target</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 90%" aria-valuenow="90"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>200 Items sold</p>
    </div>-->
    <div class="wrapper upgrade-button">
        <a href="#" target="_blank" class="btn btn-lg btn-block purchase-button">Botón</a>
    </div>
</nav>
