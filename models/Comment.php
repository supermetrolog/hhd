<?php
include "models/db.php";

class Comment
{
    private $db;
    public function __construct()
    {
        $this->db = (new db())->dbConnect();
    }

    public function getComments()
    {
        return $this->db->query('SELECT * from comment');
    }
    public function createComment($post_data)
    {
        $query = $this->db->prepare('INSERT INTO comment (comment.name, comment.email, comment.content) VALUES (:name, :email, :content)');
        return $query->execute([
            ':name' => $post_data['name'],
            ':email' => $post_data['email'],
            ':content' => $post_data['content'],
        ]);
    }
}
