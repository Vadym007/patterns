<?php
declare(strict_types=1);

namespace Src\Builder;

use Src\Builder\Classes\BlogPost;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->title = $val;

        return $this;
    }

    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->body = $val;

        return $this;
    }

    public function setTags(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $val;

        return $this;
    }

    public function setCategories(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $val;

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $res = $this->blogPost;
        $this->create();
        return $res;
    }
}