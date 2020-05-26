@extends('Store.template')


@section('content')

@include('Store.Parcial.slider')
    
            <div class="content">
              <div class="container">

                @foreach ($productos as $producto)

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $producto -> foto }}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{$producto -> nombre }}</h5>
                        <p>{{$producto -> slug }}</p><hr>
                        <p class="precio">${{number_format($producto->precio,2)}}</p>
                        
                      </div>
                      <div class="star">
                        <ul>
                          <li><i class="fa fa-star"></i> </li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="card-body">
                      <a class="btn btn-warning card-link" href="{{route('cart-add', $producto->slug)}}"> <i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
                        <a class="btn btn-primary card-link" href="{{ route('producto-detalles', $producto->slug)}}"> <i class="fa fa-search"></i> Ver mas</a>
                      </div>
                </div>
          
                @endforeach

              </div>
            </div>
  
@stop



