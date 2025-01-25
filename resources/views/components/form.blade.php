<div>
<div class="container">
     
            <form action="{{ route('contatti.send') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="La Tua Email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="name">Nome</label>
                        <input type="name" name="name" id="name" placeholder="Il tuo Nome" class="form-control">
                    </div>
                    <div class="col-12 mt-3">
                        <label for="message">Descrivi la tua Richiesta</label>
                        <textarea name="message" id="message" class="form-control"
                        rows="8"></textarea>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary mt-3">Invia richiesta</button>
                    </div>
                </div>
            </form>

    </div>
</div>