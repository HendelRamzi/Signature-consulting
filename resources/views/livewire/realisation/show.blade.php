<!-- /.row -->
<div class="row">
    <div class="col-12 pb-3 d-flex justify-content-end">
        <a href="{{route('admin.realisation.create')}}" class="btn btn-sm btn-success">Ajouter réalisation</a>
    </div>
    <div class="col-12 pb-3">
        <span class="badge text-bg-dark py-1">resultat ({{count($realisations)}})</span>
        <span class="badge text-bg-warning py-1">Selected (0)</span>
    </div>
    <div class="col-12">
        <div class="card">
        <div class="card-header py-3">
            <h4 style="font-weight: normal">Liste des Réalisations</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 350px;">
            <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Nom service</th>
                    <th>date de creation</th>
                    <th>Créé par</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($realisations as $realisation)
                    <tr>
                        <td class="bg-white" ><input type="checkbox" name="" id=""></td>
                        <td class="bg-white" ><a href="">{{$realisation->name}}</a></td>
                        <td class="bg-white" >{{$realisation->desc}}</td>
                        <td class="bg-white" >Unknown</td>
                        <td class="bg-white" >{{$realisation->service->name}}</td>
                        <td class="bg-white" >{{$realisation->created_at}}</td>
                        <td class="bg-white" >Unknown</td>
                        <td class="bg-white" >
                            <div class="dropdown-center">
                                <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.realisation.details', ['name' => $realisation->name])}}">Consulter</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.realisation.edit', ['name' => $realisation->name])}}">Modifier</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item bg-danger text-white" wire:click="deleteRealisation({{$realisation->id}})">Supprimer</a></li>
                                </ul>
                                </div>
                        </td>
                    </tr>  
                @endforeach


            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>