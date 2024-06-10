@extends('layouts.app')

@section('content')
<h1 class="text-center py-5">Film</h1>
 <div class="container">
    <div class="row">
        @foreach ($moviesList as $curMovie)    
            <div class="col py-4">
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

                            @for($i=0; $i<5; $i++)
                             @if (floor($curMovie->vote / 2)>$i)
                             <i class='fa-solid fa-star text-gold'></i> 
                             @else
                             <i class='fa-regular fa-star text-gold'></i> 
                             @endif
                            @endfor
                      </li>
                    </ul>    
                </div>          
            
            </div>
        @endforeach
    </div>
</div>
            
@endsection

