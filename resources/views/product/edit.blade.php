@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{ route('product.update',$product->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 mt-3">
                                    <label class="form-label"></label>
                                    <input type="name" class="form-control" name="name" value="{{ $product->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="price" class="form-control" name="price" value="{{ $product->price }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Size</label>
                                    <input type="size" class="form-control" name="size" value="{{ $product->size }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="quantity" class="form-control" name="quantity" value="{{ $product->quantity }}">
                                </div>
                                <div class="mb-4 text-center">
                                    <button class="btn btn-outline-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
