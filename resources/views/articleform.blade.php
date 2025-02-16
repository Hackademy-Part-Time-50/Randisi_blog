<div>
        
<x-layout.layout>

    <div class="row mb-5">

        <h1>FORM DI CREAZIONE NUOVO ARTICOLO</h1>
        <div class="col-lg-6 mx-auto">
            <a href="{{route ('index')}}" class="mb-3 button-primary">Torna Indietrto</a>
            <x-success />
            <form action="{{ route('articleform.store') }}" method="post" enctype="multipart/form-data">
                
                @csrf
                    <div class="row my-5">
                        <div class="col-12">

                            <label for="title" class="mb-2">Dai Un Titolo</label>
                            <input type="text" name="title" id="title" class="form-control mb-4  @error('title') is-invalid @enderror" value="{{ old( 'title') }}">
                             @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                        @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]" id="category_{{ $category->id }}" @checked(in_array($category->id, old( "categories", [] )))>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $category->name }}
                                    </label>
                                </div>
                                @endforeach
                        </div>

                        <div class="col-12">
                            <label for="description" class="mb-2">Aggiungi Descrizione</label>
                            <input type="text" name="description" id="description" class="form-control mb-4 @error('description') is-invalid @enderror" value="{{ old('description') }}">
                            @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label for="image" class="mb-2">Allega Immagine</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="body" class="mb-2">Dai un Testo l'Articolo</label>
                            <textarea name="body" id="body" rows="10"value="{{ old('body') }}" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 my-5">
                        <button type="submit" class="btn btn-primary">Invia Nuovo Articolo</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</x-layout.layout>

</div>
