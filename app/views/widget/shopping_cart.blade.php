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
                <li class="active"> Shopping Cart</li>
            </ul>       
            <h1 class="heading1"><span class="maintext"> Shopping Cart</span><span class="subtext"> All items in your  Shopping Cart</span></h1>
            <!-- Cart-->
            <div class="cart-info">

                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="image">Image</th>
                        <th class="name">Product Name</th>
                        <th class="model">Options</th>
                        <th class="quantity">Qty</th>
                        <th class="total">Action</th>
                        <th class="price">Unit Price</th>
                        <th class="total">Total</th>
                    </tr>
                    @if (Cart::count() > 0)
                    @foreach (Cart::content() as $cart)
                    {{ Form::open(array('route' => array('updatecart', $cart->rowid))) }}
                    <tr>
                        <td class="image"><a href="#"><img title="product" alt="product" src="{{ asset( $cart->options->has('image') ? 'uploads/products/thumbs/small/'.$cart->options->image : 'http://placehold.it/50x50' ) }}" height="50" width="50"></a></td>
                        <td  class="name"><a href="{{ route('showproduct', getSlug($cart->name)) }}">{{ $cart->name }}</a></td>
                        <td class="model">
                            @foreach ($options as $option)
                                {{ var_dump($option) }}
                            @endforeach
                            @foreach ($cart->options as $key => $v)
                            @if($key != 'image')
                            {{ Form::label($key, ucfirst($key)) }}
                            {{  Form::select($key, array($v => $v), $v); }}
                            @endif
                            @endforeach
                        </td>
                        <td class="quantity"><input type="text" size="1" value="{{ $cart->qty }}" name="qty" class="col-lg-1">

                        </td>
                        <td class="total">
                            <input type="image" src="{{ asset('front/img/update.png') }}" alt="Submit Form" class="tooltip-test" data-original-title="Update" style="vertical-align: middle;">
                            <a href="{{ route('remove_cart', $cart->rowid) }}"><img class="tooltip-test"  data-original-title="Remove"  src="{{ asset('front/img/remove.png') }}" alt=""></a></td>
                        <td class="price">{{ $cart->price }}</td>
                        <td class="total">{{ $cart->subtotal }}</td>
                    </tr>
                    {{ Form::close() }}
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">No Items added yet!</td>
                    </tr>
                    @endif
                </table>
            </div>
            <div class="cartoptionbox">
                <!--                <h4 class="heading4"> Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost. </h4>
                                <input type="radio" class="radio">
                                Use Coupon Code <br>
                                <input type="radio" class="radio">
                                Use Gift Voucher <br>
                                <input type="radio" class="radio" checked="checked">-->
                Estimate Shipping & Taxes <br><br>
                <form class="form-vertical form-inline">
                    <h4 class="heading4"> Enter your destination to get a shipping estimate.</h4>
                    <fieldset>
                        <div class="control-group">
                            <label  class="control-label">Select list</label>
                            <div class="controls">
                                <select  class="col-lg-3 cartcountry">
                                    <option>Country:</option>
                                    <option>United Kindom</option>
                                    <option>United States</option>
                                </select>
                                <select class="col-lg-3 cartstate">
                                    <option>Region / State:</option>
                                    <option>Angus</option>
                                    <option>highlands</option>
                                </select>
                                <input type="submit" value="Get Quotes" class="btn btn-orange">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="container">
                <div>
                    <div class="col-lg-4 pull-right">
                        <table class="table table-striped table-bordered ">
                            <tr>
                                <td><span class="extra bold">Sub-Total :</span></td>
                                <td><span class="bold">{{ Cart::total() }}</span></td>
                            </tr>
                            <tr>
                                <td><span class="extra bold">Eco Tax (10%) :</span></td>
                                <td><span class="bold">{{ (Cart::total()/100)*10 }} </span></td>
                            </tr>
<!--                            <tr>
                                <td><span class="extra bold">VAT (18.2%) :</span></td>
                                <td><span class="bold">$21.0</span></td>
                            </tr>-->
                            <tr>
                                <td><span class="extra bold totalamout">Total :</span></td>
                                <td><span class="bold totalamout">{{ Cart::total()+(Cart::total()/100)*10 }}</span></td>
                            </tr>
                        </table>
                        <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
                        <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop