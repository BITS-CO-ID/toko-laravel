@extends('layouts.front')
@section('content')
<section id="product">
    <div class="container">      
        <!-- Product Details-->
        <div class="row">
            <!-- Left Image-->
            <div class="col-lg-5">
                <ul class="thumbnails mainimage">
                    @foreach ($product->images as $image)
                    <li>
                        <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{ asset('uploads/products/originals/'.$image->path) }}">
                            <img src="{{ asset('uploads/products/thumbs/full/'.$image->path) }}" alt="" title="">
                        </a>
                    </li>
                    @endforeach
                </ul>
                <span>Mouse move on Image to zoom</span>
                <ul class="thumbnails mainimage">
                    @foreach ($product->images as $image)
                    <li class="producthtumb">
                        <a class="thumbnail" >
                            <img  src="{{ asset('uploads/products/thumbs/full/'.$image->path) }}" alt="" title="">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Right Details-->
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="productname"><span class="bgnone">{{ $product->name }}</span></h1>
                        <div class="productprice">
                            <div class="productpageprice">
                                <span class="spiral"></span>{{ $product->net_price }}</div>
                            <div class="productpageoldprice">Old price : {{ $product->formatted_price }}</div>
                            <!--                            <ul class="rate">
                                                            <li class="on"></li>
                                                            <li class="on"></li>
                                                            <li class="on"></li>
                                                            <li class="off"></li>
                                                            <li class="off"></li>
                                                        </ul>-->
                        </div>
                        <div class="quantitybox">
                            @foreach ($product->attributes as $attr)
                            <select class="{{ $attr->name }}">
                                <option>Select {{ $attr->name }}</option>
                                @foreach($attr->values as $value)
                                <option>{{ $value->value }}</option>
                                @endforeach
                            </select>
                            @endforeach
                            <div class="clear"></div>
                        </div>
                        <ul class="productpagecart">
                            <li><a class="cart" href="#">Add to Cart</a>
                            </li>
                            <!--                            <li><a class="wish" href="#" >Add to Wishlist</a>
                                                        </li>
                                                        <li><a class="comare" href="#" >Add to Compare</a>
                                                        </li>-->
                        </ul>
                        <!-- Product Description tab & comments-->
                        <div class="productdesc">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#description">Description</a>
                                </li>
                                <li><a href="#specification">Specification</a>
                                </li>
                                <li><a href="#review">Review</a>
                                </li>
                                <li><a href="#producttag">Tags</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <h2>h2 tag will be appear</h2>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                                    <br>
                                    <ul class="listoption3">
                                        <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit </li>
                                        <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                                    </ul>
                                </div>
                                <div class="tab-pane " id="specification">
                                    <ul class="productinfo">
                                        <li>
                                            <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                                        <li>
                                            <span class="productinfoleft"> Reward Points:</span> 60 </li>
                                        <li>
                                            <span class="productinfoleft"> Availability: </span> In Stock </li>
                                        <li>
                                            <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                                        <li>
                                            <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                                        <li>
                                            <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                                        <li>
                                            <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                                        <li>
                                            <span class="productinfoleft"> Reward Points:</span> 60 </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="review">
                                    <h3>Write a Review</h3>
                                    <form class="form-vertical">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label">Text input</label>
                                                <div class="controls">
                                                    <input type="text" class="col-lg-3">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Textarea</label>
                                                <div class="controls">
                                                    <textarea rows="3"  class="col-lg-3"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <input type="submit" class="btn btn-orange" value="continue">
                                    </form>
                                </div>
                                <div class="tab-pane" id="producttag">
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                                        <br>
                                    </p>
                                    <ul class="tags">
                                        <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> html</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> html</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> css</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> css</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> css</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                        </li>
                                        <li><a href="#"><i class="icon-tag"></i> html</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Related Products-->
<section id="related" class="row">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Related Products</span><span class="subtext"> See Our Most featured Products</span></h1>
        <ul class="thumbnails">
            @foreach ($related as $rel_pro)
            <li class="col-lg-3 col-sm-3">
                <a class="prdocutname" href="{{ route('showproduct', $rel_pro->slug) }}">{{ $rel_pro->name }}</a>
                <div class="thumbnail">
                    @if(count($rel_pro->images))
                    <a href="{{ route('showproduct', $rel_pro->slug) }}"><img alt="" src="{{ asset('uploads/products/thumbs/full/'.$rel_pro->images->first()->path) }}"></a>
                    @else 
                    <a href="{{ route('showproduct', $rel_pro->slug) }}"><img alt="" src="http://placehold.it/270x350"></a>
                    @endif
                    <div class="shortlinks">
                        <a class="details" href="{{ route('showproduct', $rel_pro->slug) }}">DETAILS</a>
<!--                        <a class="wishlist" href="#">WISHLIST</a>
                        <a class="compare" href="#">COMPARE</a>-->
                    </div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">{{ $rel_pro->net_price }}</div>
                            <div class="priceold">{{ $rel_pro->formatted_price }}</div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<!-- Popular Brands-->
<!--<section id="popularbrands" class="container">
    <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
    <div class="brandcarousalrelative">
        <ul id="brandcarousal">
            <li><img src="img/brand1.jpg" alt="" title=""/></li>
            <li><img src="img/brand2.jpg" alt="" title=""/></li>
            <li><img src="img/brand3.jpg" alt="" title=""/></li>
            <li><img src="img/brand4.jpg" alt="" title=""/></li>
            <li><img src="img/brand1.jpg" alt="" title=""/></li>
            <li><img src="img/brand2.jpg" alt="" title=""/></li>
            <li><img src="img/brand3.jpg" alt="" title=""/></li>
            <li><img src="img/brand4.jpg" alt="" title=""/></li>
            <li><img src="img/brand1.jpg" alt="" title=""/></li>
            <li><img src="img/brand2.jpg" alt="" title=""/></li>
            <li><img src="img/brand3.jpg" alt="" title=""/></li>
            <li><img src="img/brand4.jpg" alt="" title=""/></li>
        </ul>
        <div class="clearfix"></div>
        <a id="prev" class="prev" href="#">&lt;</a>
        <a id="next" class="next" href="#">&gt;</a>
    </div>
</section>-->
<script>
$('.productcart').on('click', function(e) {
    var cart = $('.carticon');
    var imgtodrag = $(this).parent('.mainimage').find("img").eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

        setTimeout(function() {
            cart.effect("shake", {
                times: 2
            }, 200);
        }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function() {
            $(this).detach()
        });
    }
    e.preventDefault();
    return false;
});
            </script>
@stop