<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h1 class="text-center">WELCOME</h1>
        </div>
    </div>

    <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center ">
                <form class="rounded-4 shadow bg-secondary-subtle  p-3" action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome del prodotto</label>
                      <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione del prodotto</label>
                      <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3 ">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <div class="d-flex ">
                            <input name="price" type="text" class="form-control d-flex me-3" id="price"> <span>€</span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crea prodotto</button>
                  </form>
            </div>
        </div>
</div>


</x-layout>