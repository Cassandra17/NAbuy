@extends('admin.layouts.default') 

@section('content') 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">添加商品</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            商品信息
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::open(array('url'=>'admin/products/add','method'=>'POST', 'files'=>true)) !!}

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            {!! Form::label('product_name','商品名称') !!}
                                            {!! Form::text('product_name', null, ['class'=>'form-control', 'placeholder'=>"输入商品名称信息"])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('product_price','商品价格') !!}
                                            {!! Form::text('product_price', null, ['class'=>'form-control', 'placeholder'=>"输入商品名称价格"])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('product_desc','商品简介') !!}
                                            {!! Form::textarea('product_desc', null, ['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('image','商品图片') !!}
                                            {!! Form::file('image', null, ['class'=>'form-control' ]) !!}
                                        </div>

                                          {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                                          {!! Form::reset('Reset', array('class'=>'btn btn-default')) !!}
                                          {!! Form::close() !!}
                                </div>
 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

@endsection