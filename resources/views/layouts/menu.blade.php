<li class="nav-item {{ Request::is('personas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('personas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Personas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Usuarios</span>
    </a>
</li>
