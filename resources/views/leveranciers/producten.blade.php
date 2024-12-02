<x-layout>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-indigo-600">Geleverde Producten</h1>

        <div class="mb-6">
            <p class="text-lg font-medium"><strong>Naam Leverancier:</strong> {{ $leverancier->Naam }}</p>
            <p class="text-lg font-medium"><strong>Contactpersoon:</strong> {{ $leverancier->ContactPersoon }}</p>
            <p class="text-lg font-medium"><strong>Leveranciernummer:</strong> {{ $leverancier->LeverancierNummer }}</p>
            <p class="text-lg font-medium"><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
        </div>

        @if (empty($products) || count($products) === 0)
            <div class="alert alert-info bg-yellow-100 text-yellow-800 p-4 rounded-lg mb-6">
                Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin.
            </div>
            <meta http-equiv="refresh" content="3; url={{ route('leveranciers.index') }}">
        @else
            <div class="overflow-x-auto bg-white shadow-md rounded-lg mb-6">
                <table class="min-w-full table-auto border-collapse">
                    <thead class="bg-indigo-500 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left font-medium">Productnaam</th>
                            <th class="py-3 px-4 text-left font-medium">Aantal</th>
                            <th class="py-3 px-4 text-left font-medium">Verpakkingseenheid</th>
                            <th class="py-3 px-4 text-left font-medium">Laatste levering</th>
                            <th class="py-3 px-4 text-left font-medium">Nieuwe levering</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $product->Naam }}</td>
                                <td class="py-3 px-4">{{ $product->AantalAanwezig }}</td>
                                <td class="py-3 px-4">{{ $product->VerpakkingsEenheid }}</td>
                                <td class="py-3 px-4">{{ $product->DatumLevering }}</td>
                                <td class="py-3 px-4">
                                    <i class="bi bi-plus text-indigo-600 hover:text-indigo-800 cursor-pointer">✙</i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="flex space-x-4 justify-center">
            <button class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">
                <a href="{{ route('leveranciers.index') }}" class="text-white">Terug</a>
            </button>
            <button class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">
                <a href="{{ route('leveranciers.index') }}" class="text-white">Home</a>
            </button>
        </div>
    </div>
</body>
</x-layout>
