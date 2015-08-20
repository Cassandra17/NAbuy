<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $user = \App\User::find(1);

        $user->charge($request->get('price'), [
            //'source' => $request->get('StripeToken'),
            'source' => $request->get('stripeToken'),
            'receipt_email' => $user->email,
        ]);

        $services = new \App\Services;
        $services->Username = $request->get('account');
        $services->Attribute = "MD5-Password";
        $services->op = ":=";
        $services->Value = md5($request->get('password'));

        $services->save();
        


        $purchesed = new \App\Purchese;
        $purchesed->Username = $request->get('account');
        $purchesed->PassWord = $request->get('password');
        $purchesed->user_id = $user->id;

        // 3000 半年套餐 - Half Year $30 USD
        // 5000 一年套餐 - One Year $50 USD (半年后可换海龟套餐)
        // 9000 两年套餐 - Two Year $90 USD (可随时切换海龟套餐)
        // 8800 一年双套餐 - One Year With Project Beijing $88 USD (推荐)

        // if ($request->get('price') == 3000) 
        // {
        //     $serviceNameSet = "云端套餐 30 USD 半年套餐";
        // }

        // if ($request->get('price') == 5000) 
        // {
        //     $serviceNameSet = "云端套餐 50 USD 一年套餐";
        // }

        // if ($request->get('price') == 9000) 
        // {
        //     $serviceNameSet = "云端套餐 90 USD 两年套餐";
        // }

        // if ($request->get('price') == 8800) 
        // {
        //     $serviceNameSet = "云端海龟套餐 88 USD 一年套餐";
        // }

        $purchesed->ServiceName = $serviceNameSet;
        $purchesed->save();

        return redirect($this->homePath());

    }    

    //     public function homePath()
    // {
    //     return property_exists($this, 'homePath') ? $this->homePath : '/home';
    // }

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
