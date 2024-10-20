@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Список продуктов</h1>

    <table class="table-auto w-full bg-white rounded-lg shadow-lg">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">Название продукта</th>
                <th class="px-4 py-2">Категория</th>
                <th class="px-4 py-2">Цена</th>
                <th class="px-4 py-2">Актуальность</th>
                <th class="px-4 py-2">Поставщик</th>
                <th class="px-4 py-2">Склад</th>
                <th class="px-4 py-2">Ячейка хранения</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $product->product_name }}</td>
                    <td class="px-4 py-2">{{ $product->product_category }}</td>
                    <td class="px-4 py-2">{{ $product->price }}</td>
                    <td class="px-4 py-2">{{ $product->actual ? "Есть в наличии" : "Продана" }}</td>
                    <td class="px-4 py-2">{{ $product->supplier ? $product->supplier->supplier_name : 'Нет поставщика' }}</td>
                    <td class="px-4 py-2">{{ $product->productStorage && $product->productStorage->warehouse ? $product->productStorage->warehouse->id : 'Нет данных' }}</td>
                    <td class="px-4 py-2">{{ $product->productStorage ? $product->productStorage->storage_cell : 'Нет данных' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
