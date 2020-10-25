@php
    $logo_site = setting('site.logo');
@endphp

<a class="navbar-brand" href="#">
    <div class="logo-icon-container-nav"> 
        <img class="logo-container-nav" src="{{asset('/storage/'.$logo_site)}}"/> Webcamers Skype
    </div>
</a>

@foreach ($items as $menu_item)
    <a  class="nav-link text-center font-weight-bold
        @if($menu_item->url == 'modelos-vip') btn btn-outline-danger @else text-danger @endif" 
        href="{{ $menu_item->url }}">{{ $menu_item->title }}
    </a>
@endforeach
    
<form class="text-center form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
</form>

<a class="nav-link text-center font-weight-bold text-danger" href='/registrarse'> Iniciar Sesión / Registrarse
</a>