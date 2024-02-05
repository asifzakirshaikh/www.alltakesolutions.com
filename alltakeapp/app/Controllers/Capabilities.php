<?php

namespace App\Controllers;

class Capabilities extends BaseController
{
    public function index()
    {
        
    }

    public function marketing_strategy_profiling()
    {
        $this->cachePage(3);
        
         $data['twitter_title'] ='Marketing Strategy & Profiling | Focused B2B Marketing services';
        $data['twitter_description'] ='As marketing pioneers, we guide you from demand generation to customer conversion with a holistic marketing strategy.';
        $data['og_title'] = 'Marketing Strategy & Profiling | Focused B2B Marketing services';
        $data['og_description'] = 'As marketing pioneers, we guide you from demand generation to customer conversion with a holistic marketing strategy.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('capabilities/marketing-strategy-and-profiling');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Marketing Strategy & Profiling | Focused B2B Marketing services';
        $data['meta_description'] = "As marketing pioneers, we guide you from demand generation to customer conversion with a holistic marketing strategy.";
        $data['keywords'] = "B2B planning & profiling, B2B intelligence survey, Alltake, marketing strategy";
    	$data['title'] = 'Marketing Strategy & Profiling | Focused B2B Marketing services';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('capabilities/marketing-strategy-and-profiling').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('marketing_strategy_profiling')
            . view('footer');
    }

    public function content_marketing()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Content Marketing | Content Creation | Content Optimization';
        $data['twitter_description'] ='Drive engagement and conversions with a compelling content marketing strategy and enhance your brand with the power of content marketing.';
        $data['og_title'] = 'Content Marketing | Content Creation | Content Optimization';
        $data['og_description'] = 'Drive engagement and conversions with a compelling content marketing strategy and enhance your brand with the power of content marketing.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('capabilities/content-marketing');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Content Marketing | Content Creation | Content Optimization';
        $data['meta_description'] = "Drive engagement and conversions with a compelling content marketing strategy and enhance your brand with the power of content marketing.";
        $data['keywords'] = "B2B content marketing, Alltake ";
    	$data['title'] = 'Content Marketing | Content Creation | Content Optimization';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('capabilities/content-marketing').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('content_marketing')
            . view('footer');
    }

    public function digital_and_media()
    {
        $this->cachePage(3);
        
        $data['twitter_title'] ='Digital and Media | Media Planning | Marketing Strategy';
        $data['twitter_description'] ='We enhance your digital & social media strategies with our expertise in media planning, creating tailored campaigns across multiple channels.';
        $data['og_title'] = 'Digital and Media | Media Planning | Marketing Strategy';
        $data['og_description'] = 'We enhance your digital & social media strategies with our expertise in media planning, creating tailored campaigns across multiple channels.';
        $data['og_image'] = base_url('');
        $data['og_url'] = base_url('capabilities/digital-and-media');
        $data['meta_image'] = base_url('');
        
        $data['meta_title'] = 'Digital and Media | Media Planning | Marketing Strategy';
        $data['meta_description'] = "We enhance your digital & social media strategies with our expertise in media planning, creating tailored campaigns across multiple channels.";
        $data['keywords'] = "digital and media marketing, B2B lead gen services ";
    	$data['title'] = 'Digital and Media | Media Planning | Marketing Strategy';
        $data['canonical'] = '<link rel="canonical" href="'.base_url('capabilities/digital-and-media').'">';
        $data['schema'] = '';
        return view('header', $data)
            . view('digital_media')
            . view('footer');
    }
}
