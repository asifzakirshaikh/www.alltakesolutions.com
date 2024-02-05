<?php

namespace App\Controllers;
use App\Models\Blog_model;

class Home extends BaseController
{

    public function __construct()
    {
      $blog_model = new Blog_model();
          $url = 'blog_url';
          
          $this->data = array(
              
              'blog' => $blog_model->orderBy('blog_id', 'DESC')->get()->getResult(),
              'most_recent' => $blog_model->orderBy('blog_id','DESC',$url)->limit(3)->get()->getResult(),
              'most_recent1' => $blog_model->orderBy('blog_id','DESC',$url)->limit(2)->get()->getResult(),
          );
    }

    public function index()
    {
        
        $this->cachePage(2);
        $data = $this->data;
        $data['twitter_title'] ='Home | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = base_url('images/home/Home1.png');
        $data['og_url'] = base_url();
        $data['meta_image'] = base_url('images/home/Home1.png');
        
        $data['meta_title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url().'">';
        $data['schema'] = '
        
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Alltake",
          "url": "https://alltakesolutions.com/",
          "logo": "https://alltakesolutions.com/images/home/logo/logo.png",
          "sameAs": [
            "https://www.linkedin.com/company/alltake-ites-pvt-ltd/",
            "https://twitter.com/ALLTAKE_B2B"
            
          ]
        }
        </script>
        
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "ItemList", 
          "itemListElement": [{
            "@type": "SiteNavigationElement", 
            "position": 1, 
            "name": "ABM",
            "url": "https://alltakesolutions.com/solutions/account-based-marketing"  
          },{
            "@type": "SiteNavigationElement", 
            "position": 2, 
            "name": "ABX",
            "url": "https://alltakesolutions.com/solutions/account-based-experience"  
          },{
            "@type": "SiteNavigationElement", 
            "position": 3, 
            "name": "Know Your Budget",
            "url": "https://alltakesolutions.com/budget"  
          },{
            "@type": "SiteNavigationElement", 
            "position": 4, 
            "name": "Blog",
            "url": "https://alltakesolutions.com/blogs"  
          },{
            "@type": "SiteNavigationElement", 
            "position": 5, 
            "name": "About",
            "url": "https://alltakesolutions.com/about"  
          }]
        }
        </script>

            
        ';
        return view('header', $data)
            . view('home')
            . view('footer');
    }
    
     public function send_details()
    {
      $input = $this->validate([
            'fn' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'First Name is required',
               ],
            ],
            'ln' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Last Name is required',
               ],
            ],
            'c_name' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Company Name is required',
               ],
            ],
            'ph_no' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Phone Number is required',
               ],
            ],
            'email' => [
               'rules' => 'required|valid_email',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
               ],
            ],
        ]);

        if (!$input) {
            
        $data = $this->data;    
        $data['twitter_title'] ='Home | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = base_url('images/home/Home-webp-1.webp');
        $data['og_url'] = base_url();
        $data['meta_image'] = base_url('images/home/Home-webp-1.webp');
        
        $data['meta_title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['title'] = 'Home | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url().'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('home')
            . view('footer');
           

        } else {

            $session = session();
            $fn = $this->request->getPost('fn');
            $ln = $this->request->getPost('ln');
            $name = $fn.' '.$ln;
            $email = $this->request->getPost('email');
            $ph_number = $this->request->getPost('ph_no');
            $c_name = $this->request->getPost('c_name');
            $ln = $this->request->getPost('ln');
            $subject = 'Contact request by '.$fn.' '.$ln;
            $message = 'Contact request by '.$fn.' '.$ln;
            $message.= '<br>';
            $message.= 'First Name - '.$fn;
            $message.= '<br>';
            $message.= 'Last Name - '.$ln;
            $message.= '<br>';
            $message.= 'Email - '.$email;
            $message.= '<br>';
            $message.= 'Company Name - '.$c_name;
            $message.= '<br>';
            $message.= 'Phone Number - '.$ph_number;
             
             
            $mail = \Config\Services::email();

            $to_email = 'info@alltakeb2b.com';

            $config['protocol'] = 'smtp';
            $config['SMTPHost'] = 'alltakeb2b.com';
            $config['SMTPPort'] = '587';
            $config['SMTPUser'] = 'info@alltakeb2b.com';
            $config['SMTPPass'] = 'alltake@123';
            $config['mailType'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordWrap'] = TRUE;
            $config['newline'] = "\r\n";

            $mail->initialize($config);

            $mail->setFrom($email, $name);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('home_form_success', 'Thank you for submitting the form.', 60);

                return redirect()->to('home');
            } else {
               $session->setTempdata('home_form_error', 'Something went wrong!', 60);

               return redirect()->to('home');
            }
            

            
        }
    }
    
    public function newsletter()
    {
        $data = $this->data;
        $data['content'] = 'index, follow';
        $data['twitter_title'] ='Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='';
        $data['og_title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = '';
        $data['og_image'] = base_url('images/og_images/image-1.jpg');
        $data['og_url'] = base_url('subscribe-newsletter');
        $data['meta_image'] = base_url('images/og_images/image-1.jpg');
        $data['alt_img'] = '';
        $data['meta_title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "";
        $data['keywords'] = "";
        $data['title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('subscribe-newsletter').'">';
        $data['schema'] = '
        
        ';
        return view('header', $data)
            . view('newsletter')
            . view('footer');
    }
    
    public function connect()
    {
        $data = $this->data;
        $data['content'] = 'index, follow';
        $data['twitter_title'] ='Lets Connect | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='';
        $data['og_title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = '';
        $data['og_image'] = base_url('images/og_images/image-1.jpg');
        $data['og_url'] = base_url('lets-connect');
        $data['meta_image'] = base_url('images/og_images/image-1.jpg');
        $data['alt_img'] = '';
        $data['meta_title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "";
        $data['keywords'] = "";
        $data['title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('lets-connect').'">';
        $data['schema'] = '
        
        ';
        return view('header', $data)
            . view('lets_connect')
            . view('footer');
    }
    
     public function budget_3()
    {
        $data = $this->data;
        $data['content'] = 'index, follow';
        $data['twitter_title'] ='Budget | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='';
        $data['og_title'] = 'Budget | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = '';
        $data['og_image'] = base_url('images/og_images/image-1.jpg');
        $data['og_url'] = base_url('subscribe-newsletter');
        $data['meta_image'] = base_url('images/og_images/image-1.jpg');
        $data['alt_img'] = '';
        $data['meta_title'] = 'Budget | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "";
        $data['keywords'] = "";
        $data['title'] = 'Budget | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('subscribe-newsletter').'">';
        $data['schema'] = '
        
        ';
        return view('header', $data)
            . view('budget3')
            . view('footer');
    }

    public function subscribe_newsletter()
    {
      $input = $this->validate([
            'name' => [
               'rules' => 'required|alpha_space',
               'errors' => [
                  'required' => ' Name is required',
               ],
            ],
            
            'email' => [
               'rules' => 'required|valid_email',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
               ],
            ],
            
        ]);
      if (!$input) {
            
            $session = session();
            
            // $session->setTempdata('unsubscribe_form_error', 'Invalid fields! Please try again', 10);

            // return redirect()->to('unsubscribe-newsletter');
               
                $data = $this->data;
                $data['content'] = 'index, follow';
                $data['twitter_title'] ='Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
                $data['twitter_description'] ='';
                $data['og_title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
                $data['og_description'] = '';
                $data['og_image'] = base_url('images/og_images/image-1.jpg');
                $data['og_url'] = base_url('subscribe-newsletter');
                $data['meta_image'] = base_url('images/og_images/image-1.jpg');
                $data['alt_img'] = 'MarTech Edge Authors';
                $data['meta_title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
                $data['meta_description'] = "";
                $data['keywords'] = "";
                $data['title'] = 'Newsletter Subscribe | Alltake | Leading B2B Marketing Agency';
                $data['canonical'] = '<link rel="canonical" href="'.base_url('subscribe-newsletter').'">';
                $data['schema'] = '
                
                ';
                return view('header', $data)
                    . view('newsletter')
                    . view('footer');
           

        } else {

         $session = session();
         $email = $this->request->getPost('email');
         $fn = $this->request->getPost('name');
         $name = $fn;    
        
         $message = 'Subscribe Request from Alltakesolutions Newsletter- <br> User Email- <br>'.$email;
        $subject = 'Subscribe Request From Alltakesolutions Newsletter Subscribe '.$name;
            $message = 'Subscribe request by '.$name;
            $message.= '<br>';
            $message.= 'Name - '.$name;
            $message.= '<br>';
            $message.= 'Company Email - '.$email;

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

               $mail->initialize($config);

            $mail->setFrom($email);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('subscribe_newsletter_success', 'Thank you for Subscribe the form.', 10);

                return redirect()->to('subscribe-newsletter');
            } else {
               $session->setTempdata('subscribe_newsletter_error', 'Something went wrong!', 10);

               return redirect()->to('subscribe-newsletter');
            }
        }
    }
    
    public function lets_connect()
    {
      $input = $this->validate([
            'name' => [
               'rules' => 'required|alpha_space',
               'errors' => [
                  'required' => ' Name is required',
               ],
            ],
            
            'email' => [
               'rules' => 'required|valid_email',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
               ],
            ],
            
        ]);
      if (!$input) {
            
            $session = session();
            
            // $session->setTempdata('unsubscribe_form_error', 'Invalid fields! Please try again', 10);

            // return redirect()->to('unsubscribe-newsletter');
               
                $data = $this->data;
                $data['content'] = 'index, follow';
                $data['twitter_title'] ='Lets Connect | Alltake | Leading B2B Marketing Agency';
                $data['twitter_description'] ='';
                $data['og_title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
                $data['og_description'] = '';
                $data['og_image'] = base_url('images/og_images/image-1.jpg');
                $data['og_url'] = base_url('lets-connect');
                $data['meta_image'] = base_url('images/og_images/image-1.jpg');
                $data['alt_img'] = 'MarTech Edge Authors';
                $data['meta_title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
                $data['meta_description'] = "";
                $data['keywords'] = "";
                $data['title'] = 'Lets Connect | Alltake | Leading B2B Marketing Agency';
                $data['canonical'] = '<link rel="canonical" href="'.base_url('lets-connect').'">';
                $data['schema'] = '
                
                ';
                return view('header', $data)
                    . view('lets_connect')
                    . view('footer');
           

        } else {

         $session = session();
         $email = $this->request->getPost('email');
         $fn = $this->request->getPost('name');
         $name = $fn;    
        
         $message = 'Connect Request from Alltakesolutions Lets Connect- <br> User Email- <br>'.$email;
        $subject = 'Connect Request From Alltakesolutions Lets Connect '.$name;
            $message = 'Connect request by '.$name;
            $message.= '<br>';
            $message.= 'Name - '.$name;
            $message.= '<br>';
            $message.= 'Company Email - '.$email;

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

               $mail->initialize($config);

            $mail->setFrom($email);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('subscribe_newsletter_success', 'Thank you for Subscribe the form.', 10);

                return redirect()->to('lets-connect');
            } else {
               $session->setTempdata('subscribe_newsletter_error', 'Something went wrong!', 10);

               return redirect()->to('lets-connect');
            }
        }
    }
}
