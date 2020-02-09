<?php
namespace App\Repository;

use App\News;
use App\DataTransferObject\NewsDto;

class StartPageRepository {

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getNews() {

        $newsCollection = ['news'=>[]];

        $news = News::orderBy('created_at', 'desc')->get();

        foreach($news as $n) {
            $newsCollection['news'][] = new NewsDto($n);
        }

        return collect($newsCollection);
    }

    /**
     * @param $id
     * @param $slug
     * @return NewsDto
     */
    public function getNewsByIdAndSlug($id, $slug) {
        $news = News::where([
            ['id', '=', $id],
            ['slug', '=', $slug]
        ])->first();

         return new NewsDto($news);

    }
}
