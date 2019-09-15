<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\PageRepository as Repository;

class PageController extends Controller
{
    private $repository;
    public function __construct() {
        $this->repository = new Repository;
    }
    public function renderPage($pageSlug) {
        $page = $this->repository->getPageBySlug($pageSlug);
        if( ! isset($page)) {
            abort('404');
        }

        return view('page')->with('page', $page);
    }
}
