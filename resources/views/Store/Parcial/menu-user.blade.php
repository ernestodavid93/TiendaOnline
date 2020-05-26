

@if(Auth::check())
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-user"></i>  <span class="caret"></span>
       </a>
    
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="">Finalizar sesionS</a>
       </div>
   </li>
 
@else
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-user"></i>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="">Iniciar sesion</a>
       </div>
   </li>
@endif