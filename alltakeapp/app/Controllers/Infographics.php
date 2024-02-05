<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Infographics_Model;

class Infographics extends BaseController
{

    public function __construct()
    {
        $infographics_model = new Infographics_Model();
        $url = 'i_url';
        $this->data = array(
            
            'infographics' => $infographics_model->orderBy('id', 'DESC')->get()->getResult(),
            'most_recent' => $infographics_model->orderBy('id',$url,'DESC')->limit(8)->get()->getResult(),
            'most_recent2' => $infographics_model->orderBy('id','DESC',$url)->limit(8)->get()->getResult(),
            
        );
    }



    public function index()
    {
        
        $data = $this->data;
        $data['twitter_title'] ='Infographics | Visualize the latest in Marketing Strategy';
        $data['twitter_description'] ='Visualize complex information with our eye-catching infographics, making trending topics easier to understand and reach a wider audience.';
        $data['og_title'] = 'Infographics | Visualize the latest in Marketing Strategy';
        $data['og_description'] = 'Visualize complex information with our eye-catching infographics, making trending topics easier to understand and reach a wider audience.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('infographics');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Infographics | Visualize the latest in Marketing Strategy';
         $data['meta_description'] = "Visualize complex information with our eye-catching infographics, making trending topics easier to understand and reach a wider audience.";
         $data['keywords'] = "";
        $data['title'] = 'Infographics | Visualize the latest in Marketing Strategy';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('infographics').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('infographics')
            . view('footer');
    }
}
