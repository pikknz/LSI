<x-layout>
    <h1>{{ $product->name }}</h1>
    <div class="product-page">
        <div>
            @foreach ($product->images as $productImage)
                <img src="{{ asset('images/product/' . $productImage->image_name) }}" alt="{{ $product->name }}">
            @endforeach
                {{ $product->name }}
        </div>
        <div>
            {!! $product->description !!}
            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>
