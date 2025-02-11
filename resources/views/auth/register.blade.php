<x-layout.layout title="Registati">

    <div class="row">

        <div class="col-lg-6 mx-auto my-5">
            <h1>Registrati</h1>
            <p class="lead text-secondary">FORM DI PROVA REGISTRAZIONE</p>

            <form action="{{ route('register.store') }}" method="POST>
            @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password-confimration">Conferma La Password</label>
                        <input type="password" name="password-confimration" id="password-confimration" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                    </div>
            </form>
        </div>    
    </div>
    
</x-layout.layout>