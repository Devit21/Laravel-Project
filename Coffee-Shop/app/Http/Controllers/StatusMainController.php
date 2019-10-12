<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_status;

/**
 * fb: Reak Smey
 * Tell: 01555225
 * Date: 10/11/2019
 */

class StatusMainController extends Controller
{

    private $status, $date, $author, $limit = 5;

    public function __construct(tbl_status $status){
        $this->status = $status;
        
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
        $status =$this->status->orderBy('status_id', 'desc')->paginate($this->limit); 

        return view('admin/status/status', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
