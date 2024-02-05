<?php

namespace App\Controllers;

class Industries extends BaseController
{
    public function index()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Industries We Cater To | Unique B2B Strategy for Your Business';
        $data['twitter_description'] ='Our services are tailored to meet your unique business needs as we cater to various industries, including healthcare, finance, retail, IT, and more.';
        $data['og_title'] = 'Industries We Cater To | Unique B2B Strategy for Your Business';
        $data['og_description'] = 'Our services are tailored to meet your unique business needs as we cater to various industries, including healthcare, finance, retail, IT, and more.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('industries');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Industries We Cater To | Unique B2B Strategy for Your Business';
         $data['meta_description'] = "Our services are tailored to meet your unique business needs as we cater to various industries, including healthcare, finance, retail, IT, and more.";
         $data['keywords'] = "";
        $data['title'] = 'Industries We Cater To | Unique B2B Strategy for Your Business';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('industries').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('industries')
            . view('footer');
    }
}
