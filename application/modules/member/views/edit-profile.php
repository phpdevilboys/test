
<div id="main_content">
    <div class="specer20"></div>
    <h1 class="topheading">Enter your profile details </h1>
    <div class="highlitedtxt">Explanation, why we want two email addresses</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="spacer20"></div>
     
    <div id="tabs" style="border: none;">
        <ul>
            <li><a href="#tabs-1">Personal Details</a></li>
            <li><a href="#tabs-2">Address Details</a></li>
            <!--<li><a href="#tabs-3">Contact Details</a></li>-->
            <li><a href="#tabs-4">Alternate Contact Details</a></li>
            <li><a href="#tabs-5">Change Password</a></li>
            <li><a href="#tabs-6">Security Settings</a></li>
        </ul>
        
        <div class="clear"></div>
        
        <div id="tabs-1">
			<div id="flash_global_message"></div>
            <!--tab nav1 start-->
            <div class="inner_content" id="warp">
                <!--<div class="highlitedtxt">Explanation, why we want two email addresses</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                <div class="spacer20"></div>
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                                <div class="clear"></div>
                                <div class="specer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Fleft width850px mr28">
                    <div class="height300">
                        <div class="highlitedtxt">Change Personal Detail</div>
                        <div class="specer10"></div>
                        <div class="dropdowndiv_1 float_none mb18">
                            <select class="select_1" title="Select one" name="title" id="title">
                                <option class="selected">Select Title</option>
                                <option value="Mr." <?php if($memberProfile['title']=='Mr.')echo 'selected="selected"'; ?>>Mr.</option>
                                <option value="Miss." <?php if($memberProfile['title']=='Miss.')echo 'selected="selected"'; ?>>Miss.</option>
                                <option value="Mrs." <?php if($memberProfile['title']=='Mrs.')echo 'selected="selected"'; ?>>Mrs.</option>
                                <option value="Dr." <?php if($memberProfile['title']=='Dr.')echo 'selected="selected"'; ?>>Dr.</option>
                                <option value="Ms." <?php if($memberProfile['title']=='Ms.')echo 'selected="selected"'; ?>>Ms.</option>
                            </select>
                        </div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="First Name*" class="contactname" id="first_name"  name="first_name" value="<?php echo $memberProfile['firstName'] ?>"/>
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Last Name*" class="contactname" id="last_name" name="last_name" value="<?php echo $memberProfile['lastName'] ?>"/>
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Mobile Number" class="contactname" id="mobile_num" name="mobile_num" value="<?php echo $memberProfile['mobileNum'] ?>"/>
                        </div>
                        <div class="clear"></div>
                        <div class="dropdowndiv_1 Fleft pt2 mb18 small_dropdown ">
                            <select class="select_1" title="Select one" id="suffix" name="suffix">
                                <option class="selected">Select Suffix</option>
                                <option value="Jr." <?php if($memberProfile['suffix']=='Jr.')echo 'selected="selected"'; ?>>Jr.</option>
                                <option value="Sr." <?php if($memberProfile['suffix']=='Sr.')echo 'selected="selected"'; ?>>Sr.</option>
                            </select>
                        </div>
                        <div class="dropdowndiv_1 Fleft pt2 mb18 mr15">
                            <select class="select_1" title="Select one" id="gender" name="gender">
                                <option class="selected">Select Gender</option>
                                <option value="Male" <?php if($memberProfile['gender']=='Male')echo 'selected="selected"'; ?>>Male</option>
                                <option value="Female" <?php if($memberProfile['gender']=='Female')echo 'selected="selected"'; ?>>Female</option>
                            </select>
                        </div>
                        <div class=" Fleft">
                            <div class="midium_txtbox2div float_left1">
                                <input type="text" class="dob contactname" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth" value="<?php echo ($memberProfile['dateOfBirth']===NULL)?NULL:date(DATE_FORMAT, $memberProfile['dateOfBirth']->getTimestamp()) ?>" />
                            </div>
                            <div class="date_picker" id="dobPic"><img src="{{theme_url}}/assets/images/date_picker.png"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_personal_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="content_txt">
                    <div class="clear"></div>
                    <div class="specer"></div>
                </div>
            </div>
            <!--tab nav1 start-->
        </div>


        <div id="tabs-2">
		<div id="flash_global_message"></div>
            <div class="inner_content">
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                              <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="specer20"></div>
                <div class="Fleft width850px">
                    <div class="height300">
                        <div class="highlitedtxt">Change Address Detail</div>
                        <div class="specer10"></div>
                        <div class="contactnameimg_medium">
                            <input type="text" placeholder="Address (First Line)" class="contactname" id="address_line_1" name="address_line_1" value="<?php echo $memberProfile['addressLine1'] ?>" />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium">
                            <input type="text" placeholder="Address (Second Line)" class="contactname" id="address_line_2" name="address_line_2" value="<?php echo $memberProfile['addressLine2'] ?>" />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="City*" class="contactname" id="city" name="city" value="<?php echo $memberProfile['city'] ?>" />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="State*" class="contactname" id="state" name="state" value="<?php echo $memberProfile['state'] ?>" />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Zip Code*" class="contactname" id="zip_code"  name="zip_code" value="<?php echo $memberProfile['zipCode'] ?>" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_address_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <?php /*
        <div id="tabs-3">
            <div class="inner_content">
                <div class="spacer20"></div>
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                                <div class="clear"></div>
                                <div class="specer"></div>
                                <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Fleft width439px">
                    <div class="height300">
                        <div class="highlitedtxt">Change Email Address</div>
                        <div class="specer10"></div>
                        <div class="contactnameimg_medium">
                            <input name="username2" type="text" placeholder="Old Primary Email Address" class="contactname" id="Old Primary Email Address"  />
                        </div>
                        <div class="contactnameimg_medium">
                            <input name="username2" type="text" placeholder="New Primary Email Address" class="contactname" id="New Primary Email Address" />
                        </div>
                        <div class="contactnameimg_medium">
                            <input name="username2" type="text" placeholder="Confirm New Primary Email Address" class="contactname" id="Confirm New Primary Email Address"  />
                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_email_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>
                </div>
                <div class="clear"></div>



                <div class="clear"></div>
                <div class="content_txt">
                    <div class="clear"></div>
                    <div class="specer"></div>
                    <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                </div>
            </div>
        </div>
        */ ?>
        <div id="tabs-4">
        <div id="flash_global_message" style="display:none;"></div>
            <div class="inner_content">
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                              <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="specer20"></div>
                <div class="Fleft width850px">
                    <div class="height300">
                        <div class="highlitedtxt">Change Alternate Contact Detail</div>
                        <div class="specer10"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Alternate Email Address" class="contactname" id="email" name="sec_email_id" value="<?php echo $memberProfile['secEmailId'] ?>"/>
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Alternate Mobile Number" class="contactname" id="sec_mobile_num" name="sec_mobile_num" value="<?php echo $memberProfile['secMobileNum'] ?>"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_contact_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        
        <div id="tabs-5">
			<div id="flash_global_message" style="display:none;"></div>
            <div class="inner_content">
                <div class="spacer20"></div>
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                                <div class="clear"></div>
                                <div class="specer"></div>
                                <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Fleft width850px ">
                    <div class="height300"> 
                        <div class="highlitedtxt"> Change Password</div>
                        <div class="specer10"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input name="old_pwd" type="password" placeholder="Old Password" class="contactname" id="old_pwd"  />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input name="new_pwd" type="password" placeholder="New Password" class="contactname" id="new_pwd"  />
                        </div>
                        <div class="clear"></div>
                        <div class="contactnameimg_medium Fleft">
                            <input name="re_pwd" type="password" placeholder="Confirm New Password" class="contactname" id="re_pwd"  />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_password_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>

                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="content_txt">
                    <div class="clear"></div>
                    <div class="specer"></div>
                    <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                </div>
            </div>
        </div>
        <div id="tabs-6">
			<div id="flash_global_message" style="display:none;"></div>
            <div class="inner_content">
                <div class="dividermiddle_C">
                    <div class="dividertop_C">
                        <div class="dividerbottom_C">
                            <div class="content_txt">
                              <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="specer20"></div>
                <div class="Fleft width850px">
                    <div class="height300"> 
                        <div class="highlitedtxt">Change Security Question</div>
                        <div class="specer10"></div>
                        <div class="dropdowndiv Fleft">
                            <select class="select" title="Select security question 1*" id="security_ques_1" name="security_ques_1" onchange="matchQues('security_ques_1');">
                            <option class="selected" value="">Select security question 1* </option>
                            <?php
                                $selected = "";
                                if(isset($securrity_question)):
                                    foreach ($securrity_question as $ques_id=>$question):
                                        $selected = ( $ques_id == $memberProfile['securityQues1'] )?'selected="selected"':'';
                            ?>
                                <option value="<?php echo $ques_id; ?>" <?php echo $selected;?> ><?php echo $question; ?></option>
                            <?php
                                    endforeach;
                                endif;
                            ?>
                          </select>
                        </div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Security answer *" class="contactname" id="security_ans_1" name="security_ans_1" value="<?php echo $memberProfile['securityAns1'] ?>"/>
                        </div>
                        <div class="dropdowndiv Fleft">
                            <select class="select" title="Select security question 2* "  id="security_ques_2" name="security_ques_2" onchange="matchQues('security_ques_2');">
                                <option class="selected" value="">Select security question 2* </option>
                                <?php
                                    if(isset($securrity_question)):
                                        foreach ($securrity_question as $ques_id=>$question):
                                            $selected = ( $ques_id == $memberProfile['securityQues2'] )?'selected="selected"':'';
                                ?>
                                    <option value="<?php echo $ques_id; ?>" <?php echo $selected; ?> ><?php echo $question; ?></option>
                                <?php
                                        endforeach;
                                    endif;
                                ?>
                              </select>
                        </div>
                        <div class="contactnameimg_medium Fleft">
                            <input type="text" placeholder="Security answer *" class="contactname" id="security_ans_2" name="security_ans_2" value="<?php echo $memberProfile['securityAns2'] ?>"/>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="submit_btn_wp fl_btn">  
                        <div class="mainbtn_cont">
                            <button name="submit" id="submit_security_form" type="submit" value="submit">
                                <div class="submit_btn_left">
                                    <div class="submit_btn_right"> Save Changes </div>
                                </div>
                            </button>
                       </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div  class="specer20"></div>
</div>
<style>
#tabs{background: none;}
#tabs .ui-widget-header{border:none;background: none;}
#tabs ul{padding: 0;}
</style>
