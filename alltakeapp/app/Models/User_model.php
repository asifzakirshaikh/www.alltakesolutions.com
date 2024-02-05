<?php 
namespace App\Models;
use CodeIgniter\Model;
class User_model extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_fullname','user_email', 'user_password','last_login'];
}

?>