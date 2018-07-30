@extends('layouts.app')
             
@section('home')
            
    <div class="productos" id="productos">
        <h1>Listado de Categorías</h1>
            <hr>
        <div class="todoslosproductos">
            <a href="{{ url('/admin/categories/create') }}" class="btn btn-primary">Nueva Categoría</a>
            <table class="table tabla-categorias">
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                    @foreach ($categories as $datoCategoria)

                    <tr>
                        <td class="text-center">{{ $datoCategoria->id }}</td>
                        <td>{{ $datoCategoria->name }}</td>
                        <td>{{ $datoCategoria->description }}</td>
                        <td class="td-actions text-right">
                            <form method="post" action="{{ url('/admin/categories/'.$datoCategoria->id ) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                
                                <a href="" type="button" rel="tooltip" title="ver Categoría">
                                    <i class="fa fa-user"></i>
                                </a>
                                <a href="{{ url('/admin/categories/'.$datoCategoria->id.'/edit') }}" type="button" rel="tooltip" title="editar Categoría" >
                                    <i class="fa fa-edit"></i>
                                </a>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <div>           
                {{ $categories->links() }}    
            </div>                     
        </div>
    </div>
          
@endsection