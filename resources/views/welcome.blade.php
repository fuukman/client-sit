<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
      <h2>Selemat Datang</h2>
      <div class="panel panel-default">
        <div class="panel-heading">Masukan Pencarian</div>
        <div class="panel-body">
            <form action="{{ url('sit') }}" method="GET">
               <div class="col-xs-4">
                  <input class="form-control" id="ex3" placeholder="Masukan NIS" required="" class="validate" name="q" type="number">
                </div>
                  <button type="submit" class="btn btn-primary">Cari</button>
              </div>
          </form>
      </div>
  </div>
</div>

</body>
</html>

