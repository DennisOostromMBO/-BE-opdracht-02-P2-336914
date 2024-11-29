<x-layout>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-indigo-600">Overzicht Leveranciers</h1>
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-indigo-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left font-medium">Id</th>
                        <th class="py-3 px-4 text-left font-medium">Naam</th>
                        <th class="py-3 px-4 text-left font-medium">Contactpersoon</th>
                        <th class="py-3 px-4 text-left font-medium">Leveranciernummer</th>
                        <th class="py-3 px-4 text-left font-medium">Mobiel</th>
                        <th class="py-3 px-4 text-left font-medium">Aantal verschillende producten</th>
                        <th class="py-3 px-4 text-left font-medium">Toon Producten</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leveranciers as $leverancier)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $leverancier->Id }}</td>
                            <td class="py-3 px-4">{{ $leverancier->Naam }}</td>
                            <td class="py-3 px-4">{{ $leverancier->ContactPersoon }}</td>
                            <td class="py-3 px-4">{{ $leverancier->LeverancierNummer }}</td>
                            <td class="py-3 px-4">{{ $leverancier->Mobiel }}</td>
                            <td class="py-3 px-4">{{ $leverancier->unieke_producten_count }}</td>
                            <td class="py-3 px-4">
                                <a href="{{ route('leverancier.producten', $leverancier->Id) }}" class="text-indigo-600 hover:text-indigo-800">
                                    <i>📦</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</x-layout>
