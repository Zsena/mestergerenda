<?php
namespace App\Repository;

use App\News;
use App\DataTransferObject\NewsDto;

class StartPageRepository {

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getNews() {

        $newsCollection = [];
        $news = News::orderBy('created_at', 'desc')->limit(3)->get();
        foreach($news as $n) {
            $newsCollection[] = new NewsDto($n);
        }
        return collect($newsCollection);
    }

}
