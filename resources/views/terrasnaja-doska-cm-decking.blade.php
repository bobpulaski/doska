@extends('layouts.main')

@section('title', 'Террасная доска из ДПК')

@section('content')
    <x-h1>Террасная доска из ДПК</x-h1>
    <x-h2>CM Decking</x-h2>

    <div class="row row-cols-3">

        <div class="col">
            <a href="#">
                <img class="img-fluid" src="{{ asset('images/IMG_6172_1.png') }}" alt="">
            </a>
            <h3 class="display-6 text-center text-decoration-none">CM Decking Vintage Solid</h3>
        </div>

        <div class="col">
            <a href="#">
                <img class="img-fluid" src="{{ asset('images/Zebrano_Brown_.jpg') }}" alt="">
            </a>
            <h3 class="display-6 text-center text-decoration-none">CM Decking Zebrano</h3>
        </div>

        <div class="col">
            <a href="#">
                <img class="img-fluid" src="{{ asset('images/cm-deking-natur-dub-double.jpg') }}" alt="">
            </a>
            <h3 class="display-6 text-center text-decoration-none">CM Decking Natur</h3>
        </div>

        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
    </div>

@endsection
