<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px"></div>
            <h4>Welcome to your dashboard</h4>
            <button><a href='/edit/{{ $data->id }}'>Edit your profile</a></button>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Blood type</th>
                    <th>BS</th>
                    <th>BA</th>
                    <th>MA</th>
                    <th>PHD</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->sex }}</td>
                        <td>{{ $data->blood }}</td>
                        @if (in_array('bs', $certificates))
                            <td><a href="/deleteBs/{{ $data->id }}">delete</a></td>
                        @else<td><a href="/addBs/{{ $data->id }}">add</a></td>
                        @endif
                        @if (in_array('ma', $certificates))
                            <td><a href="/deleteMa/{{ $data->id }}">delete</a></td>
                        @else<td><a href="/addMa/{{ $data->id }}">add</a></td>
                        @endif
                        @if (in_array('ms', $certificates))
                            <td><a href="/deleteMs/{{ $data->id }}">delete</a></td>
                        @else<td><a href="/addMs/{{ $data->id }}">add</a></td>
                        @endif
                        @if (in_array('phd', $certificates))
                            <td><a href="/deletePhd/{{ $data->id }}">delete</a></td>
                        @else<td><a href="/addPhd/{{ $data->id }}">add</a></td>
                        @endif



                        <td><a href="logout">log out</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>
