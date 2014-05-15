<div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <a href="index.html" class="logo pull-left"><img src="{{ asset(getOptions('logo')) }}" alt="SimpleOne" title="SimpleOne"></a> 
                    <!-- Top Nav Start -->
                    <div class="pull-left">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <li><a class="home active" href="#">Home</a> </li>
                                    <li><a class="myaccount" href="#">My Account</a> </li>
                                    <li><a class="shoppingcart" href="#">Shopping Cart</a> </li>
                                    <li><a class="checkout" href="#">CheckOut</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->
                    <div class="pull-right">
                        <form class="form-search top-search">
                            <input type="text" class="input-medium search-query" placeholder="Search Here…">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="headerdetails">
            <div class="pull-left">
<!--                <ul class="nav language pull-left">
                    <li class="dropdown hover"> <a href="#" class="dropdown-toggle" data-toggle="">US Doller <b class="caret"></b></a>
                        <ul class="dropdown-menu currency">
                            <li><a href="#">US Doller</a> </li>
                            <li><a href="#">Euro </a> </li>
                            <li><a href="#">British Pound</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown hover"> <a href="#" class="dropdown-toggle" data-toggle="">English <b class="caret"></b></a>
                        <ul class="dropdown-menu language">
                            <li><a href="#">English</a> </li>
                            <li><a href="#">Spanish</a> </li>
                            <li><a href="#">German</a> </li>
                        </ul>
                    </li>
                </ul>-->
            </div>
            <div class="pull-right">
                <ul class="nav topcart pull-left">
                    <li class="dropdown hover carticon "> <a href="#" class="dropdown-toggle" > Shopping Cart <span class="label label-orange font14">{{ Cart::count() }} item(s)</span> - {{ Cart::total() }} <b class="caret"></b></a>
                        <ul class="dropdown-menu topcartopen ">
                            <li>
                                <table>
                                    <tbody>
                                        @foreach (Cart::content() as $row)
                                        <tr>
                                            <td class="image"><a href="product.html"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                                            <td class="name"><a href="product.html">{{ $row->name }}</a></td>
                                            <td class="quantity">x&nbsp;{{$row->qty}}</td>
                                            <td class="total">{{$row->subtotal}}</td>
                                            <td class="remove"><a href="{{ route('remove_cart', $row->rowid) }}"><i class="icon-remove"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
<!--                                        <tr>
                                            <td class="textright"><b>Sub-Total:</b></td>
                                            <td class="textright">{{Cart::total() }}</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>Eco Tax (-2.00):</b></td>
                                            <td class="textright">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>VAT (17.5%):</b></td>
                                            <td class="textright">$87.50</td>
                                        </tr>-->
                                        <tr>
                                            <td class="textright"><b>Total:</b></td>
                                            <td class="textright">{{ Cart::total() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="#">View Cart</a> <a class="btn btn-orange" href="#">Checkout</a> </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="categorymenu">
            <nav class="subnav">
                {{ menu() }}
<!--                <ul class="nav-pills categorymenu">
                    <li><a class="active"  href="index.html">Home</a>
                        <div>
                            <ul>
                                <li><a href="index2.html">Home Style 2</a>
                                    <div>
                                        <ul>
                                            <li><a href="product.html">Product style 1</a> </li>
                                            <li><a href="product2.html">Product style 2</a> </li>
                                            <li><a href="#"> Women's Accessories</a> </li>
                                            <li><a href="#">Men's Accessories <span class="label label-success">Sale</span> </a> </li>
                                            <li><a href="#">Dresses </a> </li>
                                            <li><a href="#">Shoes <span class="label label-warning">(25)</span> </a> </li>
                                            <li><a href="#">Bags <span class="label label-info">(new)</span> </a> </li>
                                            <li><a href="#">Sunglasses </a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="index3.html">Home Style 3</a> </li>
                                <li><a href="index4.html">Home Style 4</a> </li>
                                <li><a href="index5.html">Home Style 5</a> </li>
                                <li><a href="index6.html">Home Style 6</a> </li>
                                <li><a href="index.html">Home Style 1</a>
                                    <div>
                                        <ul>
                                            <li><a href="product.html">Product style 1</a> </li>
                                            <li><a href="product2.html">Product style 2</a> </li>
                                            <li><a href="#"> Women's Accessories</a> </li>
                                            <li><a href="#">Men's Accessories <span class="label label-success">Sale</span> </a> </li>
                                            <li><a href="#">Dresses </a> </li>
                                            <li><a href="#">Shoes <span class="label label-warning">(25)</span> </a> </li>
                                            <li><a href="#">Bags <span class="label label-info">(new)</span> </a> </li>
                                            <li><a href="#">Sunglasses </a> </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="product.html">Products</a>
                        <div>
                            <ul>
                                <li><a href="product.html">Product style 1</a> </li>
                                <li><a href="product2.html">Product style 2</a> </li>
                                <li><a href="#"> Women's Accessories</a> </li>
                                <li><a href="#">Men's Accessories <span class="label label-success">Sale</span> </a> </li>
                                <li><a href="#">Dresses </a> </li>
                                <li><a href="#">Shoes <span class="label label-warning">(25)</span> </a> </li>
                                <li><a href="#">Bags <span class="label label-info">(new)</span> </a> </li>
                                <li><a href="#">Sunglasses </a> </li>
                            </ul>
                            <ul>
                                <li><img style="display:block" src="img/proudctbanner.jpg" alt="" title="" > </li>
                            </ul>
                        </div>
                    </li>
                    <li><a  href="category.html">Categories</a> </li>
                    <li><a href="shopping-cart.html">Shopping Cart</a> </li>
                    <li><a href="checkout.html">Checkout</a> </li>
                    <li><a href="compare.html">Compare</a> </li>
                    <li><a href="blog.html">Blog</a>
                        <div>
                            <ul>
                                <li><a href="blog.html">Blog page</a> </li>
                                <li><a href="bloglist.html">Blog List VIew</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="portfoliolist.html">Portfolio</a>
                        <div>
                            <ul>
                                <li><a href="portfolio.html">Portfolio</a> </li>
                                <li><a href="portfoliolist.html">Portfolio List</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="myaccount.html">My Account & other</a>
                        <div>
                            <ul>
                                <li><a href="myaccount.html">My Account</a> </li>
                                <li><a href="login.html">Login</a> </li>
                                <li><a href="register.html">Register</a> </li>
                                <li><a href="wishlist.html">Wishlist</a> </li>
                                <li><a href="contact.html">Contact</a> </li>
                                <li><a href="page-404.html">404</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="features.html">Features</a> </li>
                </ul>-->
            </nav>
        </div>
    </div>