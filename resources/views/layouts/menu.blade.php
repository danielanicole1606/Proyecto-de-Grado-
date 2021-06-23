<script crossorigin="anonymous" src="https://kit.fontawesome.com/83385095c8.js"></script>

        @if(Auth::user()->per_tipo=='A')
       
<li class="nav-item {{ Request::is('empresas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empresas.index') }}">
        <i class="fas fa-briefcase"></i>
        <span>Empresa</span>
    </a>
</li>

<li class="nav-item {{ Request::is('trailers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('trailers.index') }}">
      <i class="fas fa-trailer"></i>
        <span>Tráileres</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tiposProductos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tiposProductos.index') }}">
        <i class="fas fa-tags"></i>
        <span>Tipos Producto</span>
    </a>
</li>

<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="fas fa-dolly-flatbed"></i>
        <span>Productos</span>
    </a>
</li>

<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="fas fa-user-tag"></i>
        <span>Clientes</span>
    </a>
</li>

<li class="nav-item {{ Request::is('guiasTransportes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('guiasTransportes.index') }}">
      <i class="fas fa-paste"></i>
        <span>Guías Transporte</span>
    </a>
</li>
<li class="nav-item {{ Request::is('facturas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('facturas.index') }}">
       <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturas</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('personas.index') }}">
       <i class="fas fa-file-invoice-dollar"></i>
        <span>Personas</span>
    </a>
</li>
@endif

@if(Auth::user()->per_tipo=='E')
<li class="nav-item {{ Request::is('trailers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('trailers.index') }}">
      <i class="fas fa-trailer"></i>
        <span>Tráileres</span>
    </a>
</li>
   <li class="nav-item {{ Request::is('tiposProductos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tiposProductos.index') }}">
        <i class="fas fa-tags"></i>
        <span>Tipos Producto</span>
    </a>
</li>

<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="fas fa-dolly-flatbed"></i>
        <span>Productos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="fas fa-user-tag"></i>
        <span>Clientes</span>
    </a>
</li>
 <li class="nav-item {{ Request::is('guiasTransportes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('guiasTransportes.index') }}">
      <i class="fas fa-paste"></i>
        <span>Guías Transporte</span>
    </a>
</li>
<li class="nav-item {{ Request::is('facturas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('facturas.index') }}">
       <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturas</span>
    </a>
</li>    
@endif