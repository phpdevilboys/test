<div id="main_content">
  <div class="specer20"></div>
  <div class="inner_content">
    <div class="dividermiddle_C">
      <div class="dividertop_C">
        <div class="dividerbottom_C">
          <div class="content_txt">
            <div class="Fleft width439px mr28">
              <h1 class="topheading">Asset Allocation Model
                <div class="headding_subtext">(Please enter data from your asset allocation before you enter data from your statments)</div>
              </h1>
              <div class="specer"></div>
              <div class="space"></div>
                <div id="added_aam_list">
                    <div class="pt20 aam_added">
                        <div id="account1" class="radio" >
                            <input type="radio" checked="checked" value="" name="account" id="account1" />
                        </div>
                        <div class="">
                            <span >[Start Date: 03/2012]</span>
                            <span class="ml10">[End Date: 06/2012]</span>
                            <span class="Fright"><a href="asset_allocation_model.html"><img width="20" border="0" height="20" class="edit_icon" title="Edit" alt="Edit" src="{{theme_url}}/assets/images/edit_icon.png"></a></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt20 aam_added">
                        <div id="account2" class="radio" >
                            <input type="radio" value="" name="account" id="account2" />
                        </div>
                        <div class="">
                            <span >[Start Date: 03/2012]</span>
                            <span class="ml10">[End Date: 06/2012]</span>
                            <span class="Fright"><a href="asset_allocation_model.html"><img width="20" border="0" height="20" class="edit_icon" title="Edit" alt="Edit" src="{{theme_url}}/assets/images/edit_icon.png"></a></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
              <div class="clear"></div>
              <div class="spacer20"></div>
              <div class="spacer20"></div>
              <!-- Chart -->
              <div class="account_data">
                <div class="pie_div" id="chart_div">
                </div>
              </div>      
            </div>
          </div>
          <!-- left box start -->
          <div class="Fleft width439px">
            <?php echo validation_errors(); ?>
              <form action="" method="post" id="aam_form" onsubmit="return false;">
            <div class="highlitedlink"></div>
            <div class="highlitedtxt">My Asset Allocation Model <span class="highlitedlink"> <a href="#" class="font_size11" id="button"> What is an Asset Allocation  Model?</a></span></div>
            <div  class="spacer11"></div>
            <div class="pt10">
              <div class="radio"  id="manual_form_radio">
                <input type="radio"  name="default_aam" value="2" checked="checked" id="own_aam"/>
              </div>
              Enter My Asset Allocation Model (Recommended)
              <div class="clear"></div>
            </div>
            <div class="pt10">
              <div class="radio" id="defualt_form_radio">
                <input type="radio"  name="default_aam" value="1" id="default_aam"/>
              </div>
              Use Default Asset Allocation Model
              <div class="clear"></div>
            </div>
            <div  class="spacer20"></div>
            <span class="startdate">Start Date</span>
            <div class="midium_txtbox2div_m float_left1">
              <input type="text" value="" class="contactname datepicker" placeholder="Start Date" id="start_date" name="start_date" autocomplete="off" />
            </div>
            <div class="date_picker_m" id="startPic"><img src="{{theme_url}}/assets/images/date_picker.png"/></div>
            <span class="enddate"> End Date</span>
            <div class="midium_txtbox2div_m float_left1">
              <input type="text" value="" class="contactname datepicker" placeholder="End Date" id="end_date" name="end_date" autocomplete="off" />
            </div>
            <div class="date_picker_m" id="endPic"/><img src="{{theme_url}}/assets/images/date_picker.png"/></div>
            <div class="clear"> </div>
            <div >
            	<div class="float_left1 error_message" style="width: 47%;">
            		<span id="startDateInfo">Please enter start date</span>
            	</div>
            	<div class="float_left1 error_message">
            		<span id="endDateInfo">Please enter end date</span>
            	</div>
            </div>
            <div class="clear"> </div>
            
            <div class="form_new defualt_form" style="display:none">
              <div class="highlitedtxt">Asset  Default Models</div>
              <div  class="specer20"></div>
              <div>These are default models for clients who dont’s have a formal asset allocation with their financial advisor.</div>
              <div style="height:230px;">
                <div class="pt10 width_200 Fleft" style="height:210px">
                  <?php if(isset($default_aam_model)):
                    $checked = '';
                    foreach ($default_aam_model as $aam_model) {
                      $checked = ($aam_model->getAamCatId()==1)?'checked="$checked"':'';
                  ?>
                    <div class="pt10">
                      <div class="radio" id="RFID2" style="background-position: center 0px;">
                        <input type="radio" name="aam_default_model" value="<?php echo $aam_model->getAamCatId() ?>" <?php echo $checked; ?>/>
                      </div>
                      <span id="RFID2_txt"><?php echo $aam_model->getCategory() ?></span>
                      <div class="clear"></div>
                    </div>
                  <?php
                    }
                    endif; ?>
                </div>
                <div class="clear"></div>
                <div class="specer20"></div>
                <!--
                <div class="tds-button_greenb">
                  <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right" href="#"><span>Submit</span></a>
                </div>
                <div class="tds-button_blue" style="float:right;">
                  <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right" href="data_entry.html"><span>Next Stage</span></a>
               </div>
                -->
              <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </div>
            <div class="form_new manual_form">
              <div class="specer20"></div>
              <span>Percentage</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="asset_percent[]" />
              </div>
              <span>%</span> <span class="dropspan"> Asset Class</span>
              <div class="dropdowndiv_1">
                <select title="Select" class="select_1 asset_class" style="z-index: 10; opacity: 0;" name="asset_class[]">
                  <option class="selected" value="">Select</option>
                  <?php //echo isset($asset_class)?$asset_class:''; ?>
                </select>
              </div>
              <div class="clear"></div>
              <span>Percentage</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="asset_percent[]" />
              </div>
              <span>%</span> <span class="dropspan"> Asset Class</span>
              <div class="dropdowndiv_1">
                <select title="Select" class="select_1 asset_class" style="z-index: 10; opacity: 0;" name="asset_class[]">
                  <option class="selected" value="">Select</option>
                  <?php //echo isset($asset_class)?$asset_class:''; ?>
                </select>
              </div>
              <div class="clear"></div>
              <span>Percentage</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="asset_percent[]" />
              </div>
              <span>%</span> <span class="dropspan"> Asset Class</span>
              <div class="dropdowndiv_1">
                <select title="Select" class="select_1 asset_class" style="z-index: 10; opacity: 0;" name="asset_class[]">
                  <option class="selected" value="">Select</option>
                  <?php //echo isset($asset_class)?$asset_class:''; ?>
                </select>
              </div>
              <div class="clear"></div>
              <span>Percentage</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="asset_percent[]" />
              </div>
              <span>%</span> <span class="dropspan"> Asset Class</span>
              <div class="dropdowndiv_1">
                <select title="Select" class="select_1 asset_class" style="z-index: 10; opacity: 0;" name="asset_class[]">
                  <option class="selected" value="">Select</option>
                  <?php //echo isset($asset_class)?$asset_class:''; ?>
                </select>
              </div>
              <div class="clear"></div>
              <span>Percentage</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="asset_percent[]" />
              </div>
              <span>%</span> <span class="dropspan"> Asset Class</span>
              <div class="dropdowndiv_1">
                <select title="Select" class="select_1 asset_class" style="z-index: 10; opacity: 0;" name="asset_class[]">
                  <option class="selected" value="">Select</option>
                  <?php echo isset($asset_class)?$asset_class:''; ?>
                </select>
              </div>
              <div class="clear"></div>
              <div class="greebtncontaine" id="add_more">
                <div class="tds-button_grey Fright margin_minus">
                  <a onmousedown="mousedown_tds_button_gery(this)" onmouseup="mouseup_tds_button_gery(this)"><span>Add Additional Asset Class</span></a>
                </div>
              </div>
              <div class="clear"></div>
              <span class="spanfont">Total</span>
              <div class="contactname_sml_img2 floatleft">
                <input type="text" class="contactname" name="total_percent" id="total_percent" disabled="disabled" />
              </div>
              <span> % </span>
              <div class="clear"></div>
              <div id="RFID" class="checkbox checkbox_n" style="background-position: center 0px;">
                <input type="checkbox" value="" name="complete_by_advisor" id="RFID">
              </div>
              <label class="labelwidth"> I want my financial Advisor to complate this step.  Send  me the email to notify my financial Advisor</label>
              <div class="clear"></div>
              <div class="specer20"></div>
              <div class="clear"></div>
            </div>
            <div class="submit_btn_wp fl_btn">  
              <div class="mainbtn_cont">
                <button name="submit_login_form" id="aam_submit" type="submit" value="">
                  <div class="submit_btn_left">
                    <div class="submit_btn_right"> Submit </div>
                  </div>
                 </button>
               </div>
            </div>
            <div class="tds-button_blue" style="float:right;">
              <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right" href="data_entry.html"><span>Next Stage</span></a>
            </div>
            <div class="clear"></div>
            <div class="specer15"></div>
            <!--  <div class="highlitedlink"><a href="asset_allocation_model_list.html">List of Asset Allocation Model</a></div>-->
          </form>
          </div>
          <!-- /Fleft width439px -->
          <div class="clear"></div>
          <div class="specer"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="specer30"></div>
</div>

<div id="modal">
  <div id="heading"> {{ content:entry_name entry_id="26" }} </div>
  <div id="content">
    <div class="paragraph">
      {{ content:entry_content entry_id="26" }}
    <!--<a href="vedio.html" class="button green close" style="width:auto;">I Agree</a>
                <a href="#" class="button red close">Decline</a>-->
    <div class="tds-button_greenb ml15"> <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right close" style="cursor:pointer"><span>Close</span></a> </div>
  </div>
  <div class="clear"></div>
  </div>
</div>
<div id="add_asset_class_modal" class="modalBox">
  <div id="heading"> Add Asset Class </div>
  <div id="content">
    <div class="paragraphAsset">
      <span class="assetSpanfont">
        Asset class name
      </span>
      <div class="contactnameimg_medium " style="float: left;">
        <input type="text" class="contactname" id="new_asset_class">
      </div>
      <div class="clear" ></div>
      <div class='error_message' id="assetClassInfo" style="float: left;margin-left: 130px;">Please enter valid class name.</div>
    <div class='buttonBox'>
      <div class="tds-button_greenb ml15" id="save_new_asset_class">
        <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right" style="cursor:pointer"><span>Save</span></a>
      </div>
      <div class="tds-button_greenb ml15"> <a onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" class="margin_right close" style="cursor:pointer" id="cancel_new_asset_class"><span>Cancel</span></a> </div>
    </div>
  </div>
  <div class="clear"></div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tooltip').tooltipster();
    });
    $("#manual_form_radio").click(function(){
      $("div.form_new").hide();
      $(".manual_form").show(); 
    });
    $("#defualt_form_radio").click(function(){
        $("div.form_new").hide();
        $(".defualt_form").show();                  
    });
        
        if($('#own_aam').is(':checked')) { 
          $("div.form_new").hide();
          $(".manual_form").show(); 
        }
        if($('#default_aam').is(':checked')) { 
          $("div.form_new").hide();
          $(".defualt_form").show();  
        }
</script>
<style>
.ui-datepicker-calendar {
    display: none;
    }
</style>