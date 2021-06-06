@extends('layouts.app')

@section('content')

  <div class="container mt-5 text-center">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3">Beverages</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Biscuits, snacks & Chocolates</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Breakfast & Dairy</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Fruits & Vegetables</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Furnishing & Home Appliances</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Groceries</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Kitchen Appliances</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Household Needs</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Meats & SeaFood</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Noodles, Sauce & Instant Food</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Hygiene Care</a>
                    <a href="#" class="text-reset text-decoration-none  d-block pb-3"> Pet Needs</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 mt-2">
            <div class="row">
                <div class="col-md-6 mt-3 d-flex justify-content-start">
                    <button id="list" class="border border-3 p-1"><i class="fa fa-th-large fa-2x" aria-hidden="true"></i></button>
                    <button id="grid" class="border border-3 p-1 mx-2"><i class="fas fa-list fa-2x"></i></button>
                </div>
                <div class="col-md-6 ">
                    <select class="mt-3 col-sm-7 form-select ml-auto " aria-label="selection">
                        <a href="#"><option selected> Sort by popularity</option></a>
                        <a href="#"><option value="1"> Sort by average rating</option></a>
                        <a href="#"><option value="2"> Sort by latest</option></a>
                        <a href="#"><option value="3"> Sort by price: low to high</option></a>
                        <a href="#"><option value="3"> Sort by price: high to low</option></a>
                    </select>
                </div>
            </div>
            <div id="products" class=" row">
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">On Sale!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/g.png') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h4 class="text-primary">Gaisano Valencia</h4></a>
                            
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">With 20% discount!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/nvm.jpg') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h4 class="text-primary">NVM Valencia</h4></a>      
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">With 10% discount</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/robin.png') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h5 class="text-primary">Robinsons Valencia</h5></a>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">Mega Sale!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/sup.png') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h5 class="text-primary">Robinsons Supermarket</h5></a>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-5">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">5% Discount!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="180" src="{{ asset('images/7.png') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h4 class="text-primary">7 Eleven</h4></a>
                
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">With Vouchers!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/roy.jpg') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h4 class="text-primary">Roy Plaza</h4></a>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 mt-3">
                    <div class="card bg-white ">
                        <span class="badge bg-success mr-auto">With Promo Packs!</span>
                        <div class="card-body">
                            <img class="img-fluid" width="200" height="150" src="{{ asset('images/prg.jpg') }}" alt="">
                        </div>
                        <div class="card-footer text-center bg-white border-top-0">
                            <a href="{{ url('/categories') }}"><h4 class="text-primary">Pure Gold</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
  @include('carousel.script')
@endsection