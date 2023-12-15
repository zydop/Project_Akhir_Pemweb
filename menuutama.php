<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Menu Utama</title>
</head>
<body style="background-color:#f8f0e3">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background:black">
  <div class="container-fluid">
    <a class="navbar-brand" href="menuutama.php" style="color:white">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menuutama.php" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input.php"style="color:white">Input</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil.php"style="color:white">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer.php"style="color:white">Transfer</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <br>
    <div class="card-group">
        <div class="card">
            <button type="button" class="btn btn-warning">
            <a href="input.php">
                <div class="text-center">
                    <div class="card-body">
                        <p style="color:black">Input Data</p>
                    </div>
                </div>
            </a>
            </button>
        </div>
        <div class="card">
            <button type="button" class="btn btn-warning">
            <a href="tampil.php" >
                <div class="text-center">
                    <div class="card-body">
                    <p style="color:black">Edit Data Rekening</p>
                    </div>
                </div>
            </a>
            </button>
        </div>
        <div class="card">
            <button type="button" class="btn btn-warning">
            <a href="transfer.php">
                <div class="text-center">
                    <div class="card-body">
                    <p style="color:black">Transfer Dana</p>
                    </div>
                </div>
            </button>
            </a>
        </div>
</div>
</body>
</html>