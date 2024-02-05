<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Blog_model;
use App\Models\Infographics_Model;

class Account extends BaseController
{
    public function __construct()
    {

        $session = session();

        $userData = $session->get('isUserLoggedIn');

        $user_model = new User_model();

        $blog_model = new Blog_model();

        $infographics_model = new Infographics_Model();

        $this->data = array(
            'user_count' => $user_model->where('is_active', '1')->orderBy('user_id', 'DESC')->get()->getResult(),
            'user' => $user_model->where('user_email', $userData['email'])->first(),
            'blog' => $blog_model->where('blog_by', $userData['email'])->orderBy('blog_id', 'DESC')->get()->getResult(),
            'infographics' => $infographics_model->where('i_by', $userData['email'])->orderBy('id', 'DESC')->get()->getResult(),
            'total_blogs' => $blog_model->where('blog_by', $userData['email'])->countAllResults(),
             'total_users' => $user_model->where('is_active', '1')->countAllResults(),   
        );

    }

    public function index()
    {
        $data = $this->data;
        $data['title'] = 'Dashboard | Alltake B2B';
        return view('user/header', $data)
            . view('user/dashboard')
            . view('user/footer');
    }

    public function blogs()
    {
        $data = $this->data;
        $data['title'] = 'Blogs | Alltake B2B';
        return view('user/header', $data)
            . view('user/blogs')
            . view('user/footer'); 
    }

    public function infographics()
    {
        $data = $this->data;
        $data['title'] = 'Infographics | Alltake B2B';
        return view('user/header', $data)
            . view('user/infographics')
            . view('user/footer'); 
    }

    public function add_blog()
    {
        $data = $this->data;
        $data['title'] = 'Add Blogs | Alltake B2B';

        return view('user/header',$data)
            . view('user/add_blogs')
            . view('user/footer');
    }

     public function add_infographics()
    {
        $data = $this->data;
        $data['title'] = 'Add Infographics | Alltake B2B';

        return view('user/header',$data)
            . view('user/add_infographic')
            . view('user/footer');
    }

    public function insert_blog()
    {
        $input = $this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Title is required',
                ],
            ],
            'type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Type is required',
                    
                ],
            ],
           
            
            'image' => [
                'rules' => 'uploaded[image]|max_size[image,300]|max_dims[image,1920,1080]|mime_in[image,image/jpg,image/webp,image/jpeg,image/gif,image/png,image]|is_unique[blog.blog_img]',
                'errors' => [
                    'uploaded' => 'Image is required',
                    'max_size' => 'Image size must be less than 300 KB',
                    'max_dims' => 'Maximum dimensions size must be 1920 x 1080',
                    'mime_in' => 'Invalid image format',
                ],
            ],
        ]);

        if (!$input){

            $data = $this->data;
            $data['title'] = 'Add Blogs | Alltake B2B';

             return view('user/header',$data)
                . view('user/add_blogs')
                . view('user/footer');
        
        } else {
            
            $slug = trim($this->request->getPost('title')); // trim the string
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
            $slug= str_replace(' ','-', $slug); // replace spaces by dashes
            $slug= strtolower($slug);

            $session = session();

            $userData = $session->get('isUserLoggedIn');

            $user_model = new User_model();

            $data = $user_model->where('user_email', $userData['email'])->first();

            $file = $this->request->getFile('image');

            if($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . '../../blog_images',$newName); 

                $array_data = array(
                    'blog_by' => $data['user_email'],
                    'blog_title' => $this->request->getPost('title'),
                    'blog_type' => $this->request->getPost('type'),
                    'blog_url' => $slug,
                    'blog_author' => $data['user_fullname'],
                    'blog_content' => $this->request->getPost('content'),
                    'blog_img' => $newName,
                    'date_created' => date("Y-m-d H:i:s"),
                    

                );

                $database = \Config\Database::connect();
                $db = $database->table('blog');

                $save = $db->insert($array_data);

                $session->setTempdata('blog_err', 'Blog added successfully.', 40);

                return redirect()->to('account/blogs');

            } 
        }
    }


    public function insert_infographics()
    {
        $input = $this->validate([
            'i_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Title is required',
                ],
            ],
            
            'i_type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posted By is required',
                ],
            ],
            'i_image' => [
                'rules' => 'uploaded[i_image]|max_size[i_image,300]|is_unique[infographic.i_image]',
                'errors' => [
                    'uploaded' => 'Image is required',
                    'max_size' => 'Image size must be less than 300 KB',
                ],
            ],
            'i_pdf' => [
                'rules' => 'uploaded[i_pdf]|max_size[i_pdf,20000]|is_unique[infographic.i_pdf]',
                'errors' => [
                    'uploaded' => 'file is required',
                    'max_size' => 'file size must be less than 2 MB',
                    'mime_in' => 'Invalid file format',
                ],
            ],
        ]);

        if (!$input) {

            $data = $this->data;
            $data['title'] = 'Add Infographic Alltake';

            return view('user/header',$data)
                . view('user/add_infographic')
                . view('user/footer');

        } else {

            $slug = trim($this->request->getPost('i_title')); // trim the string
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
            $slug= str_replace(' ','-', $slug); // replace spaces by dashes
            $slug= strtolower($slug);

            $session = session();

            $userData = $session->get('isUserLoggedIn');

            $user_model = new User_model();

            $data = $user_model->where('user_email', $userData['email'])->first();
   

            $file = $this->request->getFile('i_image');
            $pdf = $this->request->getFile('i_pdf');  

            if ($file->isValid() && ! $file->hasMoved() && $pdf->isValid() && ! $pdf->hasMoved()){
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . '../../infographics_images',$newName); 

                $pdfName = $pdf->getRandomName();
                $pdf->move(WRITEPATH . '../../files',$pdfName); 
                
               
                $array_data = array(
                    'i_by' => $data['user_email'],
                    'i_title' => $this->request->getPost('i_title'),
                    'i_type' => $this->request->getPost('i_type'),
                    'i_url' => $slug,
                    'i_image' => $newName,
                    'i_pdf'=> $pdfName,
                    'date_created' => date("Y-m-d H:i:s")

                );

                $database = \Config\Database::connect();
                $db = $database->table('infographic');

                $save = $db->insert($array_data);

                $session->setTempdata('infographic_err', 'infographic added successfully.', 10);

                return redirect()->to('account/infographics');

            } 
        }
    }
    
    public function edit_blog_post($id)
    {
        $data = $this->data;
        $data['blog_id'] = $id;
        $data['title'] = 'Edit Blog | Alltake B2B';

        return view('user/header',$data)
            . view('user/edit_blog_post')
            . view('user/footer');
    }
    
    public function update_blog_post($id)
    {
        $input = $this->validate([
            'content' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Content is required',
                ],
            ],
        ]);

        if (!$input){

            $data = $this->data;
            $data['blog_id'] = $id;
            $data['title'] = 'Edit Blog | Alltake B2B';

            return view('user/header',$data)
                . view('user/edit_blog_post')
                . view('user/footer');
        
        } else {

            $session = session();
            
            $content = $this->request->getPost('content');

                $array_data = array(
                    'blog_content' => $content
                );
                
                $database = \Config\Database::connect();
                $db = $database->table('blog');

                $db->set($array_data);
                $db->where('blog_id',$id);
                $db->update();

                $session->setTempdata('blog_err', 'Blog edited successfully.', 40);

                return redirect()->to('account/blogs');
        }
    }
    
    public function edit_blog($id)
    {
        $data = $this->data;
        $data['blog_id'] = $id;
        $data['title'] = 'Edit Blog | Alltake B2B';

        return view('user/header',$data)
            . view('user/edit_blog')
            . view('user/footer');
    }
    
    public function update_blog($id)
    {
        $input = $this->validate([
            'image' => [
                'rules' => 'uploaded[image]|max_size[image,300]|max_dims[image,1920,1080]|mime_in[image,image/jpg,image/webp,image/jpeg,image/gif,image/png,image]|is_unique[blog.blog_img]',
                'errors' => [
                    'uploaded' => 'Image is required',
                    'max_size' => 'Image size must be less than 300 KB',
                    'max_dims' => 'Maximum dimensions size must be 1920 x 1080',
                    'mime_in' => 'Invalid image format',
                ],
            ],
        ]);

        if (!$input){

            $data = $this->data;
            $data['blog_id'] = $id;
            $data['title'] = 'Edit Blog | Alltake B2B';
    
            return view('user/header',$data)
                . view('user/edit_blog')
                . view('user/footer');
        
        } else {

            $session = session();
            
            $file = $this->request->getFile('image');

            if($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . '../../blog_images',$newName); 

                $array_data = array(
                    'blog_img' => $newName
                );
                
                $database = \Config\Database::connect();
                $db = $database->table('blog');

                $db->set($array_data);
                $db->where('blog_id',$id);
                $db->update();

                $session->setTempdata('blog_err', 'Blog edited successfully.', 40);

                return redirect()->to('account/blogs');
            }
        }
    }

    public function delete_blog($id)
    {
        $database = \Config\Database::connect();
        $db = $database->table('blog');

        $db->where('blog_id', $id);
        $delete = $db->delete();

        if($delete)
        {
            $session = session();

            $session->setTempdata('blog_err', 'Blog deleted successfully.', 40);

            return redirect()->to('account/blogs');

        }
    }

    public function delete_infographics($id)
    {
        $database = \Config\Database::connect();
        $db = $database->table('infographic');

        $db->where('id', $id);
        $delete = $db->delete();

        if($delete)
        {
            $session = session();

            $session->setTempdata('infographic_err', 'Infographics deleted successfully.', 40);

            return redirect()->to('account/infographics');

        }
    }
}