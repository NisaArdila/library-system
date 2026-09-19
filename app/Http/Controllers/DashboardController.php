<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    // Membuat data jumlah dummy
    $totalBooks = 10;
    $totalMembers = 5;
    $totalCategories = 5;

    return view('dashboard.index', compact('totalBooks', 'totalMembers', 'totalCategories'));
    }
}
