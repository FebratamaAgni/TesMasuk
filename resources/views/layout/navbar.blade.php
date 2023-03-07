<nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Tes Masuk Kerja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>              
        </ul>
        <ul class="navbar-nav ms-auto">
            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'user')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hal1') }}">Halaman1</a>
              </li>
            @endif
            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'seller')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hal2') }}">Halaman 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('hal3') }}">Halaman 3</a>
              </li>
            @endif 
              <li class="nav-item">
                <a class="btn btn-light" href="{{ route('logout') }}">Logout</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>