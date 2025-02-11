<div>
        
<x-layout.layout>

    <div class="row mb-5">

        
        <div class="col-lg-6 mx-auto">
            <a href="{{route ('index')}}" class="mb-3 button-primary">Torna Indietrto</a>
            <x-success />
            <form action="{{ route('articleform.store'), $article }}" method="POST" enctype="multiplart/form-data">
                
                @csrf
                @method('PUT')
                    <div class="row my-5">
                        <div class="col-12">

                            <label for="title" class="mb-2">Modifica il Titolo</label>
                            <input type="text" name="title" id="title" class="form-control mb-4  @error('title') is-invalid @enderror" value="{{ old('title') }}">
                             @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="category" class="mb-2">Imposta la category</label>
                            <input type="text" name="category" id="category" class="form-control mb-4 @error('category') is-invalid @enderror" value="{{ old('category') }}">
                            @error('category') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="description" class="mb-2">Una rapida descrizione</label>
                            <input type="text" name="description" id="description" class="form-control mb-4 @error('description') is-invalid @enderror" value="{{ old('description') }}">
                            @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="image" class="mb-2">Carica la tua Immagine</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="body" class="mb-2">Scrivi il tuo article</label>
                            <textarea name="body" id="body" rows="10"value="{{ old('body') }}" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 my-5">
                        <button type="submit" class="btn btn-primary">Modifica</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</x-layout.layout>

</div>
