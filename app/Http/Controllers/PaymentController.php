<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        return view('cart');
    }


    public function postBuy(Request $request)
    {
        $subtotal = (float) Cart::getTotal() * 100;

        $user = \App\User::find(1);

        $user->charge($subtotal, [
            'source' => $request->get('stripeToken'),
            'receipt_email' => $user->email,
        ]);


        $purchase = new \App\Purchase;
        $purchase->orderName = md5($request->get('stripeToken'));

        $purchase->save();

        $itemsArray = array();
        $cartItems = Cart::getContent()->toArray();

        $item = \App\Purchase::where('orderName', md5($request->get('stripeToken')))->first();

        foreach ($cartItems as $cartItem){

            
            $item->purchases()->attach($cartItem['id'], ['quantity' => (string) $cartItem['quantity'] ]);
        }

        $item->users()->attach($user->id);

        return redirect('/');
    }    


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
