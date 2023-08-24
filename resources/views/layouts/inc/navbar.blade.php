<nav class="navbar navbar-expand-lg navbar-light bg-light navbar1">
  <div class="container-fluid">
    <a href="/home" class="logo-navbar">
      <img src="{{asset('frontend/icon/logoman1.jpg')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 380px;">
        <form class="d-flex a" action="{{ route('search') }}" method="GET" style=" width: 410px;">
          <input class="form-control me-2" type="text" placeholder="Nhập từ khoá cần tìm" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 400px;">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li> -->

        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Danh Mục Sản Phẩm
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category )
            <li><a class="dropdown-item" href="../category/{{$category->id}}">{{$category->name}}</a></li>
            @endforeach


          </ul>
        </li> -->
        <li class="nav-item">
          @guest
          @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        @if (Auth::user()->admin == true)
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin">Admin</a>
            <a class="dropdown-item" href="/profile">Profile</a>
           
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <a href=""></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <a href=""></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endif

        @endguest
        </li>
        <!-- <li class="nav-item">
          <a href="/cart" class="nav-link">
            <img src="{{asset('frontend/icon/cart.png')}}" width="30px;" height="30px;" alt="">
            <i class="fa badge" value=@php if(Session::has('products')){ $products=session('products'); echo count($products); }else{ echo'0'; } @endphp>&#xf07a;</i>
          </a>
        </li> -->



      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">
            <img src="{{asset('frontend/icon/admin.png')}}" alt="" width="30px" height="30px">
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>