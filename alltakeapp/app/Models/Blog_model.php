<?php 
namespace App\Models;
use CodeIgniter\Model;
class Blog_model extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';
    protected $allowedFields = ['blog_title','blog_type','blog_url', 'blog_author','blog_content','blog_img','date_created'];


    public function blogs_page()
        {
            $this->builder()->orderBy('blog_id', 'DESC');

            return $this; // This will allow the call chain to be used.
        }
}

?>