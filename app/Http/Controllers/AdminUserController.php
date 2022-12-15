<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function create(Request $request)
    {
        User::newUser($request);
        return redirect('/admin/create-admin')->with('message', 'New Admin Created Successfully.');
    }
    public function manage()
    {
        return view('admin.user.manage', ['users' => User::orderBy('id', 'desc')->get()]);
    }
}
