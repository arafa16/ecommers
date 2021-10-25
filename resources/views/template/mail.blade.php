<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div class="container">
        <h1>Anda Telah Melakukan Pemesanan :</h1>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nama Product</th>
                <th>Harga Product</th>
                <th>Qty</th>
                <th>Sub Total</th>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <th>{{$cart->product->name}}</th>
                    <th>{{$cart->product->price}}</th>
                    <th>{{$cart->qty}}</th>
                    <th>Rp. {{ number_format($cart->qty * $cart->product->price)}}</th>
                </tr>
                @php
                    $total += ($cart->ty * $cart->product->price)
                @endphp

                @endforeach
            </tbody>
        </table>
        <h1>Total Pemesanan : {{ number_format($cart->qty * $cart->product->price) }}</h1>
    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>