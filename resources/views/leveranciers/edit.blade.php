<x-layout>
    <body class="bg-gray-100 text-gray-800">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-3xl font-semibold mb-6 text-center text-indigo-600">Levering Product</h1>

            <!-- Gegevens van de leverancier -->
            <div class="bg-white p-6 shadow-lg rounded-lg mb-8">
                <div class="space-y-4">
                    <p class="text-lg font-medium"><strong>Leverancier:</strong> {{ $leverancier->Naam }}</p>
                    <p class="text-lg font-medium"><strong>Contactpersoon:</strong> {{ $leverancier->ContactPersoon }}</p>
                    <p class="text-lg font-medium"><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
                </div>
            </div>

            <!-- Formulier voor de levering product -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <div class="space-y-6">
                    <div class="mb-6">
                        <div class="flex items-center justify-between">
                            <label for="aantal" class="text-lg font-medium">Aantal producteenheden:</label>
                            <input type="number" id="aantal" class="border rounded px-4 py-2 w-1/2" placeholder="Aantal producteenheden">
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <label for="datum" class="text-lg font-medium">Datum eerstvolgende levering:</label>
                            <input type="date" id="datum" class="border rounded px-4 py-2 w-1/2">
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <button class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">
                            <a href="{{ route('leveranciers.index') }}" class="text-white">Sla op</a>
                        </button>

                        <div class="flex space-x-4">
                            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">
                                <a href="{{ route('leverancier.producten', $leverancier->Id) }}" class="text-gray-700">Terug</a>
                            </button>

                            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">
                                <a href="{{ route('leveranciers.index') }}" class="text-gray-700">Home</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>
