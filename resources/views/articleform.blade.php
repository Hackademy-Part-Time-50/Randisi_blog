<div>
        
<x-layout.layout>

    <div class="row mb-5">

        
        <div class="col-lg-6 mx-auto">
            <a href="{{route ('index')}}" class="mb-3 button-primary">Torna Indietrto</a>
            <x-success />
            <form action="{{ route('articleform.update'), $article}}" method="PUT" enctype="multipart/form-data">
                
                @csrf
                    <div class="row my-5">
                        <div class="col-12">

                            <label for="title" class="mb-2">Modifica il Titolo</label>
                            <input type="text" name="title" id="title" class="form-control mb-4  @error('title') is-invalid @enderror" value="{{ $old( 'title', $article->title ) }}">
                             @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="category" class="mb-2">Modifica la category</label>
                            <input type="text" name="category" id="category" class="form-control mb-4 @error('category') is-invalid @enderror" value="{{ old('category', $article->category) }}">
                            @error('category') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="description" class="mb-2">Modifica la descrizione</label>
                            <input type="text" name="description" id="description" class="form-control mb-4 @error('description') is-invalid @enderror" value="{{ old('description', $article->description) }}">
                            @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="image" class="mb-2">Modifica Immagine</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="body" class="mb-2">Modifica l'Articolo</label>
                            <textarea name="body" id="body" rows="10"value="{{ old('body', $article->body) }}" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 my-5">
                        <button type="submit" class="btn btn-primary">Invia Articolo Modificato</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</x-layout.layout>

</div>
