<div>
        
<x-layout>

    <div class="row">

        <x-success />
        
        <div class="col-lg-6 mx-auto">
            <form action="{{ route('article.store') }}" method="post">

                @csrf
                    <div class="row">
                        <div class="col-12">

                            <label for="title" class="mb-2">Dai un titolo</label>
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
                            <textarea name="body" id="body" rows="50"value="{{ old('body') }}" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
            </form>
        </div>
    </div>

</x-layout>

</div>
