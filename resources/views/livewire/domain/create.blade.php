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
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
      </div>
    @endif


    <div class="col-6">
        <div class="card ">
            <div class="card-header">
              <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Information domain</h5>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom du domain</label>
                    <input type="text" wire:model.defer="domain.name" class="form-control" id="name" placeholder="Domain 01">
                    @error('domain.name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description du domain</label>
                    <textarea type="text" wire:model.defer="domain.desc" class="form-control" id="desc" placeholder="Description ici!"></textarea>
                    @error('domain.desc') <span class="text-danger">{{ $message }}</span> @enderror

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
            
            <form class="text-center px-3 py-2"
              wire:ignore>
                <input type="file" wire:model="icon" id="thumbnail">
            </form>
            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
            
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
        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>



  <div class="col-12 d-flex justify-content-end mb-3">
    <button class="btn btn-secondary me-3">Annuler</button>
    <button class="btn btn-primary" id="save">Ajouter</button>
  </div>



<script type="module">
  FilePond.registerPlugin(FilePondPluginImagePreview);
  const Thumbnail = document.getElementById('thumbnail')
  const post = FilePond.create(Thumbnail);
  post.setOptions({ 
    credits	: false, 
    server: {
      process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('icon', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('icon', filename, load)
      },
    }
  });
</script>



<script type="module">
  const editor = new EditorJS({ 
    holder: 'content', 
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


  document.getElementById('save').addEventListener('click', (e)=>{
    e.preventDefault()
    // Handle the saved data
    editor.save().then((outputData) => {
      // store the editorjs data into the service.co    ntent property
      console.log( typeof outputData);
      @this.content = JSON.stringify(outputData) ;
      Livewire.emit('addDomain')
    }).catch((error) => {
      console.log('Saving failed: ', error)
    });
  })

</script>

</div>