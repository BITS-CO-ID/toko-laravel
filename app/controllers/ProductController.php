<?php

class ProductController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $product;
    protected $layout = 'layouts.front';

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function index() {
        //
        $this->layout->content = View::make('products.product_details');
    }

    public function view_cart() {
        $this->data['options'] = Attribute::all();
        $this->layout->content = View::make('products.shopping_cart', $this->data);
    }

    public function add_cart($id) {
        $name = $this->product->where('id', $id)->first();
        $options = Input::except('qty', 'price', '_token');
        $data = array(
            'id' => $id,
            'name' => $name->name,
            'qty' => (Input::get('qty') ? Input::get('qty') : 1),
            'price' => $name->unformatted_net_price,
            'options' => $options
        );
        Cart::associate('Product')->add($data);
        return Redirect::back();
    }

    public function update_cart($id) {
        $cart = Cart::get($id);
        $name = $this->product->where('id', $cart->id)->first();
        $options = Input::except('qty', 'x', '_token', 'y');
        Cart::update($id, array('qty' => Input::get('qty'), 'options' => $options));
        return Redirect::back();
    }

    public function checkout() {
        $this->layout->content = View::make('products.checkout');
    }

    public function remove_cart($rowid) {
        Cart::remove($rowid);
        return Redirect::back();
    }

    public function category($slug = null) {
        $this->data['categories'] = Category::all();
        $this->data['latest'] = $this->product->take(4)->orderBy('created_at', 'desc')->get();
        $this->data['musthave'] = $this->product->take(4)->orderBy(DB::raw('RAND()'))->get();
        if (!Request::ajax()) {
            if ($slug != null) {
                $this->data['products'] = Product::whereHas('categories', function($query) use ($slug) {
                            $query->where('slug', '=', $slug);
                        })->paginate(5);
            } else {
                $this->data['products'] = Product::paginate(5);
            }
            $this->layout->content = View::make('template.categories', $this->data);
        } else {
            if ($slug != null) {
                $this->data['products'] = Product::whereHas('categories', function($query) use ($slug) {
                            $query->where('slug', '=', $slug);
                        })->orderBy(Input::get('data') == '' ? 'created_at' : Input::get('data'),'asc')->paginate(Input::get('num'));
            } else {
                $this->data['products'] = Product::orderBy(Input::get('data') == '' ? 'created_at' : Input::get('data'),'asc')->paginate(Input::get('num'));
            }
            return View::make('products.results', $this->data)->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug) {
        //
        $this->data['product'] = $this->product->where('slug', $slug)->first();
        $this->data['related'] = $this->product->take(4)->orderBy(DB::raw('RAND()'))->where('cat_id', $this->data['product']->cat_id)->get();
        $this->layout->content = View::make('products.product_details', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
