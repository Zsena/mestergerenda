<?php
/**
 * Created by PhpStorm.
 * User: Ádám
 * Date: 2019.09.15.
 * Time: 2:07
 */

namespace App\Repository;

use App\Page;


class PageRepository {
    public function getPageBySlug($slug) {
        return Page::where([
            ['slug', '=', $slug]
        ])->first();
    }
}