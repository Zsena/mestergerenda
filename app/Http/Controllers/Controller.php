<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \App\Repository\NewsRepository;

use App\Footer;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function footer() {
        return Footer::where('name', '=', 'basic')->first();
    }

    public function __construct(){
        View::share('footer_news', (new NewsRepository())->getLatestNews(5));
    }
}
