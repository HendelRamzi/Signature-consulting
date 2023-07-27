@extends('admin.layouts.app')


@push('custom-css')
@livewireStyles

@endpush


@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Liste des formulaires</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">liste des formulaires</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
      


    
    {{-- The table of all the realisation --}}
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
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
              </div>
              @livewire('form.show')
            </div>
        </section>
    
    
    

      
      
      
@endsection



@push('custom-js')
@vite(['resources/js/app.js'])
@livewireScripts

@endpush