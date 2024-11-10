<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

//use Kathore\LaraFormik\Table\Action\DeleteItems;
//use Kathore\LaraFormik\Table\Action\TableActionMenu;

class TestController extends Controller
{
    public function index()
    {
//        TableActionMenu::make([
//            DeleteItems::make(User::class)
//                ->name('delete')
//                ->isConfirm()
//
//        ]);
        return Inertia::render('Welcome');
    }
}
