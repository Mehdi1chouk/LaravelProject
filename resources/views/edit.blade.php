
<style>
body {
  font-family: Roboto, sans-serif;
  color: #333;
}

h2 {
  margin-bottom: 20px;
}

.lead {
  font-size: 18px;
  font-weight: 300;
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: 600;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}
</style>
@extends('bootstrap')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Edit Product</h2>
            <p class="lead">Please update the following information to edit this product.</p>
            <br/>
            <form action="{{ route('update', $product->id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option selected>{{ $product->category }}</option> 
                        <option value="screen">Screen</option>
                        <option value="headphone">Headphone</option>
                        <option value="smartphone">smartphone</option>
                        <option value="printer">printer</option>
                        <option value="keyboard">keyboard</option>
                        <option value="laptop">laptop</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="photo">Product Photo</label>
                    <input class="form-control" name="photo" type="file" id="photo">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection

