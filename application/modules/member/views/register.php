<div class="specer30"></div>
<form method="post" action="{{site_url}}/member/register/save" id="customRegForm" >
    <div class="inner_content width680px Fleft">
        <?php
        if ($this->session->flashdata('message')) {
            echo '<div id="show_message" style="border: 1px solid #028B3D;color: green; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">' . $this->session->flashdata('message') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div id="show_message_error" style="width:90%;border:1px solid #F00003;color:red; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
        <div class="content_txt">
            <h1 class="topheading">Registration 
                <div class="headding_subtext" style="margin-top:0px;" >(Mandatory fields are marked with an asterisk * ) </div>
            </h1>

            <div class="Fleft width710px mr28">
                <div class="contactnameimg_medium Fleft">
                    <input name="email" id="email" type="text" placeholder="Email Address*" class="contactname"  value="<?php echo set_value('email'); ?>" />
                </div>
                <div style="float:left;margin-left:10px;display:none;padding-top: 5px;" id="loaderEmail">
                    <img src="{{theme_url}}/assets/images/ajax.gif" />
                    <span style="display:none;"></span>
                </div>
                <div id="emailInfo"></div>
                <div style="clear:both;"></div>
                
                <div class="clear spaceClass_email" style="display:none;">&nbsp;</div>
                <div class="help pb5 ml6" > Your email address will act as username.</div>
                <div class="contactnameimg_medium Fleft">
                    <input name="password" id="password" type="password" placeholder="Password*" class="contactname"   />
                </div>
                <div id="passwordInfo"></div>
                <div style="clear:both;"></div>
                
                <div class="contactnameimg_medium Fleft">
                    <input name="con_password" id="con_password" type="password" placeholder="Confirm Password*" class="contactname"   />
                </div>
                <div id="con_passwordInfo"></div>
                <div style="clear:both;"></div>
            </div>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>

        <div style="float: left;margin-right: 25px;">
            <div class="contactname_sml_img2 Fleft pb5">
                <input name="captcha" id="captcha" type="text" placeholder="Enter Code" class="contactname" autocomplete="off"/>
            </div>
            <div class="Fleft ml28">
                <?php echo $captcha['image']; ?>
                <input type="hidden" value="<?php echo $captcha['word'] ?>" name="hd_cap" id="hd_cap" autocomplete="off"/>
            </div>
            <div class="clear"></div>
            <div class="help ml6"> Enter the code exactly shown in image</div>
        </div>
        <div id="captchaInfo" style="margin-left:5px;"></div>
        <div class="clear spaceClass_captcha">&nbsp;</div>
        <div class="specer11"></div>
        <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
        <div>
            <div class="checkbox" id="RFID">
                <input type="checkbox" id="receive_email" name="receive_email" value="1" />
            </div>
            <label>Check this box if you wish to receive emails about Products & Services <!--<span><a href="privacypolicy.html"  target="_blank" class="fogrtpass">View Privacy Policy</a></span>--></label>
            <div class="clear"></div>
        </div>
        <div class="specer20"></div>
        <div style='float:left;margin-right:125px;'>
            <div style="position:relative;" class="Fleft">
                <div class="checkbox" id="check_term" >
                    <input type="checkbox" id="term" name="term" value="1"/>
                </div>
                <div style="position: absolute;width: 18px;height:18px;z-index:2;"></div>
            </div>
            <label class="highlitedlink2" style="padding: 0;">
                <a href="#" id="button" style="padding: 0;">Agree to T&C</a> 
            </label>
            <div class="clear spaceClass_term" style="display:none;">&nbsp;</div>
        </div>
        <div id="termInfo"></div>
        <div class="clear"></div>
        <div class="help ml6">You must read and agree to T&C in order to proceed.</div>
        <div class="clear"></div>

        <!-- Modal Start -->
        <div id="modal">
            <div id="heading">
                Our Terms & Conditions
            </div>
            <div id="content">
                <div class="paragraph">
                    <p>
                        INVESTMENT PORTFOLIO EVALUATIONS INC. (DBA GRADEMYADVISOR.COM) DOES NOT PROVIDE INVESTMENT ADVICE. NEITHER INVESTMENT PORTFOLIO EVALUATIONS INC. NOR ANY PROVIDER OF THIRD PARTY CONTENT OR THEIR RESPECTIVE AGENTS WARRANTS THAT THE WEB SERVICE WILL BE UNINTERRUPTED OR ERROR FREE; NOR DOES INVESTMENT PORTFOLIO EVALUATIONS INC., ANY THIRD PARTY CONTENT PROVIDER, OR THEIR RESPECTIVE AGENTS MAKE ANY WARRANTY AS TO THE RESULTS TO BE OBTAINED FROM USE OF THE WEB SERVICE OR THE CONTENT. THE WEB SERVICE AND THE CONTENT ARE DISTRIBUTED ON AN "AS IS, AS AVAILABLE" BASIS. NEITHER INVESTMENT PORTFOLIO EVALUATIONS INC., THIRD PARTY CONTENT PROVIDERS, NOR THEIR RESPECTIVE AGENTS MAKE ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION, WARRANTIES OF TITLE OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, WITH RESPECT TO THE WEB SERVICE, ANY CONTENT OR ANY PRODUCTS OR SERVICES SOLD THROUGH THE WEB SERVICE. NEITHER INVESTMENT PORTFOLIO EVALUATIONS INC. NOR ANY THIRD PARTY CONTENT PROVIDER WARRANTS THAT ANY FILES AVAILABLE FOR DOWNLOADING THROUGH THE WEB SERVICE WILL BE FREE OF VIRUSES OR SIMILAR CONTAMINATION OR DESTRUCTIVE FEATURES. YOU EXPRESSLY AGREE THAT THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE SERVICE AND THE ACCURACY OR COMPLETENESS OF THE CONTENT IS ASSUMED SOLELY BY YOU. 
                    </p>
                </div>
                <!--<a href="vedio.html" class="button green close" style="width:auto;">I Agree</a>
                <a href="#" class="button red close">Decline</a>-->
                <div class="tds-button_greenb ml15"> 
                    <a class="margin_right close" style="cursor:pointer" id="term_agree_btn">
                        <span>I Agree</span>
                    </a> 
                </div>
                <div class="tds-button_greenb"> 
                    <a onmouseup="mouseup_tds_button_greenb(0)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right" href="#video.html" target="_blank">
                        <span>Decline</span>
                    </a> 
                </div>
                <label class="highlitedlink2 ">
                    <a href=<?php echo site_url() . 'privacy-policy' ?> > Privacy Policy </a> 
                </label>
            </div>
            <div class="clear"></div>
        </div>


        <div class="clear"></div>

        <div class="specer20"></div>
        <div class="submit_btn_wp fl_btn">  
            <div class="mainbtn_cont">
                <button name="submit_reg_form" id="submit_reg_form" type="submit">
                    <div class="submit_btn_left">
                        <div class="submit_btn_right"> Submit </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</form>          


