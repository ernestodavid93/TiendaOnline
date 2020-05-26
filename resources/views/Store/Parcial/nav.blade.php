

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="logo">
    <a href="{{ route('home')}}"> <img src="https://www.inkfrog.com/lib/images/shopping_1.png" alt="" width="90px"></a>
    </div>
    <button class="navbar-toggler barras" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon barras"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hot sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Departamentos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Damas</a>
            <a class="dropdown-item" href="#">Caballeros</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="menu-bar">
           
        @include('Store.Parcial.menu-user') 

        <li><a class="nav-link" href="{{ route('cart-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
    </div>

        
    
  </nav>