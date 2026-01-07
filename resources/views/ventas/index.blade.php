<x-app-layout>
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Ventas</h1>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Producto</th>
                    <th class="px-4 py-2 border">Cantidad</th>
                    <th class="px-4 py-2 border">Precio</th>
                    <th class="px-4 py-2 border">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td class="px-4 py-2 border">{{ $venta->id }}</td>
                        <td class="px-4 py-2 border">{{ $venta->producto }}</td>
                        <td class="px-4 py-2 border">{{ $venta->cantidad }}</td>
                        <td class="px-4 py-2 border">{{ $venta->precio }}</td>
                        <td class="px-4 py-2 border">{{ $venta->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
