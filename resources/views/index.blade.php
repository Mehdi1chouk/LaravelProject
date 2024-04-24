<style>
body {
  font-family: Roboto, sans-serif;
  color: #333;
}

.table {
  border-color: #ddd;
}

.table th,
.table td {
  vertical-align: middle;
  padding: 10px 15px;
}

.table thead th {
  color: #fff;
  background-color: #008374;
  border-color: #008374;
}

.table tbody tr:nth-child(odd) {
  background-color: #f9fafb;
}

.table-responsive {
  overflow-x: auto;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-danger {
  background-color: #dc3545;
  border-color: #dc3545;
}

.img-thumbnail {
  border: 1px solid #ddd;
  border-radius: .25rem;
  max-width: 100%;
  height: auto;
}
</style>
@extends('bootstrap') <!-- Assuming you have a layout file named 'app.blade.php' -->

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <h2>Products</h2>
      <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm" title="Add New Product">
        <i class="fas fa-plus" aria-hidden="true"></i> Add New
      </a>
      <br/>
      <br/>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ Str::limit($product->description, 40) }}...</td>
                <td>
                  @if($product->photo)
                    <img src="{{ asset($product->photo) }}" alt="{{ $product->name }}" width="50" height="50" class="img-thumbnail">
                  @endif
                </td>
                <td><a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Edit</a></td>

                <td>
                  <form action="{{ route('destroy', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
