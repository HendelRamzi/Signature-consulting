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
              <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Information reference</h5>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de la reference</label>
                    <input type="email" wire:model.defer="ref.name" class="form-control" id="name" placeholder="Reference 01">
                    @error('ref.name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description de la reference</label>
                    <textarea type="email" wire:model.defer="ref.desc" class="form-control" id="desc" placeholder="Description ici!"></textarea>
                    @error('ref.desc') <span class="text-danger">{{ $message }}</span> @enderror

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
              <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Logo</h5>
            </div>
            <!-- /.card-header -->
            
            <form class="text-center px-3 py-2"
              wire:ignore>  
                <input type="file" wire:model="photo" id="thumbnail">
            </form>
            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
            
        </div>
          <!-- /.card -->
    </div>

  <div class="col-12 d-flex justify-content-end mb-3">
    <button class="btn btn-secondary me-3">Annuler</button>
    <button class="btn btn-primary" wire:click="addReference" >Ajouter</button>
  </div>



<script type="module">
  FilePond.registerPlugin(FilePondPluginImagePreview);
  const Thumbnail = document.getElementById('thumbnail')
  const post = FilePond.create(Thumbnail, {
    credits	: false, 
  });
  post.setOptions({ 
    server: {
      process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('photo', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('photo', filename, load)
      },
    }
  });
</script>


</div>