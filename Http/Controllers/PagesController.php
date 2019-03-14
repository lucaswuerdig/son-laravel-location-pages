<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 07/03/19
 * Time: 08:17
 */

namespace Modules\Pages\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Pages\Model\Page;
use Location;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('Page::index', compact('pages'));
    }

    public function view()
    {
        echo config('pages.home');
        echo config('pages.error_page');
        echo Location::getLocation();
    }
}