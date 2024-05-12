<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $table->shop->name }}</title>
</head>
<body>
    <div style="text-align: center">
        <img src="{{ url('qr/' . $table->qrcode) }}" width="500" height="500" alt="">
        <h1> {{ $table->shop->name }} </h1>
        <h2>Table Number : {{ $table->name }} </h2>
    </div>
</body>
</html>
