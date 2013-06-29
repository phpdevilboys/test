<div class="specer20"></div>
<h1 class="topheading">My GMA Accounts </h1>
<div class="inner_content">
  <div class="spacer20"></div>
  <div class="dividermiddle_C">
    <div class="dividertop_C"></div>
  </div>
      <div class="dividermiddle_C">
        <div class="dividertop_C">
          <div class="dividerbottom_C">
            <div class="Fleft width439px mr28">
                <?php
                  if(isset($accounts) && !empty($accounts)) :
                    //Show even numbers accounts
                    $even = range(0, (count($accounts)-1), 2);
                    foreach ($even as $i) :
                      $account = $accounts[$i];
                ?>
                  <div class="specer10"></div>
                  <div>
                    <div class="highlitedtxt Fleft"><?php echo $account['portfolioName'] ?></div>
                    <div class="Fright line_h">
                      <a href="<?php echo $account['portfolioId'] ?>" class="fogrtpass pl_5px">
                        <img src="{{ theme_url }}/assets/images/report.png" title="View Report" />
                      </a> 
                      <a href="#" class="fogrtpass pl_5px">
                        <img src="{{ theme_url }}/assets/images/info.png" title="Account Info" />
                      </a> 
                      <span class="pl_5px">
                        <a href="#">
                          <img src="{{ theme_url }}/assets/images/edit.png" title="Edit Account" />
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="clear"></div>
                <?php 
                    endforeach;
                  endif;
                ?>
            </div>
            <!-- right div -->
            <div class="Fleft width430px ml10">
                <?php
                  if(isset($accounts) && !empty($accounts)) :
                    //Show odd numbers accounts
                    $even = range(1, (count($accounts)-1), 2);
                    foreach ($even as $i) :
                      $account = $accounts[$i];
                ?>
                  <div class="specer10"></div>
                  <div>
                    <div class="highlitedtxt Fleft"><?php echo $account['portfolioName'] ?></div>
                    <div class="Fright line_h">
                      <a href="<?php echo $account['portfolioId'] ?>" class="fogrtpass pl_5px">
                        <img src="{{ theme_url }}/assets/images/report.png" title="View Report" />
                      </a> 
                      <a href="#" class="fogrtpass pl_5px">
                        <img src="{{ theme_url }}/assets/images/info.png" title="Account Info" />
                      </a> 
                      <span class="pl_5px">
                        <a href="#">
                          <img src="{{ theme_url }}/assets/images/edit.png" title="Edit Account" />
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="clear"></div>
                <?php 
                    endforeach;
                  endif;
                ?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="spacer20"></div>
  <div class="clear"></div>
</div>