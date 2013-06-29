<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Video_plugin extends Plugin
{

	function youtube()
	{
		$id	= ($this->attribute('id') ? $this->attribute('id') : 'oHg5SJYRHA0');
		$width	= ($this->attribute('width') ? $this->attribute('width') : '100%');
		$height	= ($this->attribute('height') ? $this->attribute('height') : '315');
		
		return '<iframe src="http://www.youtube.com/embed/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	}
	
	function vimeo()
	{
		$id	= ($this->attribute('id') ? $this->attribute('id') : '42722025');
		$width	= ($this->attribute('width') ? $this->attribute('width') : '100%');
		$height	= ($this->attribute('height') ? $this->attribute('height') : '315');
		
		return '<iframe src="http://player.vimeo.com/video/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	}
        
        function show_video_by_id()
        {
            $id         = ($this->attribute('id') ? $this->attribute('id') : 'Pr6dLxOeOvA');
            $width	= ($this->attribute('width') ? $this->attribute('width') : '100%');
            $height	= ($this->attribute('height') ? $this->attribute('height') : '315');
            $CI =& get_instance();
            $video_model = $CI->load->model('video_model');
            $video = $video_model->where('id', $id)->get();
            
            if($video->video_type=="youtube"){
                $link = '<iframe src="http://www.youtube.com/embed/'.$video->video_code.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
            }else if($video->video_type=="vimeo"){
                $link = '<iframe src="http://player.vimeo.com/video/'.$video->video_code.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
            }else{
                $link = null;
            }
            return $link;
        }
        
       function show_more_video_link()
       {
            $CI =& get_instance();
            $video_model = $CI->load->model('video_model');
            $videos = $video_model->get();
            if(count($videos)>1){
                return '<a href="' . site_url('video') .'" class="mt16">More Videos</a>';
            }
            return null;
       }
}

/* End of file Plugin_video.php */