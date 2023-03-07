<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto me-auto fw-bold fs-3" href="#">Halaman Daftar</a>
            </div>
        </nav>
    </div>
    <!-- akhir navbar -->

    <!-- form daftar -->
    <section id="daftar1">
        <div class="container bg-light">
            <div class="row">
                <form action="{{ route('postRegister') }}" method="post">
                    @csrf
                    <div class="col-12 my-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="col-12 mb-3">
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option selected>Masukkan Role</option>
                            <option value="admin">Admin</option>
                            <option value="seller">Seller</option>
                            <option value="user">User</option>
                          </select>                        
                    </div>
                    <div class="col-12 my-3">
                        <button class="btn btn-success fw-semibold w-100" type="submit" name="daftar">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- akhir daftar -->

    <!-- backlogin -->
    <section id="kembali">
        <div class="container bg-light">
            <div class="row">
                <div class="col-12 mb-3">
                    <p class="text-center">Sudah punya akun??</p>
                    <a href="/login">
                        <button class="btn btn-primary fw-semibold" type="submit">Yuk Login..</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir backlogin -->

    <!-- javascript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>