@extends('layouts.master')
@section('home')
    <!-- shop section -->

        <section class="shop_section layout_padding">       
            <div class="container">
            <div class="heading_container heading_center">
                <h2>
                Latest Products
                </h2>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="/details/{{$product->id}}">
                    <div class="img-box">
                        <img src="images/{{$product->product_image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                        {{$product->product_title}}
                        </h6>
                        <h6>
                        Price
                        <span>
                        {{$product->product_cost}}
                        </span>
                        </h6>
                    </div>
                    <div class="new">
                        <span>
                        New
                        </span>
                    </div>
                    </a>
                </div>
                </div>
                @endforeach
            </div>
            <div class="btn-box">
                <a href="">
                View All Products
                </a>
            </div>
            </div>
        </section>

    <!-- end shop section -->
@endsection