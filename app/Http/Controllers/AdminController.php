<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liveuser;
use App\Models\Driver;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
