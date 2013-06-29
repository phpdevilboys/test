<div class="specer20"></div>
      <h1 class="topheading">Enter your profile details </h1>
      <div class="inner_content">
        <div class="highlitedtxt">Explanation, why we want two email addresses</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="spacer20"></div>
        <div class="dividermiddle_C">
          <div class="dividertop_C"></div>
        </div>
        <?php echo validation_errors();?>
        <form action="<?php echo site_url('member/update-profile') ?>" method="post" id="profile_form">
            <div class="dividermiddle_C">
              <div class="dividertop_C">
                <div class="dividerbottom_C">
                  <div class="Fleft width439px mr28">
                    <!--div class="highlitedtxt">Change Personal Detail</div-->
                    <div class="specer20"></div>
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
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="First Name*" class="contactname" id="first_name"  name="first_name" value="<?php echo $memberProfile['firstName'] ?>"/>
                    </div>
                    <div id="firstnameinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Last Name*" class="contactname" id="last_name" name="last_name" value="<?php echo $memberProfile['lastName'] ?>"/>
                    </div>
                    <div id="lastnameinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Mobile Number" class="contactname" id="mobile_num" name="mobile_num" value="<?php echo $memberProfile['mobileNum'] ?>"/>
                    </div>
                    <div id="mobileinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Secondary Email" class="contactname" id="email" name="sec_email_id" value="<?php echo $memberProfile['secEmailId'] ?>"/>
                    </div>
                    <div id="semailinfo"></div>
                    <div class="dropdowndiv_1 Fleft pt2 mb18 small_dropdown">
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
                    <div class="clear"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Address 1" class="contactname" id="address_line_1" name="address_line_1" value="<?php echo $memberProfile['addressLine1'] ?>" />
                    </div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Address 2" class="contactname" id="address_line_2" name="address_line_2" value="<?php echo $memberProfile['addressLine2'] ?>" />
                    </div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="City*" class="contactname" id="city" name="city" value="<?php echo $memberProfile['city'] ?>" />
                    </div>
                    <div id="cityinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="State*" class="contactname" id="state" name="state" value="<?php echo $memberProfile['state'] ?>" />
                    </div>
                    <div id="stateinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Zip Code*" class="contactname" id="zip_code"  name="zip_code" value="<?php echo $memberProfile['zipCode'] ?>" />
                    </div>
                    <div id="zipinfo"></div>
                    <div class="clear"></div>
                  </div>
                  <div class="Fleft width430px ml10">
                       <div class="specer20"> </div>
                      <div class="dropdowndiv">
                      <select class="select" title="Select security question 1*" id="security_ques_1" name="security_ques_1">
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
                    <div id="queinfo"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Security answer *" class="contactname" id="security_ans_1" name="security_ans_1" value="<?php echo $memberProfile['securityAns1'] ?>"/>
                    </div>
                    <div id="ans1info"></div>
                    <div class="dropdowndiv">
                      <select class="select" title="Select security question 2* "  id="security_ques_2" name="security_ques_2">
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
                    <div id="queinfo2"></div>
                    <div class="contactnameimg_medium">
                      <input type="text" placeholder="Security answer *" class="contactname" id="security_ans_2" name="security_ans_2" value="<?php echo $memberProfile['securityAns2'] ?>"/>
                    </div>
                    <div id="ans2info"></div>
                    <div class="clear"></div>
                    </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="submit_btn_wp fl_btn">  
                <div class="mainbtn_cont">
                    <button name="submit" id="submit_profile_form" type="submit" value="submit">
                        <div class="submit_btn_left">
                            <div class="submit_btn_right"> Submit </div>
                        </div>
                    </button>
               </div>
            </div>
        </form>
        <div class="clear"></div>
      </div>