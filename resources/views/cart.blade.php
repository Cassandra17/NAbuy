	@extends('default')

        <style media="screen" type="text/css">
          .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
          }

          @media screen and (max-width: 600px) {
            table#cart tbody td .form-control{
              width:20%;
              display: inline !important;
            }

            .actions .btn{
              width:36%;
              margin:1.5em 0;
            }
  
            .actions .btn-info{
              float:left;
            }

            .actions .btn-danger{
              float:right;
            }
  
            table#cart thead { display: none; }
            table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
            table#cart tbody tr td:first-child { background: #333; color: #fff; }
            table#cart tbody td:before {
              content: attr(data-th); font-weight: bold;
              display: inline-block; width: 8rem;
            }
  
            table#cart tfoot td{display:block; }
            table#cart tfoot td .btn{display:block;}
            } 
        </style>

        <!-- 购物车界面 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container" style="margin-top: 100px">
          <table id="cart" class="table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach ($carts as $product)
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <!-- <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div> -->
                            <div class="col-sm-10">
                              <h4 class="nomargin">{{ $product->name }}</h4>
                              <p>{{$product->attributes->desc}}</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">C$ {{ $product->price }}</td>
                        <form action="/cart/update/{{{ $product->id }}}" method="POST">
                        <td data-th="Quantity">
                          <input type="number" name="newQuantity" class="form-control text-center" value="{{ $product->quantity }}" min="1">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $product->quantity * $product->price }}</td>
                        <td class="actions" data-th="">
                          <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                          <a href="/cart/remove/{{{ $product->id }}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> 
                        </form>               
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>

                      <tr class="visible-xs">
                        <td class="text-center"><strong>Total {{ Cart::getTotal() }}</strong></td>
                      </tr>

                      <tr>
                        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td><a href="{{ url('/cart/clear') }}" class="btn btn-danger"> Empty Shopping Cart</a></td>
                        <td colspan="1" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total {{ Cart::getTotal() }}</strong></td>
                        <td>
                          <form action="{{ url('/payment') }}" method="POST" role="form" id="PaymentForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="hidden" name="price" id="price" value="{{ Cart::getTotal() }}">
                            <input type="hidden" id="stripeToken" name="stripeToken"/>
                            <input type="hidden" id="stripeEmail" name="stripeEmail"/>

                          </form>
                          <button class="btn btn-success btn-block" id="customerPayButton">Checkout <i class="fa fa-angle-right"></i></button>

                        </td>
                      </tr>
                    </tfoot>
          </table>
        </div>

@section('script')
  <script src="https://checkout.stripe.com/checkout.js"></script>
  <script src="{{{asset('./js/stripe.js')}}}"></script>-
@endsection