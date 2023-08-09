<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.blade.css">
</head>
<body>
    
    <table width=100%;
    border=1>
        @foreach ($registers as $register)
        <tr>
            <th>Name:</th>
            <td>{{ $register->name }}</td>
       
            <th>Email:</th>
            <td>{{ $register->email }}</td>
       
            <th>Password:</th>
            <td>{{ $register->password }}</td>
        
            <td><a href="update">Update</a></td>
        
            <td>
            <a href="delete/{{ $register->id }}">Delete</a>
            </td>
        </tr>
        @endforeach


    </table>
        

</body>
</html>