@extends('admin.layouts.app')


@push('custom-css')
@endpush



@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Liste des réalisation</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">liste des réalisations</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
      


    
    {{-- The table of all the realisation --}}
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @livewire('realisation.show')
            </div>
        </section>
    
    
    

      
      
      
@endsection


@push('custom-js')
@vite(['resources/js/app.js'])
@endpush