<?php

namespace App\Controllers;

class Solutions extends BaseController
{
    public function index()
    {
        
    }

    public function account_based_experience()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='ABX | Account-Based Experience for Custom B2B Marketing Strategy';
        $data['twitter_description'] ='Personalize your customer engagement and drive revenue growth by implementing the power of Account-Based Experience (ABX) with our services.';
        $data['og_title'] = 'ABX | Account-Based Experience for Custom B2B Marketing Strategy';
        $data['og_description'] = 'Personalize your customer engagement and drive revenue growth by implementing the power of Account-Based Experience (ABX) with our services.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/account-based-experience');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'ABX | Account-Based Experience for Custom B2B Marketing Strategy';
        $data['meta_description'] = "Personalize your customer engagement and drive revenue growth by implementing the power of Account-Based Experience (ABX) with our services.";
        $data['keywords'] = "";
    	$data['title'] = 'ABX | Account-Based Experience for Custom B2B Marketing Strategy';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/account-based-experience').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('abx')
            . view('footer');
    }

    public function account_based_marketing()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='ABM | Targeted and Personalized B2B Marketing Services';
        $data['twitter_description'] ='We provide Account-Based Marketing (ABM) services that help gain insights, optimize strategies, predict outcomes, and model complex systems.';
        $data['og_title'] = 'ABM | Targeted and Personalized B2B Marketing Services';
        $data['og_description'] = 'We provide Account-Based Marketing (ABM) services that help gain insights, optimize strategies, predict outcomes, and model complex systems.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/account-based-marketing');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'ABM | Targeted and Personalized B2B Marketing Services';
        $data['meta_description'] = "We provide Account-Based Marketing (ABM) services that help gain insights, optimize strategies, predict outcomes, and model complex systems.";
        $data['keywords'] = " ";
    	$data['title'] = 'ABM | Targeted and Personalized B2B Marketing Services';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/account-based-marketing').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('abm')
            . view('footer');
    }

    public function intent_based_profiling()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Intent-Based Profiling | Driven Insights to Increase Marketing ROI';
        $data['twitter_description'] ='We unlock the potential of Intent-Based Marketing to identify potential customers and personalize engagement to drive quality leads.';
        $data['og_title'] = 'Intent-Based Profiling | Driven Insights to Increase Marketing ROI';
        $data['og_description'] = 'We unlock the potential of Intent-Based Marketing to identify potential customers and personalize engagement to drive quality leads.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/intent-based-profiling');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Intent-Based Profiling | Driven Insights to Increase Marketing ROI';
        $data['meta_description'] = "We unlock the potential of Intent-Based Marketing to identify potential customers and personalize engagement to drive quality leads.";
        $data['keywords'] = "";
    	$data['title'] = 'Intent-Based Profiling | Driven Insights to Increase Marketing ROI';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/intent-based-profiling').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('intent_based_profiling')
            . view('footer');
    }

    public function content_studio()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Content Studio | Create a Unique Content Marketing Strategy';
        $data['twitter_description'] ='We provide a variety of infographics, newsletters, carousels, whitepapers, case studies, and eBooks to create captivating content with Content Studio.';
        $data['og_title'] = 'Content Studio | Create a Unique Content Marketing Strategy';
        $data['og_description'] = 'We provide a variety of infographics, newsletters, carousels, whitepapers, case studies, and eBooks to create captivating content with Content Studio.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/content-studio');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Content Studio | Create a Unique Content Marketing Strategy';
        $data['meta_description'] = "We provide a variety of infographics, newsletters, carousels, whitepapers, case studies, and eBooks to create captivating content with Content Studio.";
        $data['keywords'] = "";
        $data['title'] = 'Content Studio | Create a Unique Content Marketing Strategy';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/content-studio').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('content_studio')
            . view('footer');
    }
    
    public function lead_generation()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Account-Based Lead Generation | Faster Conversions | Retention';
        $data['twitter_description'] ='Alltake generates account-based leads that precisely match your target audience and assists you with lead nurturing, faster conversions, and long-term retention.';
        $data['og_title'] = 'Account-Based Lead Generation | Faster Conversions | Retention';
        $data['og_description'] = 'Alltake generates account-based leads that precisely match your target audience and assists you with lead nurturing, faster conversions, and long-term retention.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/account-based-lead-generation');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Account-Based Lead Generation | Faster Conversions | Retention';
        $data['meta_description'] = "Alltake generates account-based leads that precisely match your target audience and assists you with lead nurturing, faster conversions, and long-term retention. ";
        $data['keywords'] = "";
        $data['title'] = 'Account-Based Lead Generation | Faster Conversions | Retention';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/account-based-lead-generation').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('lead_generation')
            . view('footer');
    }
    
    
    public function b2b_lead_generation()
    {
      
        
        $data['twitter_title'] ='B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['twitter_description'] ='Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.';
        $data['og_title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['og_description'] = 'Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('b2b-lead-generation');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['meta_description'] = "Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.";
        $data['keywords'] = "";
        $data['title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('b2b-lead-generation').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('b2b_lead_generation')
            . view('footer');
    }

    public function case_study()
    {
        
        
        $data['twitter_title'] ='MQL Case Study | Improved Lead Quality |Problem Solving in Action';
        $data['twitter_description'] ='Witness how a global B2B SaaS company overcame its MQL and customer journey optimization challenges with a focus on qualifying and scoring leads.';
        $data['og_title'] = 'MQL Case Study | Improved Lead Quality |Problem Solving in Action';
        $data['og_description'] = 'Witness how a global B2B SaaS company overcame its MQL and customer journey optimization challenges with a focus on qualifying and scoring leads.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/case-study');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'MQL Case Study | Improved Lead Quality |Problem Solving in Action';
        $data['meta_description'] = "Witness how a global B2B SaaS company overcame its MQL and customer journey optimization challenges with a focus on qualifying and scoring leads.";
        $data['keywords'] = "";
        $data['title'] = 'MQL Case Study | Improved Lead Quality |Problem Solving in Action';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/case-study').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('b2b_case_study')
            . view('footer');
    }


    public function send_email()
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
            
             'email' => [
               'rules' => 'required|valid_email',
               'errors' => [
                  'required' => 'Email Address is required',
                  'valid_email' => 'Invalid Email Address',
               ],
            ],
            'c_name' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Company Name is required',
               ],
            ],
            
            
        ]);

        if (!$input) {
            
            $session = session();
            
            
        $data['twitter_title'] ='B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['twitter_description'] ='Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.';
        $data['og_title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['og_description'] = 'Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('solutions/b2b-lead-generation');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['meta_description'] = "Attain excellence in B2B lead generation with our marketing expertise. Boost your sales acceleration and lead acquisition by elevated success.";
        $data['keywords'] = "";
        $data['title'] = 'B2B Lead Generation Agency | Your Blueprint for Success | Alltake';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('solutions/b2b-lead-generation').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('b2b_lead_generation')
            . view('footer');
           

        } else {

            $session = session();
            $fn = $this->request->getPost('fn');
            $ln = $this->request->getPost('ln');
            $c_name = $this->request->getPost('c_name');
            $email = $this->request->getPost('email');
            $lead_generation = $this->request->getPost('lead_generation');
            $reject_rates = $this->request->getPost('reject_rates');
            $ICP_buyer = $this->request->getPost('ICP_buyer');
            $Intent_base_Information = $this->request->getPost('Intent_base_Information');
            $ABM = $this->request->getPost('ABM_&_capabilities');
            $ontime_critical_campaign = $this->request->getPost('ontime_critical_campaign');
            $Improve_Roi = $this->request->getPost('Improve_Roi');
            $cold_calls = $this->request->getPost('cold_calls_&_email');
            $Another = $this->request->getPost('Another');
            $subject = 'B2B Lead Generation request by '.$fn.''.$ln;
            $message = 'B2B Lead request by '.$fn;
            $message.= '<br>';
            $message.= 'First Name - '.$fn;
            $message.= '<br>';
            $message.= 'Last Name - '.$ln;
            $message.= '<br>';
            $message.= '<br>';
            $message.= 'Company Email - '.$email;
            $message.= '<br>';
            $message.= 'Company Name - '.$c_name;
            $message.= '<br>';
            $message.= 'I am interested in - '.$lead_generation;
            $message.= '<br>';
            $message.= 'I am interested in - '.$reject_rates;
            $message.= '<br>';
            $message.= 'I am interested in - '.$ICP_buyer;
            $message.= '<br>';
            $message.= 'I am interested in - '.$Intent_base_Information;
            $message.= '<br>';
            $message.= 'I am interested in - '.$ABM;
            $message.= '<br>';
            $message.= 'I am interested in - '.$ontime_critical_campaign;
            $message.= '<br>';
            $message.= 'I am interested in - '.$Improve_Roi;
            $message.= '<br>';
            $message.= 'I am interested in - '.$cold_calls;
            $message.= '<br>';
            $message.= 'I am interested in - '.$Another;


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

            $mail->setFrom($email, $fn);
            $mail->setTo($to_email);
            $mail->setSubject($subject);
            $mail->setMessage($message);

            if($mail->send())
            {
               $session->setTempdata('contact_form_success', 'Thank you for submitting the form.', 10);

                return redirect()->to('b2b-lead-generation');
            } else {
               $session->setTempdata('contact_form_error', 'Something went wrong!', 10);

               return redirect()->to('b2b-lead-generation');
            }
    }
    
   }
}
