<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col12 col-md-6">
            <form class="rounded-4 shadow bg-secondary-subtle p-4" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del prodotto</label>
                    <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del prodotto</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo del prodotto</label>
                    <div class="d-flex align-items-center">
                        <input name="price" type="text" value="{{old('price')}}" class="form-control" id="price"><span class="ms-2 fs-3">€</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci Immagine (Facoltativo)</label>
                    <input name="img" type="file" class="form-control" id="img">
                </div>
                <button type="submit" class="btn btn-primary">Crea prodotto</button>
            </form>
        </div>
    </div>
</div>