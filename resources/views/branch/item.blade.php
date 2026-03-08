<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
    @csrf
    <input type="text" name="item_name" placeholder="Item Name" required>
    <input type="text" name="item_serialno" placeholder="Serial Number" required>
    <input type="number" name="item_quantity" placeholder="Quantity" required>
    <input type="date" name="date_issued" required>
    <input type="datetime-local" name="date_received">
    <select name="item_status" required>
        @foreach(['good','damage','lost'] as $status)
            <option value="{{ $status }}">{{ ucfirst($status) }}</option>
        @endforeach
    </select>
    <button type="submit">Save Item</button>
</form>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
</body>

</html>