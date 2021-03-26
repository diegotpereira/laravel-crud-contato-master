@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contatos</h1>
    <table class="table table-striped">
     <thead>
       <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Email</td>
          <td>Função</td>
          <td>Cidade</td>
          <td>País</td>
          <td colspan="2">Ação</td>
       </tr>
     </thead>
     <tbody>
        @foreach($contatos as $contato)
        <tr>
           <td>{{ $contato->id }}</td>
           <td>{{ $contato->nome }}</td>
           <td>{{ $contato->email }}</td>
           <td>{{ $contato->funcao }}</td>
           <td>{{ $contato->cidade }}</td>
           <td>{{ $contato->pais }}</td>
           <td>
               <a href="{{ route('contatos.edit', $contato->id)}}" class="btn btn-primary">Editar</a>
           </td>
           <td>
              <form action="{{ route('contatos.destroy', $contato->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Deletar</button>
              </form>
           </td>
        </tr>
        @endforeach
     </tbody>
    </table>
</div>
</div>
@endsection
