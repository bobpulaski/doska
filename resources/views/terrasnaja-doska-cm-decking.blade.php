@extends('layouts.main')

@section('title', 'Террасная доска из ДПК')

@section('content')
    <x-h1>Террасная доска из ДПК</x-h1>
    <x-h2>CM Decking</x-h2>

    <div class="container gx-5 p-4">
        <div class="row">
            <div class="col">
                <div class="border p-5">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/cm-decking-vintage-solid.jpg') }}"
                             alt="Террасная доска из ДПК CM Decking Vintage Solid">
                    </a>
                    <h3 class="display-6 text-center text-decoration-none">
                        CM Decking
                        <em class="text-muted">Vintage Solid</em>
                    </h3>
                </div>
            </div>

            <div class="col">
                <div class="border p-5">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/cm-decking-zebrano.jpg') }}"
                             alt="Террасная доска из ДПК CM Decking Zebrano">
                    </a>
                    <h3 class="display-6 text-center text-decoration-none">
                        CM Decking
                        <em class="text-muted">Zebrano</em>
                    </h3>
                </div>
            </div>

            <div class="col">
                <div class="border p-5">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/cm-deking-natur-dub-double.jpg') }}"
                             alt="Террасная доска из ДПК CM Decking Natur">
                    </a>
                    <h3 class="display-6 text-center text-decoration-none">
                        CM Decking
                        <em class="text-muted">Natur</em>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt-4">

            <div class="col">
                <div class="border p-5">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/cm-deking-solid-venge-double.jpg') }}"
                             alt="Террасная доска из ДПК CM Decking Solid">
                    </a>
                    <h3 class="display-6 text-center text-decoration-none">
                        CM Decking
                        <em class="text-muted">Solid</em>
                    </h3>
                </div>
            </div>

            <div class="col">
                <div class="border p-5">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/cm-deking-solid-venge-double.jpg') }}"
                             alt="Террасная доска из ДПК CM Decking Solid">
                    </a>
                    <h3 class="display-6 text-center text-decoration-none">CM Decking серия Mix</h3>
                </div>
            </div>

        </div>


    </div>







    <div class="col">
        <div class="border p-5">
            <a href="#">
                <img class="img-fluid" src="{{ asset('images/cm-deking-solid-venge-double.jpg') }}"
                     alt="Террасная доска из ДПК CM Decking Solid">
            </a>
            <h3 class="display-6 text-center text-decoration-none">CM Decking Solid</h3>
        </div>
    </div>
    </div>

@endsection
