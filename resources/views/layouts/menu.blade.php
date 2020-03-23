<li class="nav-item {{ Request::is('radios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('radios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Радиостанции</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Категории</span>
    </a>
</li>
<li class="nav-item {{ Request::is('countries*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('countries.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Страны</span>
    </a>
</li>
