<div class="row">

    @if (session()->has('success'))
      <div class="col-12">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      </div>
    @endif
    @if (session()->has('error'))
      <div class="col-12">
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
      </div>
    @endif


<div class="col-12 d-flex justify-content-end mb-3">
    <button type="button" class="btn btn-sm btn-danger me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
    <a class="btn btn-sm btn-primary" href="{{route('admin.reference.edit', ['name' => $reference->name])}}">Modifier</a>
</div>

<div class="col-6">
    <div class="card ">
        <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Information reference</h5>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form>
            <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la reference</label>
                <input type="email" value="{{$reference->name}}" class="form-control" id="name" placeholder="Service 01" readonly>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description de la reference</label>
                <textarea type="email"  class="form-control" id="desc" placeholder="Message ici!" readonly> {{$reference->desc}} </textarea>
            </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
        <!-- /.card -->
</div>


<div class="col-6">
    <div class="card ">
        <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Icon</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body text-center">
            <img class="img-fluid" width="300" src="{{asset($reference->logo)}}" alt="">
        </div>
    </div>
        <!-- /.card -->
</div>



{{-- Modals --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer Reference</h5>
        </div>
        <div class="modal-body">
            Voulez vous vraiment supprimer cette reference ? <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" wire:click="deleteReference">Supprimer</button>
        </div>
      </div>
    </div>
</div>

</div>