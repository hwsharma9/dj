@extends('admin.include.template')
@section('title','Amado - Furniture Ecommerce Template | Home')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <h3>Product List</h3>
                        <div class="panel-tools pull-right">
                            <a href="{{ URL('admin/products/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($products)
                                    <?php foreach ($products as $key => $value): ?>
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->product_name }}</td>
                                            <td>{{ $value->product_price }}</td>
                                            <td>
                                                <a href="{{ URL('admin/products/'.$value->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                {!! Form::open(['action'=>['ProductController@destroy',$value->id]]) !!}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                @else
                                    No Product Found!
                                @endif
                                <tr>
                                    <td>
                                        {{ $products->links() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection