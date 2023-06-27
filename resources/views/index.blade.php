<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Treni</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Treni in partenza</h1>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Carrozze</th>
                <th scope="col">In Oraio</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                  <th scope="row">{{ $train->company }}</th>
                  <td>{{ $train->departure_railway_station }}</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        
    </body>
</html>
