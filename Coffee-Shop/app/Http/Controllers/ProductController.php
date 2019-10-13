<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_product;

class ProductController extends Controller
{

    private $products, $limit = 5;

    public function __construct(Tbl_product $products){
        $this->products = $products;

        date_default_timezone_set ( 'Asia/Phnom_Penh' );
		$this->date = date ( "Y-m-d H:i:s" );

        
        

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =$this->products->orderBy('p_id', 'asc')->paginate($this->limit); 
        return view('admin/product/main/product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product/main/add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->products-> p_name        =  $request->txtName;
        $this->products-> price         =  $request->txtPrice;
        $this->products-> created_at    =  $this->date;
        $this->products->  	updated_at  =  $this->date;
        $this->products->save();
        $request->session()->flash('message','<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Intert Success!</strong>.
      </div>');

        return back();
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = preg_replace ( '#[^0-9]#', '', $id );
    	 
    	if($id != "" && !empty($id)) {
    	
    		$products = $this->products->where('p_id',$id)->first();
    	
    		if ($products){
    			return view('admin.product.main.edit_products', compact('products'));
    		}
    	}
    	 
    	return redirect('main/product.html');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $id = preg_replace ( '#[^0-9]#', '',  $request->txtId );

    	// if ( !empty($id)) {
    	// 	//update process here
    	// 	$this->products->where('p_id', $id)->update([
    	// 			'p_name' 			=>  $request->txtName,
    	// 			'price'          	=>  $request->txtDescription,
    	// 			'updated_at' 			=>  $this->date
    	// 	]);
    		
    	// 	$request->session()->flash('message','<div class="alert alert-success">
        //                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //                                       <strong>update Success!</strong>.
        //                                     </div>');
    		
    	// 	return back();
    	// }else {
    	// 	return redirect('main/status.html');
        // }
        die('hello');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $id = preg_replace ( '#[^0-9]#', '',  $id );
    	
    	if ( !empty($id)) {
    		//delete action here 
    		$this->products->where('p_id', $id)->delete();
    		
    		$request->session()->flash('message','<div class="alert alert-success">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <strong>Delete Success!</strong>.
                                            </div>');
    		
    	} 
    	return redirect('main/product.html');

    }
}
