@extends('default')

        <style type="text/css">
          .glyphicon { margin-right:5px; }
          .thumbnail
          {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
          }

          .item.list-group-item
          {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
          }
          .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
          {
            background: #428bca;
          }
            
          .item.list-group-item .list-group-image
          {
            margin-right: 10px;
          }

          .item.list-group-item .thumbnail
          {
            margin-bottom: 0px;
          }

          .item.list-group-item .caption
          {
            padding: 9px 9px 0px 9px;
          }

          .item.list-group-item:nth-of-type(odd)
          {
            background: #eeeeee;
          }

          .item.list-group-item:before, .item.list-group-item:after
          {
            display: table;
            content: " ";
          }

          .item.list-group-item img
          {
            float: left;
          }

          .item.list-group-item:after
          {
            clear: both;
          }
          .list-group-item-text
          {
            margin: 0 0 11px;
          }
        </style>
<div class="container" style="margin-top: 100px">
      <div class="well well-sm">
            <strong>Category</strong>
            <div class="btn-group">
                  <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                  </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
       </div>

      <div id="products" class="row list-group">

            @foreach ($products as $product)
            <div class="item  col-xs-4 col-lg-4">
                  <div class="thumbnail">
                  <img class="group list-group-image" src="{{ $product->pic }}" alt="" />
                  <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{ $product->name }}
                    </h4>
                    <p class="group inner list-group-item-text">
                        {{ $product->desc }}    
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <p class="lead">
                              C ${{ $product->price }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            
                            <form id="cart-form" action="{{ url('/cart/add') }}" method="POST">
                              
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-8 col-sm-offset-3">
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="form-control" value="1">
                                  </div>
                                </div>
                              </div>
                              
                              <input type="hidden" name="productId" value="{{ $product->id }}">

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-8 col-sm-offset-3">
                                    <input type="submit" name="cart-submit" id="cart-submit" class="form-control btn btn-success" value="加入购物车">
                                  </div>
                                </div>
                              </div>

                            </form>

                        </div>
                    </div>
                  </div>
              </div>
          </div>
          @endforeach


    </div>
</div>
        
    

