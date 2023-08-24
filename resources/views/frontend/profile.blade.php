@extends('layouts.master')
@section('content')

    <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/profile">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <!-- <img src="{{asset($user->Image)}}" alt="avatar"class="rounded-circle img-fluid" style="width: 150px;"> -->
            <h5 class="my-3"> {{ $user->name }}</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">{{ $user->address }}</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> {{ $user->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->phone }}</p>
              </div>
            </div>
           <hr>
           <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Birthdate</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->birthdate }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->address }}</p>
              </div>
            </div>
            <hr>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
@endsection
