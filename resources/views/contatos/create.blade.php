@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-8 offset-sm-2">
      <h1 class="display-3">Adicionar Contato</h1>
  </div>
    @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
       </div><br />
    @endif
        <form method="post" action="{{ route('contatos.store') }}">
           @csrf
           <div class="form-group">
               <label for="nome">Nome:</label>
               <input type="text" class="form-control" name="nome" />
           </div>

           <div class="form-group">
               <label for="sobrenome">Sobrenome: </label>
               <input type="text" class="form-control" name="sobrenome" />
           </div>

           <div class="for-group">
               <label for="email">Email: </label>
               <input type="text" class="form-control" name="email" />
           </div>

           <div class="form-group">
               <label for="cidade">Cidade: </label>
               <input type="text" class="form-control" name="cidade" />
           </div>

           <div class="form-group">
              <label for="pais">País: </label>
              <input type="text" class="form-control" name="pais" />
           </div>

           <div class="form-group">
              <label for="funcao">Função</label>
              <input type="text" class="form-control" name="funcao" />
           </div>
           <button type="submit" class="btn btn-primary-outline">Adicionar Contato</button>
        </form>
    </div>
</div>
</div>
@endsection
