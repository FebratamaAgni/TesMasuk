<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes || Home</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Tes Masuk Kerja</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/home">Home</a>
              </li>              
            </ul>
            <ul class="navbar-nav ms-auto">              
              <li class="nav-item">
                <a class="nav-link" href="/halaman1">Halaman1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/halaman2">Halaman 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/halaman3">Halaman 3</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col">
                <h1>Ini adalah halaman 3</h1>
            </div>
        </div>
      </div>
</body>
</html>