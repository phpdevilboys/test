<div class="specer20"></div>

<h1 class="topheading"> Create Portfolio </h1>
<div class="headding_subtext" >
  <p  class="boldtxt">EMA will never your actual acount number. Never enter your account number
    at any time in the data you provide us. Give the account a name for the purpose of recognization, that you will be
    able to accociate with the financial advisor & portfolio related to the account.</p>
  <br />
  <p class="boldtxt">Your Investment Account Must have at least 37 consecutive months of data in order to order a report.</p>
  <div class="specer20"></div>
</div>
<div class="inner_content">
  <?php 
  if($this->session->flashdata('message')){
    echo '<div id="show_message" style="border: 1px solid #028B3D;color: green; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('message').'</div>';
  }else if($this->session->flashdata('error')){
    echo '<div id="show_message_error" style="width:90%;border:1px solid #F00003;color:red; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('error').'</div>';
  }
  echo validation_errors();
  ?>
  <form id="create_portfloio_form" method="post">
    <div class="content_txt">
      <div class="Fleft width439px mr28 width910px">
        <div class="highlitedtxt"> Please do not input your actual account number</div>
        <div class="spacer5"></div>
        <div class="contactnameimg_medium ">
          <input type="text" placeholder="Account Name* (Field does not accept numbers)" class="contactname" id="portfolio_name"  name="portfolio_name"  />
          <span id="accountInfo"></span>
        </div>
        <div class="pt10"></div>
        <div>
          <span class="radioOption radioOption_width320">
            <div class="radio" id="INID1">
              <input type="radio"  name="portfolio_type" value="1" id="inid1" />
            </div>
            <label for="inid1">Financial advisor Portfolio</label>
          <div class="clear"></div>
          </span>
          <span class="radioOption radioOption_width320">
            <div class="radio" id="INID2">
              <input type="radio" name="portfolio_type" value="2" id="inid2">
            </div>
            <label for="inid2">401K Plan</label>
          <div class="clear"></div>
          </span>
          <div class="clear"></div>
        </div>
        <div class="specer20"></div>
      </div>
      <div class="clear"></div>
      <div class="Fleft width482px mr28 desc chart1">
        <div class="highlitedtxt"></div>
        <div class="clear"></div>
        <div class="contactnameimg_medium">
          <input type="text" placeholder="Financial Advisor Name*" class="contactname" id="financial_advisor_name"  name="financial_advisor_name" />
          <span id="advisorInfo"></span>
        </div>
        <div class="contactnameimg_medium">
          <input type="text" placeholder="Firm Name*" class="contactname" id="firm_name"  name="firm_name" />
        <span id="firmInfo"></span>
        </div>
        <div class="contactnameimg_medium">
          <input type="text" placeholder="Email Id*" class="contactname" id="financial_advisor_emailid"  name="financial_advisor_emailid" />
        <span id="emailInfo"></span><span id="validEmail"></span>
        </div>
        <div class="contactnameimg_medium Fleft">
          <input  type="text" placeholder="CRD No." class="contactname" id="financial_advisor_crdno"  name="financial_advisor_crdno" />
        </div>
        <a href="http://brokercheck.finra.org/Search/Search.aspx" target="_blank" class="Fleft" onclick="return !window.open(this.href, 'Finra', 'width=600,height=500')">
          <img src="{{ theme_url }}/assets/images/search-icon.jpg" />
        </a>
        <div class="clear"></div>
        <div class="contactnameimg_medium">
          <input type="text" placeholder="City" class="contactname" id="financial_advisor_city" name="financial_advisor_city" />
        </div>
        <div class="contactnameimg_medium">
          <input type="text" placeholder="State" class="contactname" id="financial_advisor_state" name="financial_advisor_state" />
        </div>
        
        <div class="clear"></div>
      </div>
      <div class="Fleft width482px mr28 desc chart2" style="display:none;">
        <div class="highlitedtxt"></div>
        <div class="clear"></div>
        <div class="dropdowndiv mb18">
          <select class="select" title="Select one" id="provider_401K" name="provider_401K">
            <option value="" class="selected">List of some reputed 401K Providers</option>
            <?php if(isset($provider_401k)): 
              foreach ($provider_401k as $provider):
                echo '<option value="'. $provider->getProviderId() .'" >' . $provider->getProviderName() . '</option>';
              endforeach;
              endif; 
            ?>
            <option value="other">OTHER - fill in here </option>
          </select>
        </div>
        <div class="clear"></div>      
      </div>
      <div class="additional_text">(you must provide at least 37 months of data to order a report)</div>
      <div class="clear"></div>
      <div class="specer"></div>

      <div class="space"></div>
      <div class="space"></div>
      <div class="submit_btn_wp fl_btn"> 
        <div class="mainbtn_cont">
          <button name="submit_login_form" id="submit_portfolio" type="submit">
            <div class="submit_btn_left">
              <div class="submit_btn_right"> Submit </div>
            </div>
           </button>
         </div>
       </div>
      <div class="clear"></div>
      <div class="tds-button Fright mr18"></div>
      <div class="clear"></div>
      <div class="spacer5"></div>
    </div>
  <form>
  <!--/*        </div></div></div>*/-->
  <div class="clear"></div>
</div>
<div class="specer30"></div>
<script type="text/javascript">
    $("#INID1").click(function(){
        $("div.desc").hide();
        $(".chart1").show();                  
    });
    $("#INID2").click(function(){
        $("div.desc").hide();
        $(".chart2").show();
    });
    $(document).ready(function(){
        $('#inid<?php echo $portfolio_type ?>').trigger('click')
        $("#INID<?php echo $portfolio_type ?>").css('background-position', 'center -50px');
    });
</script>