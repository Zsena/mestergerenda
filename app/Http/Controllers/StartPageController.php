<?php

namespace App\Http\Controllers;

use App\News;
use App\Repository\StartPageRepository;
use Illuminate\Http\Request;
use \App\Repository\NewsRepository;

class StartPageController extends Controller {

    /**
     * @var StartPageRepository
     */
    private $repository;

    public function __construct() {
        parent::__construct();
        $this->repository = new StartPageRepository();
    }

    public function index() {
        $news = $this->repository->getNews();
        return view('startpage')
            ->with('latest_news', $news);
    }
}
