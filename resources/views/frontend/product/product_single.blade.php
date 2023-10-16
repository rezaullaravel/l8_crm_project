<h4>Product single page</h4>
@if (Session('info-message'))
    <h4 style="color:#228b22">{{ Session::get('info-message') }}</h4>
@endif
<img src="{{ asset($product->product_thumbnail) }}" width="200px" height="200px" alt=""> <br><br>
<form action="{{ route('product.add.cart') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" min="1" value="1"> </br>
    <button type="submit">Add To Cart</button>
</form>
