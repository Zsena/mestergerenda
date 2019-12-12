<?php
namespace App\Repository;

use App\Page;

class PageRepository {
    public function getPageBySlug($slug) {
        return Page::where([
            ['slug', '=', $slug]
        ])->first();
    }
}
