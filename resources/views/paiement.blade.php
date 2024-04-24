<style>
.payment-container {
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 5px;
  margin-top: 70px;
}

.payment-legend {
  color: #008374;
  font-weight: bold;
}
.payment-title{
    font-weight: bold;
}

.payment-form {
  border: none;
}

.btn-primary {
  background-color: #008374;
  border-color: #008374;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
}

.btn-secondary {
  margin-left: 10px;
  border-color: #ccc;
}

.form-control {
  border-color: #ccc;
}
</style>
@extends('bootstrap')
@section('content')
<div class="container payment-container"> 
    <h1 class="payment-title">Payment for {{ $product->name }}</h1>

    <form class="payment-form" action="{{ route('payment.store', $product->id) }}" method="POST" enctype="multipart/form-data">
  @csrf 
  <fieldset>
      <legend class="payment-legend">Billing Information</legend> 
      <div class="row mb-3">
        <label for="nom" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <label for="prenom" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="adresse" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label for="codePostal" class="col-sm-2 col-form-label">Postal Code</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="codePostal" name="codePostal" required>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Payment Method</label>
        <div class="col-sm-4">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pm" value="cash" required>
            <label class="form-check-label" for="cash">Cash</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pm" value="card" required>
            <label class="form-check-label" for="card">Card</label>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-primary">Buy Now</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
@endsection


