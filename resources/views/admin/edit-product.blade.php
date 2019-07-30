@extends('admin.include.template')
@section('title','Amado - Furniture Ecommerce Template | Home')
@section('content')
<div class="content-wrapper">
    <section class="content">
        {!! Form::open(['action'=>['ProductController@update',$product->id],"files"=>true]) !!}
            <!-- <input type="hidden" name="_method" value="PUT"> -->
            {{ method_field('PATCH') }}
            <div class="panel panel-primary">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="Product Name">
                                    @if ($errors->has('product_price'))
                                        <span class="error">{{ $errors->first('product_price') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" value="{{ $product->product_price }}" class="form-control" placeholder="Product Price">
                                    @if ($errors->has('product_price'))
                                        <span class="error">{{ $errors->first('product_price') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="product_desc" class="form-control" cols="30" rows="10" placeholder="Product Description">{{ $product->product_desc }}</textarea>
                                    @if ($errors->has('product_desc'))
                                        <span class="error">{{ $errors->first('product_desc') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Images</label>
                                    @if (!empty($product->image_path))
                                        <img src="{{ asset($product->image_path) }}" alt="{{ basename($product->image_path) }}" style="height: 200px;">
                                    @else
                                        <input type="file" name="image_path">
                                    @endif
                                    @if ($errors->has('image_path'))
                                        <span class="error">{{ $errors->first('image_path') }}</span>
                                    @endif
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