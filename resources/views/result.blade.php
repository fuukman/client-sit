<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hasil Pencarian NIS</h2>
  <table style="background-color:#f1c40f;" class="table table-striped">
    @foreach($data as $datas)
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tahun masuk</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>{{ $datas->nis }}</b></td>
        <td>{{ $datas->nama }}</td>
        <td>{{ $datas->jurusan }}</td>
        <td>{{ $datas->kelas }}</td>
        <td>{{ $datas->agama }}</td>
        <td>{{ $datas->jenis_kelamin }}</td>
        <td>{{ $datas->alamat }}</td>
        <td>{{ $datas->tahun_masuk }}</td>
        <td>{{ $datas->tanggal_lahir }}</td>
        <td>{{ $datas->tempat_lahir }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <a href="{{url('/')}}"><button type="button" class="btn btn-primary">Kembali</button></a>
</div>

</body>
</html>

