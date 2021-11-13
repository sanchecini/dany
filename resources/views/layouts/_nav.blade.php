<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('panel/images/faces/face16.jpg')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                    Nombre
                    </p>
                    <p class="designation">
                     Email
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="{{ route('clientes.index') }}">
                <i class="fas fa-cart-plus menu-icon"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('productos.index') }}">
                <i class="fas fa-shopping-cart menu-icon"></i>
                <span class="menu-title">Productos</span>
            </a>
        </li>
       
        
    </ul>
</nav>
