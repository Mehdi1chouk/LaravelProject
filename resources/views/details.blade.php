

<style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  /* background-color: aquamarine; */
}

.product-container {
  display: flex;
  flex-wrap: wrap;
  max-width: 1000px;
  margin: 50px auto;
}

.product-image-wrapper {
  flex: 1;
  text-align: center;
}

.product-image {
  width: 400px;
  height: 400px;
  object-fit: cover;
  margin-right: 800px;
  margin-top:120px;
  
}

.product-details {
  flex: 1;
  padding: 20px;
}

.product-name {
  font-size: 2em;
  position: absolute;
  right:650px;
  top:70px;
  /*margin-bottom: 10px;*/
}

.product-price {
  font-weight: bold;
 /* margin-bottom: 15px;*/
  
  position: absolute;
  right:585px;
  top:550px;
  width: 120px;
}

.product-description {
  line-height: 1.5;
  position: absolute;
  right:300px;
  top:200px;
  max-width: 410px; /* Adjust width as needed */
  overflow-wrap: break-word;
  /*margin-bottom: 20px;*/
}
.description-label{
  line-height: 1.5;
  position: absolute;
  right:600px;
  top:160px;
  max-width: 410px;
  color: #008374; 
 
}

.add-to-cart {
  background-color: #008374;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  

  position: absolute;
  right:290px;
  top:650px;
  width: 380PX;
  text-align: center; 
  display: flex;      
  justify-content: center; 
  align-items: center;
}

.add-to-cart:hover {
  background-color: #023B6D;
}

.hr{
  position: fixed;
    top: 130px; 
    left: 140px; 
    width: 75%; 
}
.carreau {
    height: 50px;
    background-color:gray;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
.price-word{
  color:#008374;
}
.price{
  color: red;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Details</title> </head>
<body>
  <div class="product-container">
    <div class="product-image-wrapper">
      <img  src="{{ asset($product->photo) }}" alt="Product Image" class="product-image">  </div>
    <div class="product-details">
      <h1 class="product-name">{{ $product->name }}</h1>
      <hr class="hr">
      <h3 class="description-label">Description:</h3>
      <p class="product-description"> {{ $product->description }}</p>
      <div class="product-price"><h3 class="price-word">Price:</h3><h3 class="price"> {{ $product->price }} DT</h3></div>
      
      <a href="{{ route('paiement', $product->id) }}" class="add-to-cart">Add to Cart</a>
  </div>
  
</body>
</html>

