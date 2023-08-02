<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<body>
    <h1>welcome to Dashbord </h1>
    <table>
        <thead>
            <th>user name </th>
            <th>email </th>
            <th><a href="/logout">Logout</a> </th>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>