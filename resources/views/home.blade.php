@extends('layouts.app')

@section('content')
    {{-- CARRAUSEL - SLIDER --}}

    <div class="mt-3 w-100 text-center">
        <h3 class="mb-4 fw-bold"> Welcome </h3>
    </div>


    <div id="carouselExampleIndicators" class=" mb-5  col-md-11 thumb container carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner pb-100">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{!! asset('images/slider3.jpg') !!}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div align="center">
        <h2 class="text-center fw-bold">Nikmati Paket Yang Kami Tawarkan</h2>
        <hr width="30%" size="5px">
    </div>



@endsection
