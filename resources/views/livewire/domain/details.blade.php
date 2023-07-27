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
    <a class="btn btn-sm btn-primary"  href="{{route('admin.domain.edit', ['name' => $domain->name  ])}}">Modifier</a>
</div>

<div class="col-6">
    <div class="card ">
        <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Information Realisation</h5>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form>
            <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nom du domain</label>
                <input type="email" value="{{$domain->name}}" class="form-control" id="name" placeholder="Service 01" readonly>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description du domain</label>
                <textarea type="email"  class="form-control" id="desc" placeholder="Message ici!" readonly> {{$domain->desc}} </textarea>
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
            <img class="img-fluid" width="300" src="{{asset($domain->icon)}}" alt="">
        </div>
    </div>
        <!-- /.card -->
</div>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Contenu</h5>
        </div>
        <div class="card-body" wire:ignore>
            <div id="content"></div>
        </div>
    </div>
</div>




{{-- Modals --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer Domain</h5>
        </div>
        <div class="modal-body">
            Voulez vous vraiment supprimer le domain ? <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" wire:click="deleteDomain">Supprimer</button>
        </div>
      </div>
    </div>
</div>


<script type="module">

    const content =  JSON.parse(@js($domain->content));


  const editor = new EditorJS({ 
    holder: 'content', 
    placeholder : "Ecrivez le contenu ici !",
    data : content ,
    tools : {
        header: {
          class: Header,
          config: {
            placeholder: 'Enter a header',
            levels: [2, 3, 4],
            defaultLevel: 3
          }
        },
        list: {
          class: List,
          inlineToolbar: true,
          config: {
            defaultStyle: 'unordered'
          }
        },
    },
  })



</script>

</div>