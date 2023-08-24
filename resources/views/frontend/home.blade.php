@extends('layouts.master')
@section('title', 'Home')
@section('content')


<!-- <section>
  <div class="container my-5">
    @foreach ($categories as $category )

    <header class="mb-4">
      <h3>{{$category->name}}</h3>
    </header>


    <div class="row">
      @foreach ($products as $product )
      @if($product->category_id == $category->id && $product->status == true)
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <a href="{{ route('product.detail', ['id' => $product->id]) }}">
            <img src="../uploads/{{$product->image}}" class="card-img-top" style="aspect-ratio: 1 / 1; width:80%;height:80%;" />
          </a>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}} VND</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="../product/{{$product->id}}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover" style="width:20%; height:90%;">
                <img src="{{asset('frontend/icon/heart-png.png')}}" alt="" style="width:80%;">
              </a>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach


      @endforeach
    </div>

  </div>
</section> -->

<!-- Navbar -->

<!-- <section>
    <div class="text-center">
      @foreach ($categories as $category )
      <header class="mb-4">
        <h3>{{$category->name}}</h3>
      </header>
      <div class="row">
        @foreach ($products as $product ) @if($product->category_id ==
        $category->id && $product->status == true)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-home">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
              <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="../uploads/{{$product->image}}" class="w-100" /></a>
              <a href="#!">
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="" class="text-reset">
                <h5 class="card-title mb-2 name-product">{{$product->name}}</h5>
              </a>
              <a href="" class="text-reset">
                <p>{{$product->description}}</p>
              </a>
              <h6 class="mb-3 price">{{$product->price}} VND</h6>
              <a href="../product/{{$product->id}}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
            </div>
          </div>
        </div>
        @endif
        @endforeach


        @endforeach
      </div>
    </div>
  </section> -->

<!-- <div class="container-fluid pt-5">
    @foreach ($categories as $category )
    <div class="text-center mb-4">
      <h2 class="section-title px-5 logohome">
        <span class="px-2">{{$category->name}}</span>
      </h2>
    </div>
    <div class="row px-xl-5 pb-3">
      @foreach ($products as $product ) @if($product->category_id ==
      $category->id && $product->status == true)
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
          <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="../uploads/{{$product->image}}" class="w-100" /></a>
          </div>
          <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3">{{$product->name}}</h6>
            <div class="d-flex justify-content-center">
              <h6>{{$product->price}}₫ </h6>
              <h6 class="text-muted ml-2"><del> {{$product->price}}₫</del></h6>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
            <a href="../product/{{$product->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
          </div>
        </div>
      </div>
      @endif
      @endforeach


      @endforeach
    </div>
  </div> -->

<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <!-- Shop Sidebar Start -->
    <div class="col-lg-3 col-md-12">
      <!-- Price Start -->
      <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
        <form>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="price-all">
            <label class="custom-control-label" for="price-all">All Price</label>
            <span class="border">1000</span>
          </div>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="price-1">
            <label class="custom-control-label" for="price-1">$0 - $100</label>
            <span class="border">150</span>
          </div>

        </form>
      </div>
      <!-- Price End -->

      <!-- Color Start -->
      <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
        <form>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="color-all">
            <label class="custom-control-label" for="price-all">All Color</label>
            <span class="border">1000</span>
          </div>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-1">
            <label class="custom-control-label" for="color-1">Black</label>
            <span class="border">150</span>
          </div>

        </form>
      </div>
      <!-- Color End -->

      <!-- Size Start -->
      <div class="mb-5">
        <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
        <form>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="size-all">
            <label class="custom-control-label" for="size-all">All Size</label>
            <span class="border">1000</span>
          </div>
          <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-1">
            <label class="custom-control-label" for="size-1">XS</label>
            <span class="border">150</span>
          </div>

        </form>
      </div>
      <!-- Size End -->
    </div>
    <!-- Shop Sidebar End -->


    <!-- Shop Product Start -->
    <div class="col-lg-9 col-md-12">
      <div class="row pb-3">
        <div class="col-12 pb-1">
          <div class="d-flex align-items-center justify-content-between mb-4 ">
            <h1>Shop</h1>
            <div class="dropdown ml-4">
              <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Latest</a>
                <a class="dropdown-item" href="#">Popularity</a>
                <a class="dropdown-item" href="#">Best Rating</a>
              </div>
            </div>
          </div>
        </div>
        @foreach ($categories as $category )
        @foreach ($products as $product ) @if($product->category_id ==$category->id )
        <div class="col-lg-4 col-md-9 col-sm-12">

          <div class="card product-item border-0 mb-2">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
              <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="../uploads/{{$product->image}}" class="w-100" /></a>
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
              <h6 class="text-truncate mb-3">{{$product->name}}</h6>
              <div class="d-flex mb-3 justify-content-center">
                <div class="text-primary mr-2">
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star"></small>
                  <small class="fas fa-star-half-alt"></small>
                  <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
              </div>
              <div class="d-flex justify-content-center">
                <h6>{{$product->price}}0₫</h6>
                <h6 class="text-muted ml-2"><del>{{$product->price}}0₫</del></h6>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
              <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
              <a href="../product/{{$product->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @endforeach
      </div>
    </div>
    <!-- Shop Product End -->
  </div>
</div>
@endsection