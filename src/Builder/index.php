<?php

namespace Src\Builder;

require_once __DIR__ . '/../../vendor/autoload.php';

$posts = [];
$builder = new BlogPostBuilder();

$posts[] = $builder
    ->setTitle('New first post')
    ->setBody('with some body')
    ->getBlogPost();

$manager =  (new BlogPostManager())->setBuilder($builder);
$posts[] = $manager->createNewItPost();
$posts[] = $manager->createPostWithTitle();

print_r($posts);


