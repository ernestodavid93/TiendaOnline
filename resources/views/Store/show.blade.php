@extends('Store.template')

@section('content')

<div class="contendor-show">
    <div class="imagen">
        <h1>Detalle del Producto</h1>
        
        <img src="{{ $producto -> foto}}" width="500">
    </div>
    
        <div class="item contenido">
          
           
                <h3 class="titulo"> {{ $producto->nombre}}</h3><hr>
                <p class="slug">Modelo: {{$producto -> slug }}</p><hr>
                <div class="producto-info">
                    <p>Descripcion: {{ $producto->descripcion}}</p>
                    <p>Existencia: {{ $producto->existencia}}</p>
                    <p class="precio">${{ number_format($producto->precio,2)}}</p>
                    
                </div>
                <p>
                    <a class="btn btn-warning card-link" href="{{route('cart-add', $producto->slug)}}"> <i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
                </p>
            
        </div>
        <div class="boton-regresar">
                
            <p><a class="btn btn-primary" href="{{route('home')}}"> <i class="fa fa-undo"></i>  Regresar</a></p>
        </div>
</div>




@stop

