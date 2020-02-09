<?php
namespace App\Repository;

use App\News;
use App\DataTransferObject\NewsDto;

class NewsRepository {

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getNews() {

        $newsCollection = [];

        $news = News::orderBy('created_at', 'desc')->paginate(4);

        foreach($news as $n) {
            $newsCollection['news'][] = new NewsDto($n);
        }
        $newsCollection['paginate'][] = $news->links('vendor.pagination.bootstrap-4');

        return collect($newsCollection);
    }

    /**
     * @return mixed
     */
    public function getLatestNews() {
        return News::orderBy('created_at', 'desc')->limit(3)->get();
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
