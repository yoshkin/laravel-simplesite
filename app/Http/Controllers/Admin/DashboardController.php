<?php
/**
 * Created by PhpStorm.
 * User: yva1ec
 * Date: 23.03.17
 * Time: 12:08
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $someVar = 'Some text';
        return view('vendor.backpack.base.dashboard', compact('someVar'));
    }
}