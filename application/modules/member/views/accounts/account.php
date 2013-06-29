<div class="specer20"></div>
      <div class="inner_content">
        <div class="dividermiddle_C">
          <div class="dividertop_C">
            <div class="dividerbottom_C">
              <div class="content_txt">
                <div class="Fleft width439px mr28">
                  <h1 class="topheading padding8">My GMA Accounts </h1>
                  <div class="specer10"></div>
                  <?php 
                    if($this->session->flashdata('message')){
                      echo '<div id="show_message" style="border: 1px solid #028B3D;color: green; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('message').'</div>';
                    }else if($this->session->flashdata('error')){
                      echo '<div id="show_message_error" style="width:90%;border:1px solid #F00003;color:red; font-weight: bold;margin-bottom:5px;padding:6px;width: 90%;">'.$this->session->flashdata('error').'</div>';
                    }
                  ?>
                  <div class="specer10"></div>
                  <div class="tds-button_greenb"> <a href="{{ site_url }}/member/portfolio/create-investment-account" onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" ><span>Create Investment Account</span></a> </div>
                  <div class="tds-button_greenb Fright"> <a href="google_check_out.html" onmouseup="mouseup_tds_button_greenb(this)" onmousedown="mousedown_tds_button_greenb(this)" ><span>Purchase Report</span></a> </div>
                  <div class="clear"></div>
                  <div class="specer10"></div>
                  <?php
                    if( isset($accounts) && count($accounts)>0):
                      $recordShown = 0;
                      foreach ($accounts as $account) :
                        if($recordShown==6)break;
                  ?>
                    <div class="specer10"></div>
                    <div>
                        <div class="highlitedtxt Fleft"><?php echo ucfirst($account['portfolioName']); ?></div>
                        <div class="Fright line_h">
                            <a href="#<?php echo $account['portfolioId']; ?>" class="fogrtpass pl_5px">
                                <img src="{{ theme_url }}/assets/images/report.png" title="View Report" />
                            </a>
                            <a href="#<?php echo $account['portfolioId']; ?>" class="fogrtpass pl_5px">
                                <img src="{{ theme_url }}/assets/images/info.png" title="Account Info" />
                            </a>
                            <span class="pl_5px">
                                <a href="#<?php echo $account['portfolioId']; ?>">
                                    <img src="{{ theme_url }}/assets/images/edit.png" title="Edit Account" />
                                </a>
                            </span>
                        </div>
                      </div>
                    <div class="clear"></div>
                  <?php
                      $recordShown++;
                      endforeach;
                    else:
                  ?><div class="specer20"></div>
                  <div class="accountNotAvail">You did not created an investment account Yet !</div>
                  <?php
                    endif;
                  ?>
                  <!-- status second -->
                  <div class="specer20"> </div>
                  <?php if( isset($accounts) && (count($accounts)>6)): ?>
                  <div class="txtlink Fright"> <a href="{{ site_url }}/member/accounts/view-all" class="mt16">View All Account</a> </div>
                  <?php endif; ?>
                </div>
                <div class="Fleft width430px ml10">
                  <h1 class="topheading padding8">How It Videos
                    <div class="tds-button_grey Fright">
                    <a onmouseup="mouseup_tds_button_gery(this)" onmousedown="mousedown_tds_button_gery(this)" href="<?php echo site_url('member/update-profile'); ?>"><span class="font_normal">Edit Profile</span></a></div>
                  </h1>
                  <div class="clear"></div>
                  <div class="specer10"></div>
                  <div class="width_283 mt50">
                    <div class="dividertop"></div>
                    <div class="content_txt"><img src="{{ theme_url }}/assets/images/video_home_thumb.jpg" /> </div>
                    <div class="specer20"> </div>
                    <div class="specer20"> </div>
                    <div class="specer4"> </div>
                    <div  class="txtlink Fright font11"><a href="video.html" class="mt16">More Videos</a> </div>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="specer"></div>
                <!--<div class="contactmessageimg"><textarea id="comment" name="comment" cols="10" rows="5" class="contactmessage"></textarea></div>-->
                <div class="space"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      