<style>
  .card {
    width: 16rem;
    height: 20rem; 
    margin-right: -60px;
    margin-left: 190px;
    margin-top: 50px;
   
  }
 
  .card-container {
    display: flex;
    justify-content: flex-start;
    flex-wrap: wrap;
  }
  footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            position:relative;
            left: 0;
            bottom: 0;
            width: 100%;
        }
</style>

@extends('bootstrap')

<div class="card-container">

@foreach($products as $item)
<div class="card" style="width: 18rem;">
      <img src="{{ asset($item->photo) }}" class="card-img-top" alt="{{ $item->name }}">  <div class="card-body">
        <h5 class="card-title">{{ $item->name }}</h5>

        <h4 class="card-title">{{ $item->price }} DT</h4>
        <p class="card-text">{{ Str::limit($item->description, 100) }}</p> 
        <a href="{{ route('details', $item->id) }}" class="btn btn-primary">View Details</a>  </div>
    </div>
    @endforeach
</div>

    
