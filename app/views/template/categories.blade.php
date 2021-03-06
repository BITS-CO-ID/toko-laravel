@extends('layouts.front')
@section('content')
<div id="maincontainer">
    <section id="product">
        <div class="container">
            <!--  breadcrumb -->  
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                    <span class="divider">/</span>
                </li>
                <li class="active">Category</li>
            </ul>
            <div class="row">        
                <!-- Sidebar Start-->
                <aside class="col-lg-3">
                    <!-- Category-->  
                    <div class="sidewidt">
                        <h2 class="heading2"><span>Categories</span></h2>
                        <ul class="nav nav-list categories">
                            <!--                            <li>
                                                            <a href="category.html">Men Accessories</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="category.html">Women Accessories</a>
                            
                                                                </li>
                                                                <li>
                                                                    <a href="category.html">Computers </a>
                                                                </li>
                                                                <li>
                                                                    <a href="category.html">Home and Furniture</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  Best Seller -->  
                    <div class="sidewidt">
                        <h2 class="heading2"><span>Best Seller</span></h2>
                        <ul class="bestseller">
                            <li>
                                <img src="img/prodcut-40x40.jpg" alt="product" title="product" height="50" width="50">
                                <a class="productname" href="product.html"> Product Name</a>
                                <span class="procategory">Women Accessories</span>
                                <span class="price">$250</span>
                            </li>
                            <li>
                                <img src="img/prodcut-40x40.jpg" alt="product" title="product" height="50" width="50">
                                <a class="productname" href="product.html"> Product Name</a>
                                <span class="procategory">Electronics</span>
                                <span class="price">$250</span>
                            </li>
                            <li>
                                <img src="img/prodcut-40x40.jpg" alt="product" title="product" height="50" width="50">
                                <a class="productname" href="product.html"> Product Name</a>
                                <span class="procategory">Electronics</span>
                                <span class="price">$250</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Latest Product -->  
                    <div class="sidewidt">
                        <h2 class="heading2"><span>Latest Products</span></h2>
                        <ul class="bestseller">
                            @foreach($latest as $last)
                            <li>
                                @if(count($last->images))
                                <img alt="product" title="product" height="50" width="50" src="{{ asset('uploads/products/thumbs/small/'.$last->images->first()->path) }}"></a>
                                @else 
                                <img src="http://placehold.it/40x40" alt="product" title="product" height="50" width="50">
                                @endif
                                <a class="productname" href="{{ route('showproduct', $last->slug) }}"> {{ $last->name }}</a>
                                <span class="procategory">{{ $last->categories->name }}</span>
                                <span class="price">{{ $last->net_price }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  Must have -->  
                    <div class="sidewidt">
                        <h2 class="heading2"><span>Must have</span></h2>
                        <div class="flexslider" id="mainslider">

                            <div style="overflow: hidden; position: relative;" class="flex-viewport">
                                <ul style="width: 800%; transition-duration: 0s; transform: translate3d(-270px, 0px, 0px);" class="slides">
                                    @if ($i=0) @endif
                                    @foreach ($musthave as $must)
                                    @if ($i === 0)
                                    <li class="flex-active-slide" style="width: 270px; float: left; display: block;">
                                        @if(count($must->images))
                                        <img alt="product" src="{{ asset('uploads/products/thumbs/medium/'.$must->images->first()->path) }}"></a>
                                        @else 
                                        <img src="http://placehold.it/270x40" alt="product" title="product" height="50" width="50">
                                        @endif
<!--                                        <img src="img/product1.jpg" alt="">-->
                                    </li>
                                    @else
                                    <li style="width: 270px; float: left; display: block;" class="clone">
                                        @if(count($must->images))
                                        <img alt="product" src="{{ asset('uploads/products/thumbs/medium/'.$must->images->first()->path) }}"></a>
                                        @else 
                                        <img src="http://placehold.it/270x200" alt="product" title="product" height="50" width="50">
                                        @endif
                                    </li>
                                    @endif
                                    <!--                                    <li class="flex-active-slide" style="width: 270px; float: left; display: block;">
                                                               <img src="img/product1.jpg" alt="">
                                                           </li>
                                                           <li class="" style="width: 270px; float: left; display: block;">
                                                               <img src="img/product2.jpg" alt="">
                                                           </li>
                                                           <li class="clone" style="width: 270px; float: left; display: block;">
                                                               <img src="img/product1.jpg" alt="">
                                                           </li>-->
                                    @if ($i++) @endif
                                    @endforeach
                                </ul>
                            </div>
                            <!--                            <ol class="flex-control-nav flex-control-paging">
                                                            <li><a class="flex-active">1</a></li>
                                                            <li><a class="">2</a></li>
                                                        </ol>-->
                            <ul class="flex-direction-nav">
                                <li><a class="flex-prev" href="#">Previous</a></li>
                                <li><a class="flex-next" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar End-->
                <!-- Category-->
                <div class="col-lg-9">          
                    <!-- Category Products-->
                    <section id="category">
                        <!-- Sorting-->
                        <div class="sorting well">
                            <form class=" form-inline pull-left">
                                Sort By :
                                <select id="sorting">
                                    <option value="created_at">Default</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                                &nbsp;&nbsp;
                                Show:
                                <select id="num">
                                    <option>1</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                </select>
                            </form>
                            <div class="btn-group pull-right">
                                <button class="btn" id="list"><i class="icon-th-list"></i>
                                </button>
                                <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                            </div>
                        </div>
                        <!-- Category-->
                        <section id="categorygrid">
                            <ul class="thumbnails grid">
                                @foreach($products as $product)
                                <li class="col-lg-4 col-sm-6">
                                    <a class="prdocutname" href="{{ route('showproduct', $product->slug) }}">{{ $product->name }}</a>
                                    <div class="thumbnail">
                                        @if(count($product->images))
                                        <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="{{ asset('uploads/products/thumbs/full/'.$product->images->first()->path) }}"></a>
                                        @else 
                                        <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="http://placehold.it/270x350"></a>
                                        @endif
                                        <div class="shortlinks">
                                            <a class="details" href="{{ route('showproduct', $product->slug) }}">DETAILS</a>
                                            <!--                                            <a class="wishlist" href="#">WISHLIST</a>
                                                                                        <a class="compare" href="#">COMPARE</a>-->
                                        </div>
                                        <div class="pricetag">
                                            <span class="spiral"></span><a href="{{ route('add_cart_get', $product->id) }}" class="productcart">ADD TO CART</a>
                                            <div class="price">
                                                <div class="pricenew">{{ $product->net_price }}</div>
                                                <div class="priceold">{{ $product->formatted_price }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="thumbnails list row">
                                @foreach($products as $product)
                                <li>
                                    <div class="thumbnail">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4">
                                                <span title="" data-original-title="" class="offer tooltip-test">Offer</span>
                                                @if(count($product->images))
                                                <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="{{ asset('uploads/products/thumbs/full/'.$product->images->first()->path) }}"></a>
                                                @else 
                                                <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="http://placehold.it/270x350"></a>
                                                @endif
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <a class="prdocutname" href="{{ route('showproduct', $product->slug) }}">{{ $product->name }}</a>
                                                <div class="productdiscrption"> {{ $product->desc }}</div>
                                                <div class="pricetag">
                                                    <span class="spiral"></span><a href="{{ route('add_cart_get', $product->id) }}" class="productcart">ADD TO CART</a>
                                                    <div class="price">
                                                        <div class="pricenew">{{ $product->net_price }}</div>
                                                        <div class="priceold">{{ $product->formatted_price }}</div>
                                                    </div>
                                                </div>
                                                <div class="shortlinks">
                                                    <a class="details" href="{{ route('showproduct', $product->slug) }}">DETAILS</a>
                                                    <!--                                                    <a class="wishlist" href="#">WISHLIST</a>
                                                                                                        <a class="compare" href="#">COMPARE</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div>
                                <?php echo $products->links(); ?>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
