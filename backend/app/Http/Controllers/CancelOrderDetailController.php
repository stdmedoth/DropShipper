<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCancelOrderDetailRequest;
use App\Http\Requests\UpdateCancelOrderDetailRequest;
use App\Models\CancelOrderDetail;

class CancelOrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCancelOrderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCancelOrderDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CancelOrderDetail  $cancelOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CancelOrderDetail $cancelOrderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CancelOrderDetail  $cancelOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CancelOrderDetail $cancelOrderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCancelOrderDetailRequest  $request
     * @param  \App\Models\CancelOrderDetail  $cancelOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCancelOrderDetailRequest $request, CancelOrderDetail $cancelOrderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CancelOrderDetail  $cancelOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CancelOrderDetail $cancelOrderDetail)
    {
        //
    }
}
