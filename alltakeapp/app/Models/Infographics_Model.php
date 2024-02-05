<?php 
namespace App\Models;
use CodeIgniter\Model;
class Infographics_model extends Model
{
    protected $table = 'infographic';
    protected $primaryKey = 'id';
    protected $allowedFields = ['i_title','i_type','i_url', 'i_author','i_image', 'i_pdf','i_by','date_created'];

}

?>