<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\PageRepository as Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    private $repository;
    public function __construct() {
        $this->repository = new Repository;
    }

    const pages = [
        ['view' => 'startpage', 'name' => 'startpage'],
        ['view' => 'references', 'name' => 'references'],
        ['view' => 'costs', 'name' => 'costs'],
        ['view' => 'offer', 'name' => 'offer'],
        ['view' => 'about', 'name' => 'about'],
        ['view' => 'news', 'name' => 'news'],
        ['view' => 'ingredients', 'name' => 'ingredients'],
        ['view' => 'blockhouse', 'name' => 'blockhouse'],
        ['view' => 'architecture', 'name' => 'architecture'],
        ['view' => 'projects', 'name' => 'projects'],
        ['view' => 'contact', 'name' => 'contact'],
        ['view' => 'cookie', 'name' => 'cookie'],
        ['view' => 'privacy', 'name' => 'privacy'],
        ['view' => 'imprint', 'name' => 'imprint'],
        ['view' => 'news-single', 'name' => 'news-single'],
    ];

    public function renderPage() {
        $actualRoute = Route::currentRouteName();
        foreach(self::pages as $page) {
            if(in_array($actualRoute, $page)) {
                return view($page['view']);
            }
        }
    }

    public function getPage($slug) {
        $page = $this->repository->getPageBySlug($slug);
        if($page === null) {
            return abort('404');
        }
        return view('page')->with('page', $page);
    }
}
