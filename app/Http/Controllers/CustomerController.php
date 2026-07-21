<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Tüm müşterileri getir
        $customers = Customer::all();
        
        // JSON olarak döndür
        return response()->json($customers);
    }

    public function store(Request $request)
    {
        // Yeni müşteri oluştur
        $customer = Customer::create($request->all());
        
        return response()->json($customer, 201);
    }

    public function show($id)
    {
        // Tek bir müşteri getir
        $customer = Customer::findOrFail($id);
        
        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        // Müşteri güncelle
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        
        return response()->json($customer);
    }

    public function destroy($id)
    {
        // Müşteri sil
        Customer::findOrFail($id)->delete();
        
        return response()->json(['message' => 'Silindi']);
    }
}