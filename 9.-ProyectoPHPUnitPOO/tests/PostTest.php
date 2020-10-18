<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post(); // Creando Post
        $comment = new Comment(); // Creando comentario

        $post->addComment($comment); // Agregando comentario al Post

        $this->assertEquals(1, $post->countComments()); // Comprobando que se tiene un Post
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]); // Ese comentario realmente es una instancia de esa clase? y revisar el primer comentario

    }
}