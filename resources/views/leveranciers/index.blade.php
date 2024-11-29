<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Leveranciers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <h1>Overzicht Leveranciers</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Naam</th>
                <th>Contactpersoon</th>
                <th>Leveranciernummer</th>
                <th>Mobiel</th>
                <th>Aantal verschillende producten</th>
                <th>Toon Producten</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leveranciers as $leverancier)
                <tr>
                    <td>{{ $leverancier->Id }}</td>
                    <td>{{ $leverancier->Naam }}</td>
                    <td>{{ $leverancier->ContactPersoon }}</td>
                    <td>{{ $leverancier->LeverancierNummer }}</td>
                    <td>{{ $leverancier->Mobiel }}</td>
                    <td>{{ $leverancier->unieke_producten_count }}</td>
                    <td>
                        <a href="{{ route('leverancier.producten', $leverancier->Id) }}">
                          <i class="bi bi-box"></i> 
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
