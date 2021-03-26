@extends('layout')
@section('content')
<div class="row">
   <div classcol-md-8 offset-sm-2>
      <h1 class="display-3">Atualizar Contato</h1>

      @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }} </li>
              @endforeach
          </ul>
      </div>
      <br />
      @endif
      <form method="post" action="{{ route('contatos.update', $contato->id) }}">
           @method('PATCH')
           @csrf

           <div class="form-group">
               <label for="nome">Nome: </label>
               <input type="text" class="form-control" name="nome" value="{{ $contato->nome }}" />
           </div>

           <div class="form-group">
               <label for="sobrenome">Sobrenome: </label>
               <input type="text" class="form-control" name="sobrenome" value="{{ $contato->sobrenome }} " />
           </div>

           <div class="form-group">
               <label for="email">Email: </label>
               <input type="text"  class="form-control" name="email" value="{{ $contato->email }}" />
           </div>

           <div class="form-group">
               <label for="cidade">Cidade: </label>
               <input type="text" class="form-control" name="cidade" value="{{ $contato->cidade }}" />
           </div>

           <div class="form-group">
               <label for="pais">País: </label>
               <input type="text" class="form-control" name="pais" value="{{ $contato->pais }}" />
           </div>

           <div class="form-group">
              <label for="funcao">Função: </label>
              <input type="text" class="form-control" name="funcao" value="{{ $contato->funcao }}"/>
           </div>
           <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
   </div>
</div>
@endsection
