<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use \App\Repository\NewsRepository;

class NewsController extends Controller {

    /**
     * @var NewsRepository
     */
    private $repository;

    public function __construct() {
        parent::__construct();
        $this->repository = new NewsRepository();
    }

    public function news() {
        $news = $this->repository->getNews();
        return view('news')
            ->with('news', $news['news'])
            ->with('links', $news['paginate']);
    }

    public function show($id, $slug) {
        return view('news-single', [
            'news' => $this->repository->getNewsByIdAndSlug($id, $slug),
            'latest_news' => $this->repository->getLatestNews()
        ]);
    }
}
