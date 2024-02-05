<?php

namespace App\Controllers;

class Budget extends BaseController
{
    public function index()
    {
        
        
        $data['twitter_title'] ='Budget Calculator | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['twitter_description'] ='Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_title'] = 'Budget Calculator | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['og_description'] = 'Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('know-your-budget');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Budget Calculator | Calculate and Project Your B2B Marketing Plan with Ease!';
         $data['meta_description'] = "Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.";
         $data['keywords'] = "B2B market, Alltake Solutions, marketing services";
        $data['title'] = 'Budget Calculator | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('know-your-budget').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('budget')
            . view('footer');
    }

     public function submit()
    {
        $input = $this->validate([
            
            'name' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Name field is required',
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
                  'required' => 'Your Consent is required',
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
        //  $uri = $this->request->getPost('uri');

        //  $session-> setTempdata('budget_err', 'Invalid All fields', 10);
        //  return redirect()->to($uri);
        $data['twitter_title'] ='Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['twitter_description'] ='Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['og_description'] = 'Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('know-your-budget');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
         $data['meta_description'] = "Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.";
         $data['keywords'] = "B2B market, Alltake Solutions, marketing services";
        $data['title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('know-your-budget').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('budget')
            . view('footer');
            
        } else {
            
        //      $keySecret = '6LflTSElAAAAABtrOGNHKJtTaqJmTBE8tpl-Fq4m';

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
         
        //   if ( $finalResponse) {
            //   $uri = $this->request->getPost('uri');
            $session = session();
            $NorthAmerica = $this->request->getPost('NorthAmerica');
            $emea = $this->request->getPost('emea');
            $apac = $this->request->getPost('apac');
            $Others1 = $this->request->getPost('others1');
            $others = $this->request->getPost('others');
            

            $Leadgeneration1 = $this->request->getPost('Leadgeneration1');
            $Awareness1 = $this->request->getPost('Awareness1');
            $Engagement1 = $this->request->getPost('Engagement1');
            $Qualitycheck = $this->request->getPost('Qualitycheck');
            $Others4 = $this->request->getPost('Others4');
            
            $revenue = $this->request->getPost('revenue');

            $Objective = $this->request->getPost('Objective');

            $Leads = $this->request->getPost('Leads');

            $titles = $this->request->getPost('titles');

            $size = $this->request->getPost('size');

            $Role = $this->request->getPost('Role');

            $services = $this->request->getPost('services');
            $services1 = $this->request->getPost('services1');
            $services2 = $this->request->getPost('services2');
            $services3 = $this->request->getPost('services3');
            $services4 = $this->request->getPost('services4');
            
            $name = $this->request->getPost('name');
            $ph_number = $this->request->getPost('ph_number');
            
            $email = $this->request->getPost('email');
            $consent = $this->request->getPost('consent');
            
            
            $date = date("Y-m-d H:i:s");
            
            $subject = 'Know Your Budget Request by '.$name;
            $message = 'Know Your Budget Request By '.$name;
            
            $message.= '
                <html lang="en">
                <head>
                    <style>
                        table {
                            border-top:1px solid #000000;
                            border-right:1px solid #000000;
                            border-bottom:0px;
                            border-left:0px;
                            min-width:800px;
                            padding:0px;
                        }
                        
                        table tr {
                            
                        }
                        
                        table td {
                            border-bottom:1px solid #000000;
                            border-left:1px solid #000000;
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
                            <td colspan="2">What is your Revenue Target ?</td>
                            <td>'.$revenue.'</td>
                        </tr>
                        <tr>   
                            <td colspan="2" colspan="2">What is your Campaigns Objective ?</td>
                            <td>'.$Objective.'</td>
                        </tr>
                        <tr>   
                            <td colspan="2" colspan="2">Number of Leads you need:</td>
                            <td>'.$Leads.'</td>
                        </tr> 
                        <tr>    
                            <td colspan="2">What are your Target Demographics?</td>
                           <td>'.$NorthAmerica.'<br>'.$emea.'<br>'.$apac.'<br>'.$Others1.'<br>'.$others.'</td>
                        </tr>
                        <tr>   
                            <td colspan="2" colspan="2">Business Titles you want to target ?</td>
                            <td>'.$titles.'</td>
                        </tr> 
                        <tr>    
                            <td colspan="2">Current Role in Company</td>
                            
                            <td>'.$Role.'</td>
                        </tr>
                        <tr>    
                            <td colspan="2">Pick all the services and solutions you may require</td>
                            <td>'.$services.'<br>'.$services1.'<br>'.$services2.'<br>'.$services3.'<br>'.$services4.'</td>
                        </tr>
                        <tr>    
                            <td colspan="2">Full Name</td>
                            <td colspan="2">'.$name.'</td>
                        </tr>
                        <tr>    
                            <td colspan="2">Business Number</td>
                            <td colspan="2">'.$ph_number.'</td>
                        </tr>
                        <tr> 
                            <td colspan="2">Business Email</td>   
                            <td colspan="2">'.$email.'</td>
                        </tr>
                        <tr>    
                            <td colspan="2">Consent</td> 
                            <td>'.$consent.'</td>
                        </tr>
                    </table> 
                    <br>
                </body>
            
            ';
            
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
               $session->setTempdata('budget_success', 'Yay, you did it! We will take it from here… <br> Thank you for filling out our KYB form. We have received your information and will get back to you shortly.', 10);

                return redirect()->to('know-your-budget');
            } else {
               $session->setTempdata('budget_errer', 'Something went wrong Please Enter Your Official Email ID!', 10);

               return redirect()->to('know-your-budget');
            }
              
              
        //   }else{
              
        //       $session->setTempdata('budget_errer', 'Something went wrong!', 10);

        //       return redirect()->to('know-your-budget');
        //   }
            
            
            
        }
    }
    
    public function knowYourBudget()
    {
        $data['twitter_title'] ='Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['twitter_description'] ='Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['og_description'] = 'Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('know-your-budget');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
         $data['meta_description'] = "Our Know Your Budget (KYB) calculator help you track expenses and estimate your marketing campaign budget to project your business’s best route.";
         $data['keywords'] = "B2B market, Alltake Solutions, marketing services";
        $data['title'] = 'Know Your Budget | Calculate and Project Your B2B Marketing Plan with Ease!';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('know-your-budget').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('knowYourBudget')
            . view('footer');
    }
    
}
