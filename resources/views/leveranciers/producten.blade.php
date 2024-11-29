<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geleverde Producten - {{ $leverancier->Naam }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <h1>Geleverde producten</h1>
    <p><strong>Naam Leverancier:</strong> {{ $leverancier->Naam }}</p>
    <p><strong>Contactpersoon:</strong> {{ $leverancier->ContactPersoon }}</p>
    <p><strong>Leveranciernummer:</strong> {{ $leverancier->LeverancierNummer }}</p>
    <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>

      <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Productnaam</th>
                <th>Aantal</th>
                <th>Verpakkingseenheid</th>
                <th>Laatste levering</th>
                <th>Nieuwe levering</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->Naam }}</td>
                    <td>{{ $product->AantalAanwezig }}</td>
                    <td>{{ $product->VerpakkingsEenheid }}</td>
                    <td>{{ $product->DatumLevering }}</td>
                    <td>
                          <i class="bi bi-plus"></i> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('leveranciers.index') }}">Terug</a></button>
    <button><a href="{{ route('leveranciers.index') }}">Home</a></button>
</body>
</html>
