<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PaymentController extends Controller
{
    public function store(Request $request, $productId)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'required|string',
            'codePostal' => 'required|numeric',
            'pm' => 'required|in:cash,card', 
        ]);
    
        // Create a new Order instance
        $order = new Order();
        $order->name = $validatedData['nom'] ;
        $order->prenom = $validatedData['prenom'];
        $order->address = $validatedData['adresse'];
        $order->postal_code = $validatedData['codePostal'];
        $order->payment_method = $validatedData['pm'];
        $order->product_id = $productId; 
        $order->save();

        echo "<script>";
    echo "if(confirm('Thank you for your order!')) {";
    echo "window.location.href = 'http://127.0.0.1:8000/dashboard';";
    echo "}";
    echo "</script>";
    
    }
}
