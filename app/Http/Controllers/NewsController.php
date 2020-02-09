<?php

namespace App\Http\Controllers;

use App\News;
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
    public function show($id) {
        return view('news-single', [
            'news' => News::findOrFail($id),
            'latest_news' => $this->repository->getLatestNews()
        ]);
    }
}
