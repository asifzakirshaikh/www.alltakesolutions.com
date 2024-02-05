<?php

namespace App\Controllers;

class Legal extends BaseController
{
    public function terms_and_conditions()
    {
        $data['twitter_title'] ='Terms and Conditions | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'Terms and Conditions | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('terms-and-conditions');
        $data['meta_image'] = base_url('images/home/image-9.png');
        
        $data['meta_title'] = 'Terms and Conditions | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['keywords'] = "";
        $data['title'] = 'Terms and Conditions | Legal | Alltake';
        $data['canonical'] = '';
        $data['schema'] = '';
        return view('header', $data)
            . view('terms_and_conditions')
            . view('footer');
    }

    public function gdpr()
    {
        $data['twitter_title'] ='GDPR | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'GDPR| Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('gdpr-compliance');
        $data['meta_image'] = base_url('images/home/image-9.png');
        
        $data['meta_title'] = 'GDPR| Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['keywords'] = "";
        $data['title'] = 'GDPR| Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '';
        $data['schema'] = '';
        return view('header', $data)
            . view('gdpr')
            . view('footer');
    }

    public function ccpa()
    {
        $data['twitter_title'] ='CCPA | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'CCPA| Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('ccpa');
        $data['meta_image'] = base_url('images/home/image-9.png');
        
        $data['meta_title'] = 'CCPA| Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['keywords'] = "";
        $data['title'] = 'CCPA| Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '';
        $data['schema'] = '';
        return view('header', $data)
            . view('ccpa')
            . view('footer');
    }

    public function privacy_policy()
    {
        $data['twitter_title'] ='Privacy Policy | Alltake | Leading B2B Marketing Agency';
        $data['twitter_description'] ='We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_title'] = 'Privacy Policy | Alltake | Leading B2B Marketing Agency';
        $data['og_description'] = 'We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.';
        $data['og_image'] = '';
        $data['og_url'] = base_url('privacy-policy');
        $data['meta_image'] = base_url('images/home/image-9.png');
        
        $data['meta_title'] = 'Privacy Policy | Alltake | Leading B2B Marketing Agency';
        $data['meta_description'] = "We are a data-driven B2B lead generation agency that drives business growth with services that cover everything from B2B marketing strategy to execution.";
        $data['keywords'] = "";
        $data['title'] = 'Privacy Policy | Alltake | Leading B2B Marketing Agency';
        $data['canonical'] = '';
        $data['schema'] = '';
        return view('header', $data)
            . view('privacy_policy')
            . view('footer');
    }
}
