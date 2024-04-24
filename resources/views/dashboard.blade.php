
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


    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/screen.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;">
      <div class="card-body">
        <h5 class="card-title">Screens</h5>
        <p class="card-text">Elevate your viewing experience with our selection of screens – click here for immersive visuals, vibrant colors, and superior clarity.</p>
        <a href="{{ route('category', 'screen') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>



    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/printer.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;">
      <div class="card-body">
        <h5 class="card-title">Printers</h5>
        <p class="card-text">Transform your digital world into tangible creations with our printers – click here for professional-quality prints.</p>
        <a href="{{ route('category', 'printer') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>



    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/smartphone.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;margin-top:10px;">
      <div class="card-body">
        <h5 class="card-title">Smartphones</h5>
        <p class="card-text">Unlock innovation with our selection of smartphones – click here for the latest in connectivity,functionality.</p>
        <a href="{{ route('category', 'smartphone') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>

</div>


<div class="card-container">


    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/keybord.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;">
      <div class="card-body">
        <h5 class="card-title">Keyboards</h5>
        <p class="card-text">Enhance your typing experience with our range of keyboards – click here for precision, comfort, and style at your fingertips</p>
        <a href="{{ route('category', 'keyboard') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>



    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/laptop.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;">
      <div class="card-body">
        <h5 class="card-title">Laptops</h5>
        <p class="card-text">Discover our exceptional range of laptops – click here for cutting-edge technology, performance, and portability</p>
        <a href="{{ route('category', 'laptop') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>



    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/images/headphone.png') }}" class="card-img-top" alt="..." style="max-width:150px; max-height: 150px;margin-left : 70px;margin-top:10px;">
      <div class="card-body">
        <h5 class="card-title">Headphones</h5>
        <p class="card-text">Explore our stunning collection of premium headphones – click here for an auditory journey into unparalleled sound quality</p>
        <a href="{{ route('category', 'headphone') }}" class="btn btn-primary" style="margin-left:60px;margin-top:10px;">view products</a>
      </div>
    </div>

</div>
<br>
<br>
<br>

<footer>
        <p></p>
    </footer>

  

   