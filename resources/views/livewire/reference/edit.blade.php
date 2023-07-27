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
              <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Information Realisation</h5>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom du service</label>
                    <input type="text" value="{{$reference->name}}" wire:model="reference.name" class="form-control" id="name" placeholder="Service 01">
                    @error('reference.name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description du service</label>
                    <textarea type="email" wire:model="reference.desc" class="form-control" id="desc" placeholder="Message ici!">{{$reference->desc}}</textarea>
                    @error('reference.desc') <span class="text-danger">{{ $message }}</span> @enderror

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
                <input type="file" name="icon" wire:model="icon" id="thumbnail">
            </form>
            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
            
        </div>
          <!-- /.card -->
    </div>



  <div class="col-12 d-flex justify-content-end mb-3">
    <button class="btn btn-secondary me-3">Annuler</button>
    <button class="btn btn-primary" id="save">Modifier</button>
  </div>



<script type="module">
  FilePond.registerPlugin(FilePondPluginImagePreview);
  const Thumbnail = document.getElementById('thumbnail')
  const post = FilePond.create(Thumbnail);


  // process the image url 
  const url = @js($reference->logo)


  post.setOptions({ 
    credits	: false,
    files : [
      {
        source : url.split("/")[1],
        // set type to local to indicate an already uploaded file
        options: {
          type: 'local',
        },

      },
    ],
    server: {
      process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('icon', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('icon', filename, load)
      },
      load : "/image/load/references/",
    }
  });




  document.getElementById('save').addEventListener('click', (e)=>{
    e.preventDefault()
    @this.old_icon = document.querySelector('input[name=icon]').value
    console.log( @this.old_icon)
    Livewire.emit('updateReference')
  })
  
</script>



</div>