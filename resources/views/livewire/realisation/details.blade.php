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
      <a class="btn btn-sm btn-primary" href="{{route('admin.realisation.edit', ['name' => $realisation->name])}}" >Modifier</a>
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
                    <label for="name" class="form-label">Nom de la realisation</label>
                    <input type="text" value="{{$realisation->name}}" class="form-control" readonly>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description de la realisation</label>
                    <textarea type="email" class="form-control" readonly>{{$realisation->desc}}</textarea>
                </div>



                <div class="mb-3">
                    <label for="desc" class="form-label">Service associer</label>
                    <input type="text" value="{{$realisation->service->name}}" class="form-control" readonly>
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
              <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Thumbnail</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img src="{{asset($realisation->thumb)}}" class="img-fluid" alt="">
            </div>
        </div>
          <!-- /.card -->
    </div>

    <div class="col-12">
      <div class="card ">
          <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Content</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body" >
            <div id="content" wire:ignore></div>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
      </div>
        <!-- /.card -->
    </div>



    <div class="col-12">
      <div class="card ">
          <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Gallerie photos</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-4">
            @foreach ($realisation->images as $image)
                <img class="img-fluid mb-2" src="{{asset($image->image)}}" alt="">
            @endforeach       
          </div>
      </div>
        <!-- /.card -->
    </div>





{{-- Modals section --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer la realisation</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous vraiment supprimer la realisation ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" wire:click="deleteRealisation">Supprimer</button>
      </div>
    </div>
  </div>
</div>





<script type="module">

  const content =  JSON.parse(@js($content));

  const editor = new EditorJS({ 
    holder: 'content', 
    readOnly: true,
    data : content ,
    placeholder : "Ecrivez le contenu ici !",
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