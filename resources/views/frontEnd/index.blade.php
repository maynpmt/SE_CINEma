@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')

    <section>
        <div class="container">
           
            <!-- banner slide -->
            <div class="row">
                @include('frontEnd.layouts.carousel')
            </div>

            <!-- end of banner slide -->

            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}">
                                            <img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <div class="detail">
                                            <span><h5>{{$product->p_name}}</h5></span>
                                            <span><h3>{{$product->price}}.-</h3></span>
                                        </div>
                                      
                                        <!-- <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a> -->
                                    </div>
                                </div>
                                <!-- <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-sm-3">
                <h3>Category</h3>
            </div>

        </div> -->

       
    </section>
@endsection