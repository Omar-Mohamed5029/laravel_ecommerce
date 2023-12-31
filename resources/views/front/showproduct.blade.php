@extends('front.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="card">
            <div class="container">
                <div class="wrapper row">
                    <div class=" col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="card-img">
                                <img src="{{asset('front/uploads/'.$product->image)}}" style="display: block; width: auto; height: auto;" alt="" class="img-fluid center">
                            </div>
                            <!-- <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
                        </div>
                        <!-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul> -->

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$product->name}}</h3>
                        <!-- <div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div> -->
                        <p class="product-description">{{$product->description}}</p>
                        <h4 class="price">current price: <span>${{$product->price}}</span></h4>
                        <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
                        <!-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5> -->
                        <!-- <h5 class="colors">colors:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5> -->

                        <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                            @csrf
                            <div class="form-group">
                                 <button class="add-to-cart btn btn-default" type="submit">add to cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection