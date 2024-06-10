{{-- @extends('layouts.app'); --}}

@section('content')
<h2>Film</h2>
 <ul>
    @foreach ($moviesList as $curMovie)
        <li> 
            <div>
                <img src="{{ $curMovie->image }}" alt="">   
            </div>
            <div>
                {{ $curMovie->title }} 
            </div>
            <div>
                Nazionalità:
                {{ $curMovie->nationality }}
            </div>
            <div>
                Data d'uscita:
                {{ $curMovie->date }}
            </div>
            <div>
                Voto Utenti:
                {{ $curMovie->vote }}
            </div>
        </li>
    @endforeach
 </ul>
@endsection

@yield('content')

