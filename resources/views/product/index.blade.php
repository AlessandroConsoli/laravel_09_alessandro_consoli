<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col12 col-md-6">
                    <h1 class="text-center">Prodotti in stock</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">

            @foreach ($products as $product)               
            <div class="col12 col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}}€</h6>
                      <p class="card-text">{{$product->description}}</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
    </div>


</x-layout>