@extends('layouts.master')

@section('content')
<!-- <section>
    <div class="container my-5">
        <header class="mb-4">
            <h3>{{$product->name}}</h3>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <img src="../uploads/{{$product->image}}" class="img-fluid" />
            </div>
            <div class="col-lg-6">
                <h4>{{$product->name}}</h4>
                <p>Chi tiết sản phẩm: <br> {{$product->description}}</p>
                <h5>Price: {{$product->price}} VND</h5>
                <a href="../product/{{$product->id}}}" class="btn btn-primary">Add to cart</a>
            </div>
        </div>
    </div>
</section> -->

<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active hover-img-detail">
                        <img src="../uploads/{{$product->image}}" class="img-fluid" />
                    </div>

                </div>
                <a class="carousel-control-prev" href="../uploads/{{$product->image}}" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="../uploads/{{$product->image}}" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{$product->name}}</h3>
            <b>Mã Sản Phẩm : </b> {{$product->code}} <br>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
           
            <b> Size : </b> {{$product->size}} <br>
            <b> Color : </b> {{$product->color}} <br>
            <b>Chi tiết sản phẩm:</b> <br>
            <p style="font-size: 23px;"> {{$product->description}}</p>
            <h5>Price: {{$product->price}}0₫</h5>
            <div class="d-flex align-items-center mb-4 pt-2">


                <a href="../product/{{$product->id}}}" class="btn btn-primary">Add to cart</a>
            </div>

        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="">Description</a>
                <a class="nav-item nav-link" data-toggle="tab" href="">Information</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Description</h4>
                    <p>
                        {{$product->description}}
                    </p>


                </div>
               
            </div>
        </div>
    </div>

    @endsection