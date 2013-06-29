<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_plugin extends Plugin
{
    /*
     * Entry URL
     *
     * Returns URL for a specified entry id
     *
     * @return string
     */
    public function entry_url()
    {
        return entry_url($this->attribute('entry_id'));
    }

    // ------------------------------------------------------------------------

    /*
     * Entry Name
     *
     * Returns entry title for a specified entry id
     *
     * @return string
     */
    public function entry_name()
    {
        return entry_name($this->attribute('entry_id'));
    }

    // ------------------------------------------------------------------------

    /*
     * Entries
     *
     * Queries and returns categories based on passed attributes
     *
     * @return array
     */
    public function entries()
    {
        $attributes = $this->attributes(); 
        $attributes['_content'] = $this->content();

        $data = entries($attributes);

        return $data;
    }

    // ------------------------------------------------------------------------

    /*
     * Is Home
     *
     * Checks if the current page matches that of the selected hompage
     *
     * @return bool
     */
    public function is_home()
    {
        return is_home();
    } 

    // ------------------------------------------------------------------------

    /*
     * Categories
     *
     * Queries and returns categories based on passed attributes
     *
     * @return string
     */
    public function categories()
    {
        $attributes = $this->attributes();
        $attributes['_content'] = $this->content();

        return categories($attributes);
    }

    // ------------------------------------------------------------------------

    /*
     * Archive
     *
     * Queries month year combinations for content type provided
     *
     * @return array
     */
    public function archive()
    {
        $attributes = $this->attributes();
        $attributes['_content'] = $this->content();

        return archive($attributes);
    }

    

    // Add New Functions

    /**
     * Current uri string
     *
     * Usage:
     * {{ url:current }}
     *
     * @param   array
     * @return  array
     */
    function current()
    {
        return site_url($this->uri->uri_string());
    }

    /**
     *
     * site URL of the install
     *
     * Usage:
     * {{ url:site }}
     *
     * @param   array
     * @return  array
     */
    function site()
    {
        $uri = $this->attribute('uri');

        return $uri ? site_url($uri) : rtrim(site_url(), '/').'/';
    }

    /**
     *
     * base URL of the install
     *
     * Usage:
     * {{ url:base }}
     *
     * @param   array
     * @return  array
     */
    function base()
    {
        return base_url();
    }

    /**
     *
     * Pick a segment and provide a default if nothing there
     *
     * Usage:
     * {{ url:segments segment="1" default="home" }}
     *
     * @param   array
     * @return  array
     */
    function segments()
    {
        $default = $this->attribute('default');
        $segment = $this->attribute('segment');

        return $this->uri->segment($segment, $default);
    }
    
    public function is_current_page()
    {
       $segment_array = $this->uri->segment_array();

       if (empty($segment_array)) {
            return 'home';
       }
       return end($segment_array);
        //return $this->uri->segment('1','home');
    }
    
    public function is_module_name()
    {
       $segment_array = $this->uri->segment_array();
       if (empty($segment_array)) {
            return 'home';
       }
       return ($segment_array[1]);
        //return $this->uri->segment('1','home');
    }

    /**
     *
     * Check that a key is extst in url or not 
     *
     * Usage:
     *
     * @param   array
     * @return  boolean
     */
    function is_segment()
    {
        $segment = $this->attribute('segment');
        $segment_array = $this->uri->segment_array();
        $result = array(
            'status' => in_array($segment, $segment_array)
        );
        return $result;
    }

    /**
     * build an anchor tag
     *
     * Usage:
     * {{ url:anchor segments="users/login" title="Login" class="login" }}
     *
     * @param   array
     * @return  string
     */
    function anchor()
    {
        $segments = $this->attribute('segments');
        $title = $this->attribute('title', '');
        $class = $this->attribute('class', '');
        
        $class = ! empty($class) ? 'class="' . $class . '"' : '' ;
        
        return anchor($segments, $title, $class);
    }

    /**
     * Build a box to show on front end
     * 
     * @param array
     * @return string
     */
    function home_page_box()
    {   
        $page_id = $this->attribute('page_id');
        $image = $this->attribute('image', '');
        
        $page_detail = home_page_box($page_id);

        $content_array = $page_detail->get_content_array();
        $result = '<h1>'. $page_detail->title .'</h1>
        <div class="blue_inner" >
            <div class="txt" >'.$content_array['right_column'].'</div>
            <img src="'.theme_url('/assets/images/'.$image).'" alt="'.$page_detail->title.'" border="0" width="104" height="102" />
            <div class="clear"></div>
        </div>
        <div class="readmorebt"><a href="'.entry_url($page_id).'"></a></div>';
        return $result;
    }

    /*
     * Entry Content
     *
     * Returns entry content for a specified entry id
     *
     * @return string
     */
    public function entry_content()
    {
        return entry_content($this->attribute('entry_id'));
    }

    // ------------------------------------------------------------------------
}