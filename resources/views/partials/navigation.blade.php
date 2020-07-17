

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <img  src="{{ asset('public/images/'.'logo.png')  }}" alt="logo"height='150px'width='150px'>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="{{route('index')}}">HOME <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            DROPDOWN
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{ route('create') }}">CREATE</a>
            <a class="nav-link" href="{{ route('products') }}">PRODUCT LIST</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('all_products')}}">ALL PRODUCTS</a>
            <a class="dropdown-item" href="{{route('product')}}">PRODUCT</a>
          </div>
        </li>

        @auth()
        <li>
        	<a href="{{route('profile')}}" class="text-white">PROFILE ({{optional(auth()->user())->name}})</a>
        	<a href="{{route('logout')}}" class="text-white">LOGOUT</a>
        </li>
        @endauth

        @guest()
        <li class="nav-item"><a class="nav-link"  href="{{route('login')}}">LOGIN</a></li>

          <li class="nav-item"><a class="nav-link"  href="{{ route('register') }}">REGISTER</a></li>
          @endguest
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>
