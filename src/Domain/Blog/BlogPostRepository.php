<?php

namespace Metinet\Domain\Blog;

interface BlogPostRepository
{
    public function get(string $id): BlogPost;
    public function getLatestPosts(): array;
    public function save(BlogPost $post): void;
    public function clear(): void;
}
