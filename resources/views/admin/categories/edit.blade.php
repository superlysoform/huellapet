@extends('layouts.app')

@section('registro')
<!-- Formulario html -->
   <div class="editCategory">
      <h4><strong>Editar Categoría</strong></h4>
         @if($errors->any())
      <div>
         <ul>
            @foreach ($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
            @endforeach
         </ul>
      </div>
         @endif
      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/categories/'.$categories->id.'/edit') }}">
         {{ csrf_field() }}
         <ul>
            <li>
             <select name="category_id">
                  <option value="0">General</option>
                  @foreach ($categoSelect as $datoCategoria )
                  <option value="{{ $datoCategoria->id }}">{{ $datoCategoria->name }}</option>
                  @endforeach
              </select>    
           </li>
           
           <li>
              <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $categories->name) }}" required autofocus/>
               @if ($errors->has('name'))
               <span class="invalid-feedback">
                 <strong>{{ $errors->first('name') }}</strong>
               </span>
               @endif      
           </li>
          
           <li>
               <textarea id="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }} category-description" name="description" rows="5" required />{{ old('description',$categories->description) }}</textarea>
               @if ($errors->has('description'))
               <span class="invalid-feedback">
                   <strong>{{ $errors->first('description') }}</strong>
               </span>
               @endif
            </li>
            <li>
               <input type="submit" name="registro" value="{{ __('Guardar') }}" >
            </li>
            <span><a href="{{ url('/admin/categories/') }}" >Cancelar</a></span>
         </ul>
      </form>
     
    </div>
@endsection
