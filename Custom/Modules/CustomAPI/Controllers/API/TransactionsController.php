<?php

namespace CustomAPI\Controllers\API;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Banking\Transaction;

class TransactionsController extends Controller
{
    public function index(Request $request)
    {
        // Validate and create transactions
        $request->validate([
            'transactions.*.amount' => 'required|numeric',
            'transactions.*.description' => 'required|string',
        ]);

        $createdTransactions = [];

        foreach ($request->input('transactions') as $transactionData) {
            $transaction = Transaction::create($transactionData);
            $createdTransactions[] = $transaction;
        }

        return response()->json(['message' => 'Transactions created successfully', 'data' => $createdTransactions], 201);
    }
}
