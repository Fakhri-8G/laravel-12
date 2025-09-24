<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .btn-del{
            background-color: red;
            color: whitesmoke;
            padding: 5px 10px;
            border: none;
            cursor: grabbing;
        }
    </style>
</head>
<body>
    
    <center>
        <h2>Data Post</h2>

            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
                @foreach ($post as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->content }}</td>
                    <td><form action="{{ url('/post/'.$data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapusnya 😟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-del">Hapus</button>
                    </form></td>
                </tr>
                @endforeach
            </table><br><br>

            <form action="{{ url('/post') }}" method="POST">
                @csrf
                <h2>Buat Data Baru</h2>
                <table border="1">
                    <tr>
                        <th>
                            <label for="">Title</label>
                        </th>
                        <th>
                            <label for="">Content</label>
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="title">
                        </td>
                        <td>
                            <input type="text" name="content">
                        </td>
                        <td>
                            <button type="submit">Buat Baru</button>
                        </td>
                    </tr>
                </table>

            </form>
    </center>

</body>
</html>