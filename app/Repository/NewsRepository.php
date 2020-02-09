<?php
namespace App\Repository;

use App\News;
use App\DataTransferObject\NewsDto;

class NewsRepository {
    public function getNews() {
        return News::orderBy('created_at', 'desc')->paginate(4);
    }

    public function getLatestNews() {
        return News::orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function getNewsByIdAndSlug($id, $slug) {
        $news = News::where([
            ['id', '=', $id],
            ['slug', '=', $slug]
        ])->first();

         return new NewsDto($news);

    }
}
