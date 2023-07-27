<!-- /.row -->
<div class="row">
    <div class="col-12 pb-3 d-flex justify-content-end">
        <a href="{{route('admin.reference.create')}}" class="btn btn-sm btn-success">Ajouter une Reference</a>
    </div>
    <div class="col-12 pb-3">
        <span class="badge text-bg-dark py-1">resultat ({{count($references)}})</span>
        <span class="badge text-bg-warning py-1">Selected (0)</span>
    </div>
    <div class="col-12">
        <div class="card">
        <div class="card-header py-3">
            <h4 style="font-weight: normal">Liste des references</h4>
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
                    <th>date de creation</th>
                    <th>Créé par</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($references as $ref)
                    <tr wire:key="{{$ref->id}}">
                        <td class="bg-white" ><input type="checkbox" name="" id=""></td>
                        <td class="bg-white" ><a href=""> {{$ref->name}} </a></td>
                        <td class="bg-white" >{{$ref->desc}}</td>
                        <td class="bg-white text-danger" >Unknown</td>
                        <td class="bg-white" >{{$ref->created_at}}</td>
                        <td class="bg-white text-danger" >Unknown</td>
                        <td class="bg-white" >
                            <div class="dropdown-center">
                                <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.reference.details', ['name' => $ref->name])}}">Consulter</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.reference.edit', ['name' => $ref->name])}}">Modifier</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a type="button" class="dropdown-item bg-danger text-white" data-bs-toggle="modal" data-bs-target="{{"#ref".$ref->id}}" >Supprimer</a></li>
                                </ul>
                                </div>
                        </td>
                    </tr>                                    
                    
                    {{-- Modals --}}
                    <div class="modal fade" id="{{"ref".$ref->id}}" tabindex="-1" aria-labelledby="{{"service".$ref->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Supprimer Service : {{ $ref->name }}</h5>
                            </div>
                            <div class="modal-body">
                                Voulez vous vraiment supprimer cette reference ? <br>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" wire:click="deleteReference({{$ref->id}})">Supprimer</button>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach

            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>












</div>