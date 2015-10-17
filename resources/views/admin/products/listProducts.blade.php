@extends('admin.layouts.default') 

@section('content') 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            产品列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>图片</th>
                                            <th>名称</th>
                                            <th>简介</th>
                                            <th>价格</th>
                                            <th>管理操作</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($products as $product)
                                        <tr>
                                            <td><img class="group list-group-image" src="../{{ $product->pic }}" alt="" /></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->desc }} </td>
                                            <td class="center">C ${{ $product->price }}</td>
                                            <td class="center">
                                                <a href="/admin/products/edit/{{{ $product->id }}}" class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button> 
                                                <a href="/admin/products/remove/{{{ $product->id }}}" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button> 
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
@endsection

@section('js')
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
@endsection


