<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper" style="display: flex;
    align-items: center;
    flex-direction: column;">
        <h2>Register</h2>
        <form action="/update/{{ $data->id }}" method="GET
        ">
            @csrf
            <input type="text" name="name" value="{{$data->name}}" placeholder="name">
            <input type="text" name="email" value="{{$data->email}}" placeholder="email">
            <input type="text" name="password" value="{{$data->password}}" placeholder="password">
            <button>update</button>
        </form>
   
    </div>
</body>
</html>