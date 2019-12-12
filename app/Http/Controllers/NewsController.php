<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Repository\NewsRepository;

class NewsController extends Controller {
    private $repository;
    public function __construct() {
        $this->repository = new NewsRepository();
    }
    public function news() {
        $news = $this->repository->getNews();
        return view('news')
            ->with('news', $news);
    }
}
