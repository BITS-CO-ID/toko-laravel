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

    public function add_cart($id) {
        $name = $this->product->where('id',$id)->first();
        $options = Input::except('qty','price','_token');
        $data = array(
            'id' => $id,
            'name' => $name->name,
            'qty' => intval(Input::get('qty')),
            'price' => $name->unformatted_net_price,
            'options' => $options
        );
        Cart::add($data);
        return Redirect::back();
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
