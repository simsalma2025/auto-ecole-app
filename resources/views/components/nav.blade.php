@once
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar w/ text</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="{{ route('home') }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profiles.index') }}">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('infos') }}">About</a>
          </li>
        </ul>
        <span class="navbar-text">
          Navbar text with an inline element
        </span>
      </div>
    </div>
  </nav>
@endonce


