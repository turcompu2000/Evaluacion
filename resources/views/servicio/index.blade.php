<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Commune List</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Listado de servicio') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
        <h1>LISTADO DE SERVICIOS DE TRANSPORTE</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre Conductor</th>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <th scope="row">{{ $servicio->id_servicio }}</th>
                        <td>{{ $servicio->Fecha }}</td>
                        <td>{{ $servicio->Nomb_conductor}}</td>
                        <td>{{ $servicio->cliente}}</td>
                        <td>
                            <a href="{{ route('servicio.create') }}" class="btn btn-success">Añadir</a>

                            <a href="{{ route('servicio.edit', ['servicio' => $servicio->id_servicio]) }}" class="btn btn-info">
                                Editar </a></li>

                                <form action="{{ route('servicio.destroy', ['servicio' => $servicio->id_servicio]) }}"
                                    method='POST' style="display: inline-block">
                                    @method('delete')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</x-app-layout>
</body>
</html>
