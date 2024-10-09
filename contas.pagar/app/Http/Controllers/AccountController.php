<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index() {
        $accounts = auth()->user()->isAdmin() ? Account::all() : auth()->user()->accounts;
        return view('accounts.index', compact('accounts'));

        if (!auth()->user()->can('manage-accounts')) {
            abort(403);
        }
        
    }
    
}
