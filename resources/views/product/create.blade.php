@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{route('product.store')}}" method="post">
                                @csrf
                                <div class="mb-2 mt-2">
                                    <label class="form-label">Name<small class="text-danger">*</small></label>
                                    <input type="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price<small class="text-danger">*</small></label>
                                    <input type="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" name="price">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Size<small class="text-danger">*</small></label>
                                    <input type="size" value="{{ old('size') }}" class="form-control @error('size') is-invalid @enderror" name="size">
                                    @error('size')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantity<small class="text-danger">*</small></label>
                                    <input type="quantity" value="{{ old('quantity') }}" class="form-control @error('quantity') is-invalid @enderror " name="quantity">
                                    @error('quantity')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Submit</button>
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
