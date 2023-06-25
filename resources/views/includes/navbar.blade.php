<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('frontend/images/bikestore.png') }}" style="width: ;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <img src="frontend/images/bicycle-logo.svg" class="mr-5" alt="">
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/detail.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>