@extends('layout.main')

@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione Di Partenza</th>
                <th scope="col">Stazione Di Arrivo</th>
                <th scope="col">Orario Di Partenza</th>
                <th scope="col">Orario Di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Trains as $Train)
                <tr>
                    <th scope="row">{{ $Train->id }}</th>
                    <td>{{ $Train->Azienda }}</td>
                    <td>{{ $Train->Stazione_di_partenza }}</td>
                    <td>{{ $Train->Stazione_di_arrivo }}</td>
                    <td>{{ $Train->Orario_di_partenza }}</td>
                    <td>{{ $Train->Orario_di_arrivo }}</td>
                    <td>{{ $Train->Codice_Treno }}</td>
                    <td>{{ $Train->Numero_Carrozze }}</td>
                    <td>{{ $Train->In_orario }}</td>
                    <td>{{ $Train->Cancellato }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
