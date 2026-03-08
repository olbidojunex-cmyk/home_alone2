<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/branch" method="POST">
        @csrf
        <select name="branch_name" id="">
                <option  placeholder="Select here" >Select</option>
                <option value="stacruz" >Sta.cruz</option>
                <option value="tagoloan" >Tagoloan<option>
        </select>
        <button type="submit">Submit</button>

        @if(session('success'))
            <p> {{ session('success') }} </p>
        @endif

    </form>
</body>
</html>