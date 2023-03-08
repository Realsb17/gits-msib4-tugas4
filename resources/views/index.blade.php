<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS KU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<div class="container mt-5">
    <h1 class="text-center mb-3" style="font-family: lucida-bright">Data Mahasiswa</h1>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead style="background-color:	#6495ED;">
                    <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $d )
                    <tr>
                    <td>{{$d->nim}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->jurusan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>