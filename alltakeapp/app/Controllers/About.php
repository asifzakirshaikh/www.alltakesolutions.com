<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $this->cachePage(3);
        $data['twitter_title'] ='About Us | Alltake | B2B Lead Generation Agency';
        $data['twitter_description'] ='Alltake is a leading B2B marketing agency that delivers top-notch B2B marketing solutions with a focus on data-driven insights.';
        $data['og_title'] = 'About Us | Alltake | B2B Lead Generation Agency';
        $data['og_description'] = 'Alltake is a leading B2B marketing agency that delivers top-notch B2B marketing solutions with a focus on data-driven insights. ';
        $data['og_image'] = base_url('images/about/img-1.png');
        $data['og_url'] = base_url('about');
        $data['meta_image'] = base_url('images/about/img-1.png');
        
        $data['meta_title'] = 'About Us | Alltake | B2B Lead Generation Agency';
         $data['meta_description'] = "Alltake is a leading B2B marketing agency that delivers top-notch B2B marketing solutions with a focus on data-driven insights. ";
         $data['keywords'] = "B2B market, Alltake Solutions, marketing services";
        $data['title'] = 'About Us | Alltake | B2B Lead Generation Agency';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('about').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('about')
            . view('footer');
    }
}
