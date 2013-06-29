<form method="post" action="<?php echo site_url('contact/save');  ?>" id="customForm" > 
<?php 
    if($this->session->flashdata('message')){
        echo '<div id="show_message" style="border: 1px solid #028B3D;color: green; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('message').'</div>';
    }else if($this->session->flashdata('error')){
        echo '<div id="show_message_error" style="width:90%;border:1px solid #F00003;color:red; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('error').'</div>';
    }
?>

<div class="content_txt">
    <h2>Please select a catagory for your enquiry</h2>
    <div class="space"></div>
    <span class="radioOption">
    <div class="radio" id="RFID">
      <input type="radio" id="RFID_1" name="catagory"  checked="checked" placeholder="Account Enquiry" >
    </div>
    Account Enquiry
    <div class="clear"></div>
    </span> <span class="radioOption">
    <div class="radio" id="RFID">
      <input type="radio" id="RFID_2" name="catagory" placeholder="Genral Enquiry">
    </div>
    Genral Enquiry
    <div class="clear"></div>
    </span> <span class="radioOption2">
    <div class="radio" id="RFID">
      <input type="radio" id="RFID_3" name="catagory" value="IT Help" >
    </div>
    IT Help
    <div class="clear"></div>
    </span> <span class="radioOption">
    <div class="radio" id="RFID">
      <input type="radio" id="RFID_4" name="catagory" value="Customer Service" >
    </div>
    Customer Service
    <div class="clear"></div>
    </span>
    <div class="clear"></div>
    <div class="space"></div>
    <div class="contactnameimg">
      <input id="email" name="email" type="text" value="Email Address" class="contactname"  onFocus="defblank(this.id,'Email Address')" onBlur="defblank(this.id,'Email Address')"   />
      <div id="emailInfo"></div>
    </div>
    <div class="clear spaceClass_email" style="display:none;">&nbsp;</div>
    <div class="contactnameimg">
      <input name="subject" type="text" value="Subject" class="contactname"  id="subject" onFocus="defblank(this.id,'Subject')" onBlur="defblank(this.id,'Subject')" />
       <div id="subjectInfo"></div> 
    </div>
    <div class="clear spaceClass_sub" style="display:none;">&nbsp;</div>
    <div class="contactmessageimg">
      <textarea id="message" name="message" cols="10" rows="5" class="contactmessage"></textarea>
      <div class="spaceClass_comm" style="display:none;margin-top:8px;"></div>
      <div id="messageInfo"></div>
    </div>
     <div class="clear spaceClass_comm" style="display:none;">&nbsp;</div>
    <div class="space"></div>
     <div class="submit_btn_wp fl_btn">  
      <div class="mainbtn_cont">
          <button name="submit_reg_form" id="submit_enquiry" type="submit">
              <div class="submit_btn_left">
                    <div class="submit_btn_right"> Submit </div>
              </div>
           </button>
       </div>
    </div>
    
</div>
</form>
