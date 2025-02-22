<x-layout.layout title="Genere con Id # {{$genre}}">
    <h1>Genere con id #{{ $genre }}</h1>
    <div class="m-4">
        <div class="row">
        @foreach ($anime as $single_anime)
        <div class="col-lg-3">
            
                <div class="card mb-2">
                    <div class="card-header">
                    <span>{{ $single_anime["type"]}}</span><br>    

                    <h5>{{ $single_anime["title"]}}</h5>
                    </div>

                    <div class="card-body">
                        <img class="img-fluid " 
                        src="{{$single_anime['image']}}" alt="Locandina Anime">
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-primary" href="{{route ('anime.show', $single_anime['id'])}}">Approfondisci</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</x-layout.layout>