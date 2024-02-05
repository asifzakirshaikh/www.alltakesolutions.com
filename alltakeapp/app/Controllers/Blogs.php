<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Blog_model;

class Blogs extends BaseController
{
	public function __construct()
	{
		$blog_model = new Blog_model();
        $url = 'blog_url';
       
        $this->data = array(
            
            'blog' => $blog_model->orderBy('blog_id', 'DESC')->get()->getResult(),
            'most_recent' => $blog_model->orderBy('blog_id','DESC',$url)->limit(5)->get()->getResult(),
            'blogs_page' => $blog_model->blogs_page()->paginate(8,'group1'),
            'pager' => $blog_model->pager,
            'currentPage' => $blog_model->pager->getCurrentPage('group1'), // The current page number
            'totalPages'  => $blog_model->pager->getPageCount('group1'),   // The total page count
        );
	}

    public function index()
    {
       
        
    	$data = $this->data;
    	
    	$data['twitter_title'] ='Blogs | Insights into the latest in Marketing & Technology';
        $data['twitter_description'] ='Stay informed and inspired with our collection of insightful blogs on trending topics, including technology, business, marketing, and more.';
    	$data['og_title'] = 'Blogs | Insights into the latest in Marketing & Technology';
        $data['og_description'] = 'Stay informed and inspired with our collection of insightful blogs on trending topics, including technology, business, marketing, and more.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('blogs');
        $data['meta_image'] = base_url('');
        
    	$data['meta_title'] = 'Blogs | Insights into the latest in Marketing & Technology';
        $data['meta_description'] = "Stay informed and inspired with our collection of insightful blogs on trending topics, including technology, business, marketing, and more.";
        $data['keywords'] = "";
        $data['title'] = 'Blogs | Insights into the latest in Marketing & Technology';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('blogs').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('blogs')
            . view('footer');

        
    }

    public function view($url)
    {
        
       
    	$database = \Config\Database::connect();
        $db = $database->table('blog');

        $data['blog'] = $db->where('blog_url', $url)->get()->getRow();
        
        $data['twitter_title'] =''.$data['blog']->blog_title;
        $data['twitter_description'] ='';
        $data['og_title'] = $data['blog']->blog_title;
        $data['og_description'] = '';
        $data['og_image'] = base_url('blog_images/'.$data['blog']->blog_img);
        $data['og_url'] = base_url('blogs/view/'.$data['blog']->blog_url);
        $data['meta_image'] = base_url('blog_images/'.$data['blog']->blog_img);
        
        $data['meta_title'] = $data['blog']->blog_title;
        $data['meta_description'] = "";
        $data['keywords'] = "";
        $data['title'] = $data['blog']->blog_title.' ';
        $data['url'] = $url;
        $data['canonical'] = '<link rel="canonical" href="'.base_url('blogs/view/'.$data['blog']->blog_url).'">';
        $schema_headline = str_replace('"','', $data['blog']->blog_title);
        $data['schema'] = '

                <script type="application/ld+json">
                    {
                      "@context": "https://schema.org",
                      "@type": "BlogPosting",
                      "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "'.base_url('blogs/view/'.$data['blog']->blog_url).'"
                      },
                      "headline": "'.$schema_headline.'",
                      "image": [
                        "'.base_url('blog_images/'.$data['blog']->blog_img).'"
                        ], 
                      "author": {
                        "@type": "Organization",
                        "name": "Alltake",
                        "url": "https://alltakesolutions.com/"
                      },  
                      "publisher": {
                        "@type": "Organization",
                        "name": "Alltake",
                        "logo": {
                          "@type": "ImageObject",
                          "url": "https://alltakesolutions.com/images/home/logo/logo.png"
                        }
                      },
                      "datePublished":"'.$data['blog']->date_created.'",
                    "dateModified":"'.$data['blog']->date_created.'"
                    }
                </script>

                

                ';
        return view('header',$data)
            . view('view_blog')
            . view('footer');
    }
    
    public function subscribe()
    {
        $input = $this->validate([
            'email' => [
               'rules' => 'required|valid_email|regex_match[/^(?!.*@(gmail\.com|hotmail\.com|yahoo\.com|microsoft\.com|gmx\.com|rediff\.com|outlook\.com|zoho\.com|aol\.com|mailbox\.org)).*$/]',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
                  'regex_match'=>'Please Enter Business Email',
               ],
            ],
        ]);

        if (!$input) {

        $session = session();
        $uri = $this->request->getPost('url');

        $session->setTempdata('validation_err', 'Invalid Email Address', 10);
        return redirect()->to($uri);

        } else {
            
            $uri = $this->request->getPost('url');
            
            $session = session();
            $email = $this->request->getPost('email');
            $subject = 'New Subscription by '.$email;
            $message = 'New Subscription by '.$email;

            $mail = \Config\Services::email();

            $to_email = 'business@alltakesolutions.com';

            $config['protocol'] = 'smtp';
      			$config['SMTPHost'] = 'alltakesolutions.com';
      			$config['SMTPPort'] = '587';
      			$config['SMTPUser'] = 'business@alltakesolutions.com';
      			$config['SMTPPass'] = 'alltakeb2b@7890';
      			$config['mailType'] = 'html';
      			$config['charset'] = 'iso-8859-1';
      			$config['wordWrap'] = TRUE;
      			$config['newline'] = "\r\n";
      			$config['SMTPSecure'] = 'tls';

			      $mail->initialize($config);

            $mail->setFrom($email);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('subscription_success', 'Thank you for subscribing to our newsletter.', 10);

               return redirect()->to($uri);
            } else {
               $session->setTempdata('subscribe_err', 'Something went wrong!', 10);

               return redirect()->to($uri);
            }
            
        }
    }

    public function login()
    {
        $session = session();

        if(isset($_SESSION['isUserLoggedIn']))
        {
            return redirect()->to('account');
        } else {
            $data['title'] = 'Sign In | Alltake | Demand Gen | Paid Media | Content Syndication';
            return view('login', $data);
        }
    }

    public function check_login()
    {
    	$input = $this->validate([
            'email' => [
            	'rules' => 'required|valid_email',
            	'errors' => [
            		'required' => 'Email Address is required',
            		'valid_email' => 'Invalid Email Address',
            	],
            ],
            'password' => [
            	'rules' => 'required',
            	'errors' => [
            		'required' => 'Password is required',
            	],
            ],
        ]);

        if (!$input) {

        	$data['title'] = 'Sign In | Alltake | Demand Gen | Paid Media | Content Syndication';

            return view('login',$data, [
                'validation' => $this->validator
            ]);

        } else {

        	$session = session();

        	$user_model = new User_model();

        	$email = $this->request->getPost('email');

       		$password = $this->request->getPost('password');

       		$data = $user_model->where('user_email', $email)->first();

       		if($data){
       			$pass = $data['user_password'];

	            $authenticatePassword = password_verify($password, $pass);

	            if($authenticatePassword){

	            	$date = date("Y-m-d H:i:s");

	            	$db      = \Config\Database::connect();
					$builder = $db->table('users');

	            	$builder->set('last_login',$date);
	            	$builder->where('user_email', $email);
	            	$builder->update();

	            	$ses_data = [
	                    'name' => $data['user_fullname'],
	                    'email' => $data['user_email'],
	                    'isLoggedIn' => TRUE
	                ];
	                $session->set('isUserLoggedIn',$ses_data);
	                return redirect()->to('account');
	            
	            } else {

	            	$session->setTempdata('user_login_err', 'Password is incorrect.', 40);

	            	return redirect()->to('blogs/sign-in');

	            }
	        } else {

       			$session->setTempdata('user_login_err', 'Email Address does not exist.', 40);

	            return redirect()->to('blogs/sign-in');
	        }

        }
    }

    public function logout()
    {
    	$session = session();
    	$session->remove('isUserLoggedIn');
    	return redirect()->to('blogs/sign-in');
    }
}
