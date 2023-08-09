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
        <form action="/register" method="GET
        ">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">
            <button>regiter</button>
        </form>
    <a href="view">view</a>
    </div>
</body>
</html>