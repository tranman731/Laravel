@extends('layouts.master')
@section('content')

<!-- <section>
  <div class="container my-5">

    <div class="row">
      @if(count($productss) > 0)
      @foreach ($productss as $product )
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <a href="{{ route('product.detail', ['id' => $product->id]) }}">
            <img src="../uploads/{{$product->image}}" class="card-img-top" style="aspect-ratio: 1 / 1; width:80%;height:80%;" />
          </a>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">${{$product->price}} VND</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="../product/{{$product->id}}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover" style="width:20%; height:90%;">
                <img src="{{asset('frontend/icon/heart.png')}}" alt="" style="width:80%;">
              </a>

            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p>Không tìm thấy sản phẩm nào phù hợp.</p>
      @endif
    </div>
  </div>
</section> -->
<section>
  <div class="text-center">
  <header class="mb-4 logohome">
      <h3>Search</h3>
    </header>
    <div class="row">
      @if(count($productss) > 0)
      @foreach ($productss as $product )
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
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
              <h6>{{$product->price}}0 ₫ </h6>
              <h6 class="text-muted ml-2"><del> {{$product->price}}0 ₫</del></h6>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
            <a href="../product/{{$product->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p>Không tìm thấy sản phẩm nào phù hợp.</p>
      @endif
    </div>
  </div>
</section>
@endsection