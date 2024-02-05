<?php

namespace App\Controllers;
use SendGrid\Mail\Mail;
use SendGrid\Mail\Attachment;
use CodeIgniter\API\ResponseTrait;

class Contact extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        $data['twitter_title'] ='Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['twitter_description'] ='Ready to elevate your demand gen marketing? Contact us to experience the difference a highly skilled marketing team can make.';
        $data['og_title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['og_description'] = 'Ready to elevate your demand gen marketing? Contact us to experience the difference a highly skilled marketing team can make.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('contact');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['meta_description'] = "Ready to elevate your demand gen marketing? Contact us to experience the difference a highly skilled marketing team can make.";
        $data['keywords'] = "";
    	  $data['title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('contact').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('contact')
            . view('footer');
    }


    public function unsubscribe()
    {
      $data['title'] = 'Unsubscribe | Alltakesolutions | B2B Demand Gen Pioneers';
        
        return view('unsubscribe',$data);
            
    }
    
    public function unsubscribe_newsletter()
    {
      $data['title'] = 'Unsubscribe Newsletter | Alltakesolutions | B2B Demand Gen Pioneers';
        
        return view('unsubscribe_newsletter',$data);
            
    }


    public function form_unsubscribe()
    {
      $input = $this->validate([
            'email' => [
               'rules' => 'required|valid_email|regex_match[/^(?!.*@(gmail\.com|hotmail\.com|yahoo\.com|microsoft\.com|gmx\.com|rediff\.com|outlook\.com|zoho\.com|aol\.com|mailbox\.org)).*$/]',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
                  'regex_match'=>'Please Enter Valid Business Email',
               ],
            ],
            
        ]);
      if (!$input) {
            
            $session = session();
            
            // $session->setTempdata('unsubscribe_form_error', 'Invalid fields! Please Enter Business Email', 10);

            // return redirect()->to('unsubscribe');
            $data['title'] = 'Unsubscribe | Alltakesolutions | B2B Demand Gen Pioneers';
        
            return view('unsubscribe',$data);
           

        } else {

         $session = session();
         $email = $this->request->getPost('email');

        $subject = 'Unsubscribe Request From Alltake Solution';
         $message = 'Unsubscribe Request from Alltake Solutions- <br> User Email- <br>'.$email;
        

         $mail = \Config\Services::email();

            $to_email = 'emailunsubscribe@alltakeb2b.com';

            $config['protocol'] = 'smtp';
               $config['SMTPHost'] = 'alltakeb2b.com';
               $config['SMTPPort'] = '587';
               $config['SMTPUser'] = 'emailunsubscribe@alltakeb2b.com';
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
               $session->setTempdata('unsubscribe_form_success', 'Thank you for Unsubscribe the form.', 10);

                return redirect()->to('unsubscribe');
            } else {
               $session->setTempdata('unsubscribe_form_error', 'Something went wrong!', 10);

               return redirect()->to('unsubscribe');
            }
        }
    }
    
    
    public function form_unsubscribe_newsletter()
    {
      $input = $this->validate([
            'name' => [
               'rules' => 'required|alpha_space',
               'errors' => [
                  'required' => ' Name is required',
               ],
            ],
            
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
            
            // $session->setTempdata('unsubscribe_form_error', 'Invalid fields! Please try again', 10);

            // return redirect()->to('unsubscribe-newsletter');
            
            $data['title'] = 'Unsubscribe Newsletter | Alltakesolutions | B2B Demand Gen Pioneers';
        
            return view('unsubscribe_newsletter',$data);
           

        } else {

         $session = session();
         $email = $this->request->getPost('email');
         $fn = $this->request->getPost('name');
         $name = $fn;    
        
         $message = 'Unsubscribe Request from Alltakesolutions Newsletter- <br> User Email- <br>'.$email;
         $subject = 'Unsubscribe Request From Alltakesolutions Newsletter Unsubscribe '.$name;
            $message = 'Unsubscribe request by '.$name;
            $message.= '<br>';
            $message.= 'Name - '.$name;
            $message.= '<br>';
            $message.= 'Company Email - '.$email;

         $mail = \Config\Services::email();

             $to_email = 'newsletterunsubscribe@alltakeb2b.com';

            $config['protocol'] = 'smtp';
               $config['SMTPHost'] = 'alltakeb2b.com';
               $config['SMTPPort'] = '587';
               $config['SMTPUser'] = 'newsletterunsubscribe@alltakeb2b.com';
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
               $session->setTempdata('unsubscribe_form_success', 'Thank you for Unsubscribe the form.', 10);

                return redirect()->to('unsubscribe-newsletter');
            } else {
               $session->setTempdata('unsubscribe_form_error', 'Something went wrong!', 10);

               return redirect()->to('unsubscribe-newsletter');
            }
        }
    }
    
    

    public function send_email()
    {
      $input = $this->validate([
            'name' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Name is required',
               ],
            ],
            
             'email' => [
               'rules' => 'required|valid_email|regex_match[/^(?!.*@(gmail\.com|hotmail\.com|yahoo\.com|microsoft\.com|gmx\.com|rediff\.com|outlook\.com|zoho\.com|aol\.com|mailbox\.org)).*$/]',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
                  'regex_match'=>'Please Enter Business Email',
               ],
            ],
            'consent' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Consent is required',
               ],
            ],
            // 'g-recaptcha-response' => [
            //   'rules' => 'required',
            //   'errors' => [
            //       'required' => 'g-recaptcha-response is required',
            //   ],
            // ],
            
        ]);

        if (!$input) {
            
            $session = session();
            
            
        $data['twitter_title'] ='Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['twitter_description'] ='Ready to elevate your demand gen marketing? Contact us to experience the difference a highly skilled marketing team can make.';
         $data['og_title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['og_description'] = 'Being one of the leading B2B marketing agency globally, Alltake aces B2B lead gen service and B2B paid media service among other marketing services.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('contact');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['meta_description'] = "Contact us, we’d love to hear from you. Drop us your contact details and our team shall get in touch with you in no time.";
        $data['keywords'] = "";
        $data['title'] = 'Contact us | Alltake | B2B Demand Gen Pioneers';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('contact').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('contact')
            . view('footer');
           

        } else {

        //     $keySecret = '6LflTSElAAAAABtrOGNHKJtTaqJmTBE8tpl-Fq4m';

        //  $check = array(
        //     'secret'    => $keySecret,
        //     'response'     => $this->request->getPost('g-recaptcha')
        //  );

        //  $startProcess = curl_init();

        //  curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

        //  curl_setopt($startProcess, CURLOPT_POST, true);

        //  curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

        //  curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, true);

        //  curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

        //  $receiveData = curl_exec($startProcess);

        //  $finalResponse = json_decode($receiveData, true);

        //  if ( $finalResponse) {




            $session = session();
            $fn = $this->request->getPost('name');
            $consent = $this->request->getPost('consent');
            $name = $fn;
            $email = $this->request->getPost('email');
            
            $phone = $this->request->getPost('ph_no');
            $subject = 'Contact request by '.$name;
            $message = 'Contact request by '.$name;
            $message.= '<br>';
            $message.= 'First Name - '.$name;
            $message.= '<br>';
            $message.= 'Company Email - '.$email;
            $message.= '<br>';
            $message.= 'Phone Number - '.$phone;
            $message.= '<br>';
            $message.= 'Consent - '.$consent;

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

            $mail->setFrom($email, $name);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('contact_form_success', 'Thank you for submitting the form.', 30);

                return redirect()->to('contact');
            } else {
               $session->setTempdata('contact_form_error', 'Something went wrong!', 30);

               return redirect()->to('contact');
            }
        //}
    }
    
   }
   
    public function requestProposal()
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
            
            echo "All fields are required";
            
        } else {
            
            $increaseSales = $this->request->getPost('increaseSales');
            $improveLeads = $this->request->getPost('improveLeads');
            $expandMarket = $this->request->getPost('expandMarket');
            $increaseMarketing = $this->request->getPost('increaseMarketing');
            $gainAccess = $this->request->getPost('gainAccess');
            
            $timeline = $this->request->getPost('timeline');
            $icp = $this->request->getPost('icp');
            
            if($icp === 'Yes'){
                $region = $this->request->getPost('region');
                $level = $this->request->getPost('level');
                $function = $this->request->getPost('function');
            } else {
                $region = "";
                $level = "";
                $function = "";
            }
            
            $email = $this->request->getPost('email');
            
            $mail = new \SendGrid\Mail\Mail(); 
            $mail->setFrom("business@alltakesolutions.com", "Alltake");
            $mail->setSubject("Request Proposal Form");
            $mail->addTo('business@alltakesolutions.com');
            $mail->addContent(
                "text/html", "
                <head>
                    <style>
                        table {
                            border:1px solid black;
                            min-width:800px;
                            padding:0px;
                        }
                        
                        
                        table td, th, tr {
                           border:1px solid black;
                            padding:5px;
                            margin:0px;
                            width:auto;
                        }
                        
                    </style>
                </head>
                <body>
                    <br>
                    <table> 
                    <tr>
                        <td colspan='2'>
                        What are your main goals for purchasing leads?
                        </td>
                        <td>
                        ".$increaseSales."
                    </td>
                    
                    <td>
                        ".$improveLeads."
                    </td>
                
                    <td>
                        ".$expandMarket."
                    </td>
                
                    <td>
                        ".$increaseMarketing."
                    </td>
                
                    <td>
                        ".$gainAccess."
                    </td>
                    </tr>

                    <tr>
                    <td colspan='2'>
                    <p>What are your main goals for purchasing leads?</p>
                    </td>
                    <td>".$timeline."</td>
                    <tr>
                    <td colspan='2'>Are you ready with your ICP / Buyer Persona?</td>
                    <td>".$icp."</td>
                    <td>".$region."</td>
                    <td>".$level."</td>
                    <td>".$function."</td>
                    </tr>

                    <tr>
                    <td colspan='2'>Email Address</td>
                    <td><p>Email - ".$email."</p></td>
                    </tr>

                     <tr>
                     <th>
                     <td></td>
                     </th>
                     <th>
                     <td></td>
                     </th>
                     <th>
                     <td></td>
                     </th>
                     <th>
                     <td></td>
                     </th>
                     </tr>
               </table> 
               </body>
                "
            );
            $uri = $this->request->getPost('uri');
            // $url = base_url().$uri;
            $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
            if($sendgrid->send($mail)){
                $session = session();
                $session->setTempdata('abmFormSuccess', 'Thank you for submitting the form', 10);
                // return redirect($uri);
                return redirect()->to($uri); 
                // return redirect()->to('know-your-budget');
            } else {
                $session = session();
                $session->setTempdata('abmFormError', 'Error in sending', 10);
                
                return redirect($uri);
                // return redirect()->to('know-your-budget');
            }
        }
    }
    
    public function sendBudgetCalculatorForm()
    {
        $email = $this->request->getVar('email');
            
        $mail = new \SendGrid\Mail\Mail(); 
        $mail->setFrom("business@alltakesolutions.com", "Alltake");
        $mail->setSubject("Budget Calculator Form");
        $mail->addTo('business@alltakesolutions.com');
        $mail->addContent(
            "text/html", "<p>Budget calculator form submitted by ".$email."</p>"
        );
        $uri = $this->request->getPost('uri');
        // $url = base_url().$uri;
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        if($sendgrid->send($mail)){
            // $session = session();
            // $session->setTempdata('abmFormSuccess', 'Thank you for submitting the form', 10);
            // return redirect()->to($uri);
            $response = [
                'status' => 200,
                'error' => 200,
                'messages' => [
                    'error' => 'Success'
                ]
            ];
            return $this->respond($response, 200);
        } else {
            // $session = session();
            // $session->setTempdata('abmFormError', 'Error in sending', 10);
            // return redirect($uri);
            $response = [
                'error' => 'Error'
            ];
            return $this->fail($response, 400);
        }
    }
    
    public function sendABM()
    {
        // $input = $this->validate([
        //     'emailForAbm' => [
        //       'rules' => 'required|valid_email|regex_match[/^(?!.*@(gmail\.com|hotmail\.com|yahoo\.com|microsoft\.com|gmx\.com|rediff\.com|outlook\.com|zoho\.com|aol\.com|mailbox\.org)).*$/]',
        //       'errors' => [
        //           'required' => 'Email Address is required',
        //           'valid_email' => 'Invalid Email Address',
        //           'regex_match'=>'Please Enter Business Email',
        //       ],
        //     ],
        //     'abmFile' => [
        //         'rules' => 'required'
        //     ]
        // ]);

        // if (!$input) {
        //     $session = session();
        //     $session->setTempdata('abmFormError', 'All fields are required', 10);
        //     return redirect()->to('know-your-budget');
        // } else {
            $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("business@alltakesolutions.com", "Alltake");
            $email->setSubject("Custom Quote Form");
            $email->addTo('business@alltakesolutions.com');
            $email->addContent(
                "text/html", "Submitted by Email -".$this->request->getPost('emailForAbm')
            );
            
            $file = $this->request->getFile('abmFile');
            
            if ($file->isValid() && !$file->hasMoved()) {
                // Read the file content
                $fileContent = file_get_contents($file->getPathname());
            
                // Create an attachment
                $attachment = new Attachment();
                $attachment->setContent(base64_encode($fileContent));
                $attachment->setType($file->getMimeType());
                $attachment->setFilename($file->getName());
                $attachment->setDisposition("attachment");
            
                // Add the attachment to the email
                $email->addAttachment($attachment);
            }
            $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
            if($sendgrid->send($email)){
                $session = session();
                $session->setTempdata('abmFormSuccess', 'Thank you for submitting the form', 10);
                return redirect()->to('know-your-budget');
            } else {
                $session = session();
                $session->setTempdata('abmFormError', 'Error in sending', 10);
                return redirect()->to('know-your-budget');
            }
        // }
    }
}

