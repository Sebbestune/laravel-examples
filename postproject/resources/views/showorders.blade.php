<!DOCTYPE html>
<html>

<head>
    <title>All orders</title>
</head>

<body>
    <h1>All orders</h1>
    <ul>
        @foreach ($orders as $order)
        <li>{{ $order->item }} will cost
            {{ $order->cost }} it will arrive in
            {{ $order->estimation }} days.
        </li>
        @endforeach
    </ul>
</body>