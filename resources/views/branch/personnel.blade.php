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

    <label>Branch</label><br>
    <select name="branch_id" required>
        <option value="1">Sta. Cruz</option>
        <option value="2">Tagoloan</option>
    </select>

    <br><br>

    <label>Personnel Name</label><br>
    <input type="text" name="personnel_name" required>

    <br><br>

    <button type="submit">Submit</button>
</form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>

</html>