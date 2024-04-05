@extends('base')

@section('content')
    <h1>Bonjour et bienvenue !</h1>
        <article>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                  <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->prenom}}</td>
                    <td>{{$article->nom}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table> 
        </article>
@endsection