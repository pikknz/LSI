<a href="{{ route('product.show', $product) }}">
    @foreach ($product->images as $productImage)
        <img src="{{ asset('images/product/' . $productImage->image_name) }}" alt="{{ $product->name }}">
    @endforeach
    {{ $product->name }}
</a>
