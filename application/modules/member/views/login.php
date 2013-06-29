<div  class="spacer20"></div>
<form method="post" action="{{site_url}}/member/login/authenticate" id="customLoginForm" >
    <div class="thanku_message min_h200px width680px">
        <div class="content_txt">
            <h1 class="topheading">Login </h1>
            <div class="Fleft width680px mr28">
                <?php
                if ($this->session->flashdata('error')) {
                    echo '<div id="show_message_error" style="width:90%;margin-left:10px;border:1px solid #F00003;color:red; font-weight: bold;margin-bottom:5px;padding:6px;">' . $this->session->flashdata('error') . '</div>';
                } else if ($this->session->flashdata('message')) {
                    echo '<div id="show_message" style="border: 1px solid #028B3D;color: green; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">' . $this->session->flashdata('message') . '</div>';
                }
                ?>

                <div class="contactnameimg_medium Fleft">
                    <input name="email" type="text" placeholder="Email Address" class="contactname"  id="email"  />
                </div>
                <div id="emailInfo"></div>
                <div class="clear spaceClass_email" style="display:none;">&nbsp;</div>
                <div class="contactnameimg_medium Fleft">
                    <input name="password" type="password" placeholder="Password" class="contactname"  id="password"  />
                </div>
                <div id="passwordInfo"></div>
                <div class="clear spaceClass_pass" style="display:none;">&nbsp;</div> 
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <?php /*
          <div class="loginboxtxt">
          <div class="checkbox" id="RFID">
          <input type="checkbox"  value="1" name="remember_me">
          </div>
          <label>Remember Me</label>
          <a href="forgotpassword" class="fogrtpass">Forgot Password</a>
          <div class="clear"></div>
          </div>
         */ ?>
        <div class="specer20"></div>
        <div class="submit_btn_wp fl_btn">  
            <div class="mainbtn_cont">
                <button name="submit_login_form" id="submit_login" type="submit">
                    <div class="submit_btn_left">
                        <div class="submit_btn_right"> Login </div>
                    </div>
                </button>
            </div>
        </div>

        <div class="clear"></div>
        <div class="clear"></div>
    </div>
</form> 
<div class="specer30"></div>

