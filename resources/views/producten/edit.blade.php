<x-layout>
    <body class="bg-gray-100 text-gray-800">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-3xl font-semibold mb-6 text-center text-indigo-600">Levering Product</h1>

            <div class="mb-6">
                <p class="text-lg font-medium"><strong>Leverancier:</strong> {{ $product->leverancier->Naam }}</p>
                <p class="text-lg font-medium"><strong>Contactpersoon:</strong> {{ $product->leverancier->ContactPersoon }}</p>
                <p class="text-lg font-medium"><strong>Mobiel:</strong> {{ $product->leverancier->Mobiel }}</p>
            </div>

            <form method="POST" action="#">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Aantal producteenheden</label>
                    <input type="number" name="aantal" value="{{ $product->AantalAanwezig }}" 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Datum eerstvolgende levering</label>
                    <input type="date" name="datumLevering" value="{{ $product->DatumLevering }}"
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="flex space-x-4 justify-center mt-6">
                    <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Sla op</button>
                    <a href="{{ route('leveranciers.index') }}" 
                       class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Terug</a>
                </div>
            </form>
        </div>
    </body>
</x-layout>
