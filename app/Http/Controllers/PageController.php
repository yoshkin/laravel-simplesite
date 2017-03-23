<?php
/**
 * Created by PhpStorm.
 * User: yva1ec
 * Date: 23.03.17
 * Time: 11:20
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\MenuItem;
class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        $this->data['menu'] = MenuItem::all();
        return view('pages.'.$page->template, $this->data);
    }
}