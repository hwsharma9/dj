@extends('admin.include.template')
@section('title','Amado - Furniture Ecommerce Template | Home')
@section('content')
<div class="content-wrapper">
    <section class="content">
        {!! Form::open(['route'=>'add.product']) !!}
            <div class="panel panel-primary">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" class="form-control" placeholder="Product Price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="product_desc" class="form-control" cols="30" rows="10" placeholder="Product Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Images</label>
                                    <input type="file" name="image_path">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h3>Category List</h3>
                                <ul id="tree1">
                                    @foreach($categories as $category)
                                    <li>
                                        {{ $category->title }}
                                        <input type="checkbox" name="{{ $category->id }}">
                                        @if(count($category->childs))
                                            @include('admin.manageChild',['childs' => $category->childs,'checkbox'=>true,'id'=>$category->id])
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
</div>
@endsection