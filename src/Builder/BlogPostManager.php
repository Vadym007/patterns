<?php
declare(strict_types=1);

namespace Src\Builder;
/**
 * Class BlogPostManager
 * @package Src\Builder
 *
 * @property BlogPostBuilderInterface $builder;
 */
class BlogPostManager
{
    private $builder;

    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;
        return $this;
    }

    public function createCleanBlogPost()
    {
        return $this->builder->getBlogPost();
    }

    public function createNewItPost()
    {
        return $this->builder
            ->setTitle('IT title ...')
            ->setBody('IT body ...')
            ->setTags(['php', 'js', 'go'])
            ->setCategories(['web-dews'])
            ->getBlogPost();
    }

    public function createPostWithTitle()
    {
        return $this->builder
            ->setTitle('Post with title')
            ->getBlogPost();
    }

}