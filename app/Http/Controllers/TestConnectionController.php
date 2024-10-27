<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestConnection;

class TestConnectionController extends Controller
{
    public function index()
    {
        // Fetch all entries from the test_connections table
        $testData = TestConnection::all();

        // Return the data as JSON for easy viewing
        return response()->json($testData);
    }
}
