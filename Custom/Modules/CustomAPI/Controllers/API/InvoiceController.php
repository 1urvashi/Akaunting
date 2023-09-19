<?php

namespace CustomAPI\Controllers\API;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Invoice;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        // Validate and create invoices
        $request->validate([
            'invoice.user_id' => 'required|integer|exists:users,id',
            'invoice.amount' => 'required|numeric',
        ]);

        Invoice::create($request->input('invoice'));

        return response()->json(['message' => 'Invoice created successfully'], 201);
    }
}
