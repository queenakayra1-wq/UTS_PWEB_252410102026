
@props(['product'])

<div class="product-card">
    <div class="product-image">🧁</div>

    <h3>{{ $product['nama'] }}</h3>

    <p class="product-price">
        Rp {{ number_format($product['harga'], 0, ',', '.') }}
    </p>

    <p>Stok: {{ $product['stok'] }} pcs</p>
</div>

<style>
    .product-card {
        background: white;
        padding: 22px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 3px 12px rgba(90, 55, 35, 0.08);
    }

    .product-image {
        font-size: 45px;
        background: #FFF0E4;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .product-price {
        color: #A66B4F;
        font-weight: bold;
        margin: 12px 0;
    }

    .product-card p {
        font-size: 14px;
        margin-top: 8px;
    }
</style>
