<?php
namespace App\Repository;

use App\News;

class NewsRepository {
    public function getNews() {
        return News::orderBy('created_at', 'desc')->paginate(4);
    }
}
