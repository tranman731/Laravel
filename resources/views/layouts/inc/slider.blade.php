<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('uploads/image/bannergear.jpg')}}" style="height:400px;"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('uploads/image/bannergear1.jpg')}}"style="height:400px;"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('uploads/image/bannergear2.jpg')}}"style="height:400px;"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('uploads/image/bannergear3.jpg')}}"style="height:400px;"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<div class="container-fluid mb-5">
  <div class="row border-top px-xl-5">
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 navbar2">
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
            <a href="/home" class="nav-item nav-link active">Home</a>
            <a href="/" class="nav-item nav-link active">Shop</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Danh Mục Sản Phẩm
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category )
                <li><a class="dropdown-item" href="../category/{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
          </div>
          <div style="display: flex;margin-right: 600px;padding: 10px;">
            @foreach ($categories as $category )
            <a class="dropdown-item" href="../category/{{$category->id}}">{{$category->name}}</a>
            @endforeach
          </div>

          <div class="navbar-nav mr-auto py-0">
            <li class="nav-item">
              <a href="/cart" class="nav-link">
                <img src="{{asset('frontend/icon/cart.png')}}" width="30px;" height="30px;" alt="">
                <i class="fa badge" value=@php if(Session::has('products')){ $products=session('products'); echo count($products); }else{ echo'0'; } @endphp>&#xf07a;</i>
              </a>
            </li>
          </div>


        </div>
      </nav>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('uploads/image/bannershop.jpg')}}" style="height:500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/image/bannershop1.jpg')}}" style="height:500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/image/bannershop3.jpg')}}" style="height:500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/image/bannershop4.jpg')}}" style="height:500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('uploads/image/bannershop5.jpg')}}" style="height:500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </div>
</div>