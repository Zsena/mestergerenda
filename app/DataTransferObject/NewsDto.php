<?php

namespace App\DataTransferObject;

use App\News;

/**
 * Class NewsDto
 * @package App\DataTransferObject
 */
class NewsDto extends BaseDataTransfer {

    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $author;

    /**
     * @var
     */
    private $title;

    /**
     * @var
     */
    private $seoTitle;

    /**
     * @var
     */
    private $excerpt;

    /**
     * @var
     */
    private $body;

    /**
     * @var
     */
    private $image;

    /**
     * @var
     */
    private $slug;

    /**
     * @var
     */
    private $featured;

    /**
     * @var
     */
    private $meta_description;

    /**
     * @var
     */
    private $meta_keywords;

    /**
     * @var
     */
    private $status;

    /**
     * @var
     */
    private $createdAt;


    /**
     * @var
     */
    private $thumbnail;

    /**
     * @var
     */
    private $latestNews;

    /**
     * NewsDto constructor.
     * @param News $news
     */
    public function __construct(News $news) {
        $this->id = $news->id;
        $this->author = $news->author->name;
        $this->title = $news->title;
        $this->seoTitle = $news->seo_title;
        $this->excerpt = $news->excerpt;
        $this->body = $news->body;
        $this->slug = $news->slug;
        $this->image = $news->image;
        $this->featured = $news->featured;
        $this->meta_description = $news->meta_description;
        $this->meta_keywords = $news->meta_keywords;
        $this->status = $news->status;
        $this->createdAt = $news->created_at;
        $this->thumbnail = \Voyager::image($news->thumbnail('cropped'));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * @return mixed
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @return mixed
     */
    public function getLatestNews()
    {
        return $this->latestNews;
    }

}