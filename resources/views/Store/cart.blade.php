@extends('Store.template')

@section('content')



<div class="conta tex-center">
        <div class="page-header text-center">
            <h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
        </div>
        <div class="table-cart">
            @if(count($cart))
            <p>
            <a href="{{ route('cart-trash')}}" class="btn btn-danger">
                    Vaciar carrito <i class="fa fa-trash"></i>
                </a>
            </p>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $item)
                    <tr>
                    <td><img src="{{ $item->foto }}" width="50px"></td>
                    <td>{{$item->nombre}}</td>
                    <td>{{number_format($item->precio,2)}}</td>
                    <td>
                        <input
                        type="number" 
                        min="1"
                        max="{{$item->maximo}}"
                        value="{{$item->cantidad}}"
                        id="producto_{{$item->id}}"
                        
                        >
                        <a 
                        href="#"
                        class="btn btn-warning btn-update-item"
                         data-href="{{route('cart-update', $item->slug)}}"
                         data-id="{{$item->id}}"
                        
                        >

                        <i class="fa fa-refresh"></i>

                        </a>

                    </td>
                    <td>${{number_format($subtotal,2)}}</td>
                        <td>
                            <a href="{{route('cart-delete', $item->slug)}} " class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                                </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
                <h3>
                    <span class="badge badge-success">
                       Total = ${{number_format($total,2)}} 

                    </span>
                </h3>
                
            </div>
            @else
            <h3><span class="label label-default">No hay productos en el carrito</span></h3>
            @endif
            <hr>
            <div class="boton-regresar">
                
                <p><a class="btn btn-primary" href="{{route('home')}}"> <i class="fa fa-undo"></i>  Seguir comprando</a></p>
                <div class="continuar">
                    <p><a class="btn btn-warning" href="#"> <i class="fa fa-forward"></i>  Comprar</a></p>
                </div>
            </div>
            
                  
            
    </div>
</div>









@stop