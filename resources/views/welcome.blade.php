<x-layout>
   
<header class="header">

<div class="container h-100">
    <div class="row justify-content-center align-content-center h-100">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <h1 class="text-center">Homepage</h1>

        </div>
    </div>
</div>
</header>

<div class="container">
    <div class="row mt-5 justify-content-center my-5">
        <div class="col-12 col-md-6 justify-content-center">
        <form class="rounded-4 bg-secondary-subtle p-3" action="{{route('product.store')}}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Nome Prodotto</label>
    <input name="name" type="text" class="form-control" id="name">
  </div>  
  
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione del Prodotto</label>
    <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
  </div>  

  <div class="mb-3">
    <label for="price" class="form-label">Prezzo del Prodotto</label>
    <div class="d-flex">
        <input name="price" type="text" class="form-control d-flex me-3" id="price"><span>€</span>
    </div>    
  </div>  

  <button type="submit" class="btn btn-primary">Crea prodotto</button>
</form>
        </div>
    </div>
</div>

</x-layout>