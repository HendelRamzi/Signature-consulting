<div class="row">


  {{-- @dump($gallery)
  @dump($old_gallery)
 --}}

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
                    <input type="text" value="{{$realisation->name}}" wire:model="realisation.name" class="form-control" id="name" placeholder="Realisation 01">
                    @error('realisation.name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description de la realisation</label>
                    <textarea  wire:model="realisation.desc" class="form-control" id="desc" placeholder="Description ici !">{{$realisation->desc}}</textarea>
                    @error('realisation.desc') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <label for="service" class="form-label">Selectionnez le service</label><br>
                <div class="mb-3">
                  <select  wire:model.defer="realisation.service_id" id="service" class="form-control">
                    @foreach ($services as $service)
                        @if ($service->id == $realisation->service->id)
                            <option value="{{$service->id}}" selected>{{$service->name}}</option> 
                        @else

                        <option value="{{$service->id}}">{{$service->name}}</option> 
                        @endif
                    @endforeach
                  </select>
                  @error('realisation.service_id') <span class="text-danger">{{ $message }}</span> @enderror
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
              <form class="text-center px-3 py-2"
                wire:ignore>
                  <input type="file" name="thumb" wire:model="photo" id="thumbnail">
              </form>
              @error('photo') <span class="text-danger">{{ $message }}</span> @enderror 
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
          <div class="card-body">
            <form  class="text-center px-3 py-2"
              wire:ignore>
                <input type="file" name="gallery" wire:model="gallery" id="gallery">
            </form>
            @error('gallery') <span class="text-danger">{{ $message }}</span> @enderror        
          </div>
      </div>
        <!-- /.card -->
    </div>


  <div class="col-12 d-flex justify-content-end mb-3">
    <a  class="btn btn-secondary me-3">Annuler</a>
    <button class="btn btn-primary" id="save">Modifier</button>
  </div>



<script type="module">
  FilePond.registerPlugin(FilePondPluginImagePreview);
  const Thumbnail = document.getElementById('thumbnail')
  
  const url = "{{$realisation->thumb}}" ; 

  const post = FilePond.create(Thumbnail);
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
          @this.upload('photo', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('photo', filename, load)
      },
      load : "/image/load/realisations/thumb/",
      
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
    files : [
      @foreach($urls as $url)
        {
          source: "{{$url}}",
          options: {
              type: 'local'
          }
        },
      @endforeach
    ],
    server: {
      process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
          @this.upload('gallery', file, load, error, progress)
      },
      revert: (filename, load) => {
        @this.removeUpload('gallery', filename, load)
      },
      load : "/image/load/gallery/", 
    }
  });
</script>

<script type="module">
    const content  = JSON.parse(@js($content)) 
    const editor = new EditorJS({ 
  holder: 'content', 
  placeholder : "Ecrivez le contenu ici !",
  data : content,
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
    @this.content = JSON.stringify(outputData) ;

    const g = document.querySelectorAll('input[name=gallery]') ;
    let a = [];  
    for(let i = 0; i < g.length; i++){
      a.push(g[i].value); 
    }
    @this.old_gallery = a

    


    Livewire.emit('updateRealisation')
  }).catch((error) => {
    console.log('Saving failed: ', error)
  });
})

</script>

</div>