<x-layout.layout title="Generi Anime">

<div class="m-4">
<h1>Anime</h1>
<div class="mt-5m mx-4">
    <h3>Generi:</h3>
    <div class="mt-3">
        <ul>
        @foreach($response as $genre)
        <li>ID_My.Anime.List: {{$genre['mal_id']}} <br>
        Genre: <a href="{{ route ('anime.byGenre', $genre['mal_id'])}}"> {{$genre['name']}} </a><br>Count: ({{ $genre['count'] }})
        </li><br>    
        @endforeach
        </ul>    
    </div>
</div>
</div>
</x-layout.layout>