@extends('layouts.app')
@section('home')

    <div class="productos" id="productos">
        <h1>Listado de Productos</h1>
        <hr>
        <div class="todoslosproductos">
            <a href="{{ url('/admin/products/create') }}" class="btn btn-primary">Nuevo Producto</a>
            <table class="table tabla-categorias">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th class="text-right">Precio</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $datoProducto)
                     <tr>
                        <td class="text-center">{{ $datoProducto->id }}</td>
                        <td>{{ $datoProducto->name }}</td>
                        <td>{{ $datoProducto->description }}</td>
                        <td>{{ $datoProducto->category_name }}</td>
                        <td class="text-right">{{ $datoProducto->price }}</td>
                        <td class="td-actions text-right">
                    <form method="post" action="{{ url('/admin/products/'.$datoProducto->id.'/delete') }}">{{ csrf_field() }}
                        <a href="{{ url('products/'.$datoProducto->id)}}" type="button" rel="tooltip" title="ver Producto" class="btn btn-info btn-simple btn-xs" target="_bl">
                                <i class="fa fa-user"></i>
                        </a>
                           
                        <a href="{{ url('/admin/products/'.$datoProducto->id.'/edit') }}" type="button" rel="tooltip" title="editar Producto" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                        </a>

                        <a href="{{ url('/admin/products/'.$datoProducto->id.'/images') }}" type="button" rel="tooltip" title="Imagen Producto" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-image"></i>
                        </a>

                        <button type="submit" rel="tooltip" title="eliminar Producto" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                        </button>
                        
                        </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class ="filaNumeracion">
                <div class="numeracion">           
                   {{ $products->links() }}    
                </div>  
            </div>                   
        </div>
    </div>
          
@endsection