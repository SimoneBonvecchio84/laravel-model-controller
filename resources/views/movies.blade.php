@extends('layouts.app')

@section('content')
<h1>Film</h1>
 <div class="container">
    <div class="row">
        <div class="col-4">
            @foreach ($moviesList as $curMovie)    
            <div class="card" style="width: 18rem;">
                <img src="{{ $curMovie->image }}" alt="">
                <div class="card-body">
                  <h5 class="card-title">
                    {{ $curMovie->title }} 
                  </h5>
                  
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Nazionalità:
                        {{ $curMovie->nationality }}
                  </li>
                  <li class="list-group-item">
                    Data d'uscita:
                        {{ $curMovie->date }}
                  </li>
                  <li class="list-group-item">
                    Voto Utenti:
                        {{ $curMovie->vote }}
                  </li>
                </ul>    
            </div>          
            @endforeach
        </div>
    </div>
 </div>
 
@endsection

