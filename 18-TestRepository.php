<?php

require_once __DIR__ . '/3-GetConnection.php';
require_once __DIR__ . '/Model/16-Comment.php';
require_once __DIR__ . '/Repository/17-CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

//$comment = new Comment(email: "repository@test.com", comment: "Hi");
//$newComment = $repository->insert($comment);
//
//var_dump($newComment->getId());

// $comment = $repository->findById(45);
// var_dump($comment);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;
