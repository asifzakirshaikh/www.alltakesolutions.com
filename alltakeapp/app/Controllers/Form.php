<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
       
        $data['title'] = 'Form | Alltake | Demand Gen | Paid Media | Content Syndication';
        
        return view('form', $data);
            
    }
    
    public function web()
    {
        $data['title'] = 'WEBOLYTICS INTEGRATION Form | Alltake | Leading B2B Marketing Agency';
        
            return view('form_webolytics',$data);
            
    }
    
    public function modern()
    {
        $data['title'] = 'Modern Health Form | | Alltake | Leading B2B Marketing Agency';
        
            return view('form_modern',$data);
            
    }
    
    public function unifii()
    {
        $data['title'] = 'Unifii - Webolytics Form | Alltake | Leading B2B Marketing Agency';
        
            return view('form_unifii',$data);
            
    }
}
