/*
 * This fiele would be used for the member validation and js
 * auther CDN Solutions.
 * link http://cdnsol.com
 */
var site_url;
jQuery(document).ready(function(){
	jQuery('#startDateInfo').hide();
	jQuery('#endDateInfo').hide();
	jQuery('#assetClassInfo').hide();
	//Sum the percentage and show the total
	jQuery('input[type="text"][name="asset_percent[]"]').blur(function(){
            var percent = jQuery(this).val();
            if(percent.match(/^[0-9]+/) || percent==""){
                var total = 0;
                //Get and total val of each fields
                jQuery('input[type="text"][name="asset_percent[]"]').each(function(){
                    val = jQuery(this).val();
                    if(val.length>0){
                        total = parseInt(total) + parseInt(val);
                    }
                });
                jQuery('#total_percent').val(total);
            }
	});
	
	//vaidate 
	jQuery('#aam_submit').click(function(e){
		result = true;
		e.preventDefault();
		result = validate_date();
		aam_type = jQuery("input[type='radio'][name='default_aam']:checked").val();
		
		if(aam_type==2)
		{
                    //Varify total asset percent should not more than 100
                    var total_percent = jQuery('#total_percent').val();
                    if(total_percent != 100 && total_percent != ""){
                        alert('Please enter assets perecentage correctly!');
                        result = false;
                    }
		}else{
                    var aam_modal = jQuery("input[type='radio'][name='aam_default_model']:checked").val();
                    if(typeof(aam_modal) == "undefined" || aam_modal.length == 0 ) {
                        alert('Please select Asset Default Model!');
                        result = false;	
                    }
		}
		if(result==true){
                    //jQuery('#aam_form').submit();
                    save_aam_model();
		}
		return result;
	});

	//Add Asset Class
	jQuery('#add_more').click(function(e) { // Button which will activate our modal
        jQuery('#add_asset_class_modal').reveal({ // The item which will be opened with reveal
            animation: 'fade',                   // fade, fadeAndPop, none
            animationspeed: 600,                       // how fast animtions are
            closeonbackgroundclick: true,              // if you click background will modal close?
            dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
        });
        return false;
   });

    jQuery('#save_new_asset_class').click(function(){
        var new_class = jQuery('#new_asset_class').val();
        if(new_class.match(/^[a-zA-z0-9 ]+$/g)){
            jQuery('#assetClassInfo').hide();
            // Send ajax request
            jQuery.ajax({
                url : site_url + '/member/accounts/add-asset-class',
                type: 'GET',
                data:{assetclass : new_class},
                success:function(res){
                    //response = jQuery.parseJSON(res);
                    if(res.status=='true'){
                        //jQuery('#add_asset_class_modal').modal('hide');
                        $('#cancel_new_asset_class').trigger('click');
                        jQuery('#new_asset_class').val('');
                        set_asset_class();
                    }
                }
                //beforeSend: function(){}
            });
        }else{
                jQuery('#assetClassInfo').show();
        }
        return true;
    });
});

function validate_date()
{
	var result = true;
	startDate = jQuery('#start_date').val();
	endDate = jQuery('#end_date').val();
	
	if(startDate.length==0){
		jQuery('#startDateInfo').show();
		result = false;
	}else{
		jQuery('#startDateInfo').hide();
	}
	
	if(endDate.length==0){
		jQuery('#endDateInfo').show();
		result = false;
	}else{
		jQuery('#endDateInfo').hide();
	}
	
	if(result === true){
		//Create object of start date
		startArr = startDate.split('-');
		startDate = new Date(startArr[2], startArr[0]-1, startArr[1]);
		
		//Create object of end date
		endArr = endDate.split('-');
		endDate = new Date(endArr[2], endArr[0]-1, endArr[1]);
		
		if( startDate > endDate ) {
                    alert('Start date should be prior to end date!');
                    result = false;
		}
	}
	
	return result;
}

//Get data and send ajax request 
function save_aam_model()
{
    asset_percent = new Array();
    asset_class = new Array();
    
    jQuery.each(jQuery("input[name='asset_percent[]']"), function() {
        if(jQuery(this).val()!=="")
            asset_percent.push(jQuery(this).val());
    });
    
    jQuery.each(jQuery("select[name='asset_class[]']"), function() {
        if(jQuery(this).val()!=="")
            asset_class.push(jQuery(this).val());
    });
    start_date = jQuery('#start_date').val();
    end_date = jQuery('#end_date').val();
    count_added_aam = 0;
    jQuery.ajax({
        url: site_url + '/member/portfolio/add-asset-allocation-model',
        data:{
            asset_percent:asset_percent,
            asset_class:asset_class,
            start_date:start_date,
            end_date:end_date
        },
        success: function (res){
            if(res.result===true){
                $('.aam_added').each(function(){
                    count_added_aam++;
                });
                html_to_append = '<div class="pt20 aam_added">'+
                        '<div id="account_div_'+count_added_aam+'" class="radio" >'+
                            '<input type="radio" value="" name="account'+count_added_aam+'" id="account'+count_added_aam+'" />'+
                        '</div>'+
                        '<div class="">'+
                            '<span >[Start Date: 03/2012]</span>'+
                            '<span class="ml10">[End Date: 06/2012]</span>'+
                            '<span class="Fright"><a href="#'+res.aam_id+'"><img width="20" border="0" height="20" class="edit_icon" title="Edit" alt="Edit" src="{{theme_url}}/assets/images/edit_icon.png"></a></span>'+
                        '</div>'+
                        '<div class="clear"></div>'+
                    '</div>';
                
            }else if(res.result===false){
                $('.aam_added').each(function(){
                    count_added_aam++;
                });
                alert(count_added_aam);
                alert(res.message);
            }
        }
    });
}

//////////////////////////// Chart /////////////////////////////////////////////

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(draw_chart);

function draw_chart(chartData)
{
	if(! chartData.length>0 ){
		chartData = [['Investment', 'Details'],
			['Bonds',     0],
			['Cash',      0],
			['Large Cap Srtocks',  0],
			['Small Cap Stocks', 0],
			['International Stockes',    0]];
	}
	var data = google.visualization.arrayToDataTable(
		chartData
	);
            
	var options = {
		title: 'Asset Allocation Model',
		width: 415,
		top: 15,
		left: 10,
		backgroundColor: '#F2F2F2',
		is3D: true
	};
        if(document.getElementById('chart_div')!==null)
        {
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
}

jQuery(document).ready(function(){
    //change chart on chage event of asset class
    jQuery('select[name="asset_class[]"]').change(function(){
            create_chart();
    });
    jQuery('input[name="asset_percent[]"][type="text"]]').change(function(){
            create_chart();
    });
    
    //Show on the click of added data
    jQuery('#account1').click(function(){
        chartData = [['Investment', 'Details'],
			['Bonds',     30],
			['Cash',      15],
			['Large Cap Srtocks',  20],
			['Small Cap Stocks', 20],
			['International Stockes',    15]];
        draw_chart(chartData);
    });
    jQuery('#account2').click(function(){
        chartData = [['Investment', 'Details'],
			['Bonds',     10],
			['Cash',      10],
			['Large Cap Srtocks',  20],
			['Small Cap Stocks', 20],
			['International Stockes',    40]];
        draw_chart(chartData);
    });
    jQuery('#account3').click(function(){
        chartData = [['Investment', 'Details'],
			['Bonds',     15],
			['Cash',      15],
			['Large Cap Srtocks',  15],
			['Small Cap Stocks', 15],
			['International Stockes',    40]];
        draw_chart(chartData);
    });
    jQuery('#account4').click(function(){
        chartData = [['Investment', 'Details'],
			['Bonds',     30],
			['Cash',      10],
			['Large Cap Srtocks',  20],
			['Small Cap Stocks', 10],
			['International Stockes',    30]];
        draw_chart(chartData);
    });
});

var is_used_create_chart = false;
function create_chart()
{
	//Array of asset class
	var classArray = new Array();
	jQuery('select[name="asset_class[]"]').each(function(){
		classArray.push(jQuery("option:selected", this).text());
	});

	//Array of asset class percent
	var percentArray = new Array();
	jQuery('input[name="asset_percent[]"][type="text"]').each(function(){
		if(jQuery(this).val().match(/^[0-9]+/g)){
			percentArray.push(jQuery(this).val());
		}else{
			percentArray.push(0);
		}
	});

	//Prepare Chart
	var totalPer = 0;
	var chart = new Array();
	var chartData = [['Investment', 'Details'],['Unknown', 0]];
	for(count=0;count<classArray.length;count++)
	{
            if(classArray[count]!=='Select') {
                percentData = parseInt(percentArray[count]);
                if( classArray[count] in chart ){
                    percentData = percentData + parseInt(chart[classArray[count]]);
                }
                chart[classArray[count]] = percentData;
                //chartData.push([classArray[count], percentData]);
            }
	}
	for (cls in chart) {
            chartData.push([cls, chart[cls]]);
            totalPer = totalPer + chart[cls];
	}
        if(totalPer<=100){
            chartData.push(['Unknown', (100-totalPer)]);
        }
        isUnknown = chartData[chartData.length-1][0].toString().toLowerCase();
        if(isUnknown==='unknown' && chartData[chartData.length-1][1]==100 && is_used_create_chart===true && chartData[0][1]==0){
            console.log(chartData);
            is_used_create_chart = false;
            return false;
        }
	draw_chart(chartData);
        is_used_create_chart = true;
}

////////////////////////////////////////////////////////////////////////////////
/**
 * Get and Show asset classes
 */
jQuery(document).ready(function (){
    site_url = site_url();
    set_asset_class();
});

function set_asset_class()
{
    if(jQuery('select').hasClass('asset_class')===true)
    {
        option = '<option class="selected" value="">Select</option>';
        jQuery.ajax({
            url : site_url + '/member/portfolio/get-all-asset-class',
            type: 'GET',
            success: function (res){
                option += res.asset_class;
                jQuery('.asset_class').html(option);
            }
        });
    }
}
