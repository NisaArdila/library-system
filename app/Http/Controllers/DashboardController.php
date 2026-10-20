<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalMembers = User::count();
        $totalCategories = Category::count();

        return view('dashboard.index', compact(
            'totalBooks',
            'totalMembers',
            'totalCategories'
        ));
    }
}
