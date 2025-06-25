@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Edit Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="name" 
                               id="name"
                               class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name', $product->name) }}"
                               required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price (RM) <span class="text-danger">*</span></label>
                        <input type="number" 
                               name="price" 
                               id="price"
                               class="form-control @error('price') is-invalid @enderror" 
                               value="{{ old('price', $product->price) }}"
                               step="0.01"
                               min="0"
                               required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">Details <span class="text-danger">*</span></label>
                        <textarea name="details" 
                                  id="details"
                                  class="form-control @error('details') is-invalid @enderror"
                                  rows="4"
                                  required>{{ old('details', $product->details) }}</textarea>
                        @error('details')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publish" class="form-label">Publish <span class="text-danger">*</span></label>
                        <select name="publish" 
                                id="publish" 
                                class="form-control @error('publish') is-invalid @enderror"
                                required>
                            <option value="yes" {{ old('publish', $product->publish) == 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ old('publish', $product->publish) == 'no' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('publish')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Product
                        </button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
