@extends('layouts.master')
@section('home')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="col-sm-12 col-md-12 col-lg-12">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        
            <div class="row">
                
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                    <img src="/images/{{$details->product_image}}" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                    <h2 class="name">
                    {{$details->product_title}}
                        </br>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-primary"></i>
                        <i class="fa fa-star fa-2x text-muted"></i>
                        <span class="fa fa-2x"><h5>(109) Votes</h5></span>
                        <a href="javascript:void(0);">109 customer reviews</a>
                    </h2>
                    <hr />
                    <h3 class="price-container">
                    ${{$details->product_cost}}
                        <small>*includes tax</small>
                    </h3>
                    <div class="certified">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Delivery time<span>7 Working Days</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Certified<span>Quality Assured</span></a>
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <div class="description description-tabs">
                        <ul id="myTab" class="nav nav-pills">
                            <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Product Description </a></li>
                            
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            
                                <strong>Description Title</strong>
                                <p>
                                {{$details->product_description}}
                               
                          
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <form action="/addtocart" method ="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$details->id}}">
                            <button type="submit" class="btn btn-success btn-lg" >Add to cart </button>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="btn-group pull-right">
                                <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist</button>
                                <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <!-- end product -->
</div>


@endsection