    <div class="logo">
		<a href="{{ content:site  }}" title="Home">
			 <img src="{{theme_url}}/assets/images/logo.png" alt="Grade My Advisor Logo" border="0"  />
		</a>
   </div>
  
  <!-- MENU START HERE -->
	  <div id="navigation">
		<div class="navleft">
		   {{ navigations:nav nav_id="1"  }}
	   </div>
		  <div class="clear"></div>
	  </div>
 <!-- MENU END HERE -->

 {{ if content:is_current_page=='register' or content:is_current_page=='login' AND member:is_logged_in==false}}
   <div class="loginbox mt12">
        <!-- INPUT BOX START HERE-->
        <span class="loginInput3" id="loginboxinput">
           {{ if content:is_current_page=='register' }} 
             <a href="<?php echo site_url('member/login'); ?>" style="text-decoration:none;" >
				      <input name="" type="button" class="newtest" value="Login"/>
             </a>
            {{ else }}
             <a href="<?php echo site_url('member/register'); ?>"  style="text-decoration:none;" >
				        <input name="" type="button" class="newtest" value="Register"/>
             </a>
           {{ endif }} 
        </span> 
        <!-- input box close here -->
   </div>
     {{ elseif member:is_logged_in===true}}
        <div class="loginbox ">
            <!-- INPUT BOX START HERE-->
            <span id="loginboxinput1" class="loginInput_n4">
                {{ if member:is_profile_complete==true}}
                  <a href="<?php echo site_url('/member/accounts'); ?>" style="text-decoration:none;" >
                      <input name="" type="button" class="newtest" value="Account"/>
                  </a>
                {{else}}
                  <a href="<?php echo site_url('/member'); ?>" style="text-decoration:none;" >
                    <input name="" type="button" class="newtest" value="Account"/>
                  </a>
                {{ endif }}
            </span>
            <span class="loginInput3" id="loginboxinput">
                <a href="<?php echo site_url('member/logout'); ?>" style="text-decoration:none;" >
                    <input name="" type="button" class="newtest" value="Logout"/>
                </a>
            </span>
            <!-- input box close here -->
          </div>
     {{ else }}
 	<div class="loginbox">
		<span class="loginInput3" id="loginboxinput">
    		<!-- INPUT BOX START HERE-->
    	 	<a href="<?php echo site_url('member/login'); ?>" style="text-decoration:none;" >
    			<input name="" type="button" class="newtest" value="Login"/>
            </a>
        </span>  
        <span id="loginboxinput1" class="loginInput_n4">
      		<a href="<?php echo site_url('member/register'); ?>"  style="text-decoration:none;" >
      				<input name="" type="button" class="newtest" value="Register"/>
          </a>
      	</span>
		<!-- input box close here -->
    </div>
{{ endif }}
<div class="clear"></div>