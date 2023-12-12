<?php

namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model{
    protected $table = 'blog';
    protected $allowedFields = ['title', 'description', 'profile_image'];
    
    public function getBlogs()
    {
        return $this->findAll();
    }
 
    public function createBlog($data)
    {
        return $this->insert($data);
    }

    public function updateBlog($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteBlog($id)
    {
        return $this->delete($id);
    }
}
?>