@extends('layouts.master')

@section('content')
@php
$products = session('products');
@endphp
<section class="h-100 h-custom">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card shopping-cart" style="border-radius: 15px;">
                    <div class="card-body text-black">

                        <div class="row">
                            <div class="col-lg-6 px-5 py-4">

                                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase logohome">Your products</h3>
                                <p class="mb-5 pt-2 text-center fw-bold text-uppercase">You have {{count($products)}} items in your cart</p>
                                @php
                                $tong = 0;
                                @endphp
                                @foreach ($products as $product)
                                @php
                                $tong += $product->price * $product->quantity;
                                @endphp
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('product.detail', ['id' => $product->id]) }}"> <img src="../uploads/{{$product->image}}" class="img-fluid" style="width: 150px;" alt="Generic placeholder image"></a>

                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-primary">{{$product->name}}</h5>
                                        <p class="fw-bold mb-0 me-5 pe-3"> Mã Sản Phẩm : {{$product->code}}</p>
                                        <p class="fw-bold mb-0 me-5 pe-3"> Size : {{$product->size}}</p>
                                        <p class="fw-bold mb-0 me-5 pe-3"> Color : {{$product->color}}</p>
                                        <div class="d-flex align-items-center">

                                            <p class="fw-bold mb-0 me-5 pe-3">${{$product->price}}0₫</p>


                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary minus-btn" type="button" data-id="{{$product->id}}">-</button>
                                                <input id="quantity-{{$product->id}}" style="max-width: 40px;" type="text" class="form-control quantity-input" value="{{$product->quantity}}" data-price="{{$product->price}}" readonly>

                                                <!-- <input id="quantity-{{$product->id}}" style="max-width: 40px;" type="text" class="form-control quantity-input" value="{{$product->quantity}}" readonly> -->
                                                <button class="btn btn-outline-secondary plus-btn" type="button" data-id="{{$product->id}}">+</button>
                                            </div>
                                            <a href="cart/{{$product->id}}">Xóa</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                                <div class="d-flex justify-content-between px-x">
                                    <p class="fw-bold">Discount: 10%</p>
                                    <p class="fw-bold">${{ number_format($tong * 0.10, 3) }}₫</p>
                                </div>
                                <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                                    <h5 class="fw-bold mb-0">Total:</h5>
                                    <h5 class="fw-bold mb-0" id="total-price">${{ number_format($tong, 3) }}₫</h5>
                                </div>

                            </div>
                            <div class="col-lg-6 px-5 py-4">

                                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase logohome">Payment</h3>

                                <form class="mb-5">

                                    <div class="form-outline mb-5">
                                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17" value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                        <label class="form-label" for="typeText">Card Number</label>
                                    </div>

                                    <div class="form-outline mb-5">
                                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17" value="John Smith" />
                                        <label class="form-label" for="typeName">Name on card</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22" size="7" id="exp" minlength="7" maxlength="7" />
                                                <label class="form-label" for="typeExp">Expiration</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <div class="form-outline">
                                                <input type="password" id="typeText" class="form-control form-control-lg" value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                                <label class="form-label" for="typeText">Cvv</label>
                                            </div>
                                        </div>
                                    </div>


                                    <a href="/cart"><button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button></a>

                                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                                        <a href="/home"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                                    </h5>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection