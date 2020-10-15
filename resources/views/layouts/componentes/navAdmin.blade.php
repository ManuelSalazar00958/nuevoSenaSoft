<div class="d-flex flex-column">
    <!--redes sociales-->
    <div class="profile">
      <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">{{ Auth::user()->name }}</a></h1>
    </div>
    <!--navegacion-->
    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>hogar</span></a></li>
        <li><a href="{{ route('usuario.listForAdmin') }}"><i class="bx bx-user"></i> <span>Usuarios</span></a></li>
        <li><a href="{{ route('sucursal.index') }}"><i class="bx bx-book-content"></i> Sucursales</a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Bodegas</a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Proveedores</a></li>
        <li>
            <div>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="icofont-exit"></i>
                    Cerrar Sesion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
      </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  </div>
