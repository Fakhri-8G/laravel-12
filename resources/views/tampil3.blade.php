<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman 3</h1>

    <h2>Nama-nama Hewan Terbang</h2>
    @foreach ($hewan_terbang as $data)
       <ul><li>{{ $data }}</li></ul> 
    @endforeach

</body>
</html>