<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{{ theme:partial name="metadata" }}
</head>
<body>
{{ template:analytics }}
<div id="wrapper">
  <div id="shadow">
       <!-- Header Start-->
         <div id="header">
		   {{ theme:partial name="header" }}
		 </div>
		<!-- Header END--> 
		
		{{ if content:is_current_page=='home' }} 
		   <!-- SET Second Header for Home : START -->
		   {{ theme:partial name="header_home" }}
		  <!-- SET Second Header for Home : END -->   
		 {{ else }} 
		   {{ if content:is_current_page!='register'}}
		   <!-- SET Second Header for Home : START -->
		   {{ theme:partial name="header_page" }}
		  <!-- SET Second Header for Home : END -->   
			{{ endif }}
		 {{ endif }}
		
		
       <!--CONTENT START HERE-->
		
	<div id="main_content">	
	  {{ if content:is_current_page=='home'}} 
		<div class="dividermiddleH01">
        <div class="dividertopH01">
          <div class="dividerbottomH01">
            <div class="dividermiddleH02">
              <div class="dividertopH02">
                <div class="dividerbottomH02">
                  <div class="inner_content">
                    {{ content }}
                    {{ theme:partial name="middle_home_contain" }}             
                  <div class="clear">&nbsp;</div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  {{ else }}
	    {{ if content:is_current_page=='forgotpassword' or content:is_current_page=='register' or content:is_current_page=='login' or content:is_module_name=='member' or content:is_current_page=='video'}} 
	      <div class="inner_content width_510 Fleft">
		   {{ content }}  
		  </div>
	     {{ if content:is_current_page=='register'}} 
	      <div class="content_txt inner_content_right pt10">
			  {{ theme:partial name="module_sidebar" }}
		  </div>
          <div class="clear"></div>
          <div class="specer30"></div>
	     {{ endif }} 
	   {{ else }}
	     {{ if content:is_current_page=='contactus' }}
		  <div class="specer20"></div>
			<h1 class="topheading">Contact us with any questions</h1>
			<div class="dividermiddle2">
			  <div class="dividertop2">
				<div class="dividerbottom2">
				  <div class="inner_content">
					<div class="innerdivaboutusleft extrapadding2">
					{{ body }}
					</div>
					<div class="innerdivaboutus extrapadding3">
					 {{ theme:partial name="sidebar" }} 
					</div>
					<div class="clear"></div>
				  </div>
				  </div>
				  </div>	
			 </div>	
			 	
	  {{ else }}  	
		<div class="specer20"></div>
    	    <div class="dividermiddle2">
		        {{ if content:is_current_page!='illustration'}} 
		             <div class="innerdivaboutusleft extrapadding2">
		                      {{ content }}  
		             </div>
		            <div class="innerdivaboutus extrapadding3">
						<!--START Sidebar -->
							{{ theme:partial name="sidebar" }}
						<!--END Sidebar -->
					</div>
				 {{ else }}
				    <div class="">
				    	    {{ content }}  
		            </div>
		          
				 {{ endif }} 
		            <div class="clear"></div>
		        </div>
    <div class="specer30"></div>	
	{{ endif }} 
	{{ endif }} 	
	{{ endif }}
		
    </div>
       <!--CONTENT END HERE-->
     <div class="clear"></div>
     <!--footer start-->
    <div class="mainfooter">
		{{ theme:partial name="footer" }}
    </div>
    <!--footer end-->
   </div>
</div>

<!-- Model Start [This is loader modal used in whole application] -->
<div id="ajaxOverlayModal" style="display: none;">
    <div class="ajaxTitle">Please Wait</div>
    <img src="{{theme_url}}/assets/images/ajax_loader_circle.gif" />
</div>
<div id="ajaxResponseDialog"></div>
<!-- End -->
</body>
</html>