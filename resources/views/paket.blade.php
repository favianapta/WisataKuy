@extends('layouts.app')

@section('content')

<div  class="mt-3 w-100 text-center">
    <h3 class="mb-4 fw-bold"> Paket Wisata </h3>
</div>
<main>
      <section class="container mt-5" style="margin-bottom: 70px">
        <div class="col-12 col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="title-alt" href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item main-color">Paket Detail</li>
            </ol>
          </nav>
        </div>

@endsection
