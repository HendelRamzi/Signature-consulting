<div class="row">



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
                    <label for="exampleFormControlInput1" class="form-label">Nom de la realisation</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Realisation 01">
                  </div>

                  <label for="exampleFormControlInput1" class="form-label">Selection les services associer :</label><br>
                  <div class="form-check form-check-inline mb-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Service 01</label>
                  </div>
                  <div class="form-check form-check-inline mb-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Service 01</label>
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
            
            <form class="text-center px-3 py-2"
              wire:ignore>
                <input type="file" wire:model="photo" id="thumbnail">
            </form>
            
        </div>
          <!-- /.card -->
    </div>



    <div class="col-12">
      <div class="card ">
          <div class="card-header">
            <h5 class="card-title" style="font-size: 1rem; font-weight: bold">Gallerie photos</h5>
          </div>
          <!-- /.card-header -->
          
          <form  class="text-center px-3 py-2"
            wire:ignore>
              <input type="file" wire:model="gallery" id="gallery">
          </form>
          
      </div>
        <!-- /.card -->
  </div>


  <div class="col-12 d-flex justify-content-end">
    <button class="btn btn-secondary me-3">Annuler</button>
    <button class="btn btn-primary">Créé</button>
  </div>



    <script type="module">
      FilePond.registerPlugin(FilePondPluginImagePreview);
      const Thumbnail = document.getElementById('thumbnail')
      const post = FilePond.create(Thumbnail);
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

<script type="module">
  FilePond.registerPlugin(FilePondPluginImagePreview);
  const gallery = document.getElementById('gallery')
  const post = FilePond.create(gallery, {
    maxFiles : 5,
    credits	: false, 
    allowMultiple : true,
  });
  post.setOptions({ 
    server: {
      process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('gallery', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('gallery', filename, load)
      },
    }
  });
</script>

</div>