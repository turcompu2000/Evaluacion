<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar listado de servicio</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Communes') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
        <h1>EDITAR SERVICIO</h1>
        <form method="POST" action="{{ route('servicio.update', ['servicio' => $servicio->id_servicio]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id"
                    disabled="disabled" value="{{ $servicio->id_servicio }}">
                <div id="codigoHelp" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" required class="form-control" id="date" aria-describedby="nameHelp"
                    name="date" placeholder="Fecha de ingreso" value="{{ $servicio->Fecha }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de cliente</label>
                <input type="text" required class="form-control" id="name" placeholder="Commune name"
                    name="name" value="{{ $servicio->cliente }}">
            </div>


            <div class="mb-3">
            <label for="Conductor">Nombre de conductor:</label>
            <select class="form-select" id="Conductor" name="code" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id_conductor }}">{{ $servicio->Nomb_conductor}}</option>
                @endforeach
            </select>
            </div>

            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('servicio.index') }}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>
</x-app-layout>
</body>
</html>
