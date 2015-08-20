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
	
                                  <tr>
                                      <td><a href=" >id }}}">{{ $purchased->ServiceName }}</a ></td>
                                      <td class="hidden-phone">{{ $purchased->UserName }}</td>
                                      <td>2015-08-31</td>
                                      <td><span class="label label-info label-mini">Online</span></td>
                                      <td>
                                          <a href="/home/purchased/{{{ $purchased->id }}}" type="button" class="btn btn-red btn-primary btn-xs"><i class="fa fa-pencil"></i></a >
                                      </td>
                                  </tr>
                                  @endforeach
        <div class="container" style="margin-top: 100px">
          <div class="well well-sm">
           <strong>Category</strong>
            <div class="btn-group">
              <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
              </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
          </div>


          @foreach ($purchase as $purchased)
          <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-4">
              <div class="thumbnail">
                  <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                  <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <p class="lead">
                              $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
          @endforeach

          <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                  <h4 class="group inner list-group-item-heading">
                      Product title</h4>
                  <p class="group inner list-group-item-text">
                      Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                      sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                        <p class="lead">
                            $21.000</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                  <h4 class="group inner list-group-item-heading">
                      Product title</h4>
                  <p class="group inner list-group-item-text">
                      Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                      sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                        <p class="lead">
                            $21.000</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
    

