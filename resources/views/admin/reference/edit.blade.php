@extends('admin.layouts.app')


@push('custom-css')
@livewireStyles
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>

@endpush





@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Modifier reference : {{ $ref->name }} </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Modifier reference {{ $ref->name }} </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
      

    <section class="content">
        <div class="container-fluid">
            @livewire('reference.edit', [
              'reference' => $ref
            ])
        </div>
    </section>
      
      
@endsection





@push('custom-js')
@vite(['resources/js/app.js'])

@livewireScripts

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>


@endpush