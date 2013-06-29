function defblank(obj, vlu)
{
    if (document.getElementById(obj).value == vlu)
    {
        document.getElementById(obj).value = "";
    }
}

$(document).ready(function() {
    $(".radio").dgStyle();
    $(".checkbox").dgStyle();

    if (!$.browser.opera) {
        // select element styling
        $('select.select').each(function() {
            var title = $(this).attr('title');
            if ($('option:selected', this).val() != '')
                title = $('option:selected', this).text();
                $(this)
                    .css({'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none'})
                    .after('<span class="iselect">' + title + '</span>')
                    .change(function() {
                val = $('option:selected', this).text();
                $(this).next().text(val);
            })
        });

        $('select.select_1').each(function() {
            var title = $(this).attr('title');
            if ($('option:selected', this).val() != '')
                title = $('option:selected', this).text();
            $(this)
                    .css({'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none'})
                    .after('<span class="iselect2">' + title + '</span>')
                    .change(function() {
                val = $('option:selected', this).text();
                $(this).next().text(val);
            })
        });
    }
    ;

    $('#button').click(function(e) { // Button which will activate our modal
        $('#modal').reveal({// The item which will be opened with reveal
            animation: 'fade', // fade, fadeAndPop, none
            animationspeed: 600, // how fast animtions are
            closeonbackgroundclick: true, // if you click background will modal close?
            dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
        });
        return false;
    });
    
    $('#term_agree_btn').mousedown(function(){
        if(!$('#term').attr("checked")){
            $('#check_term').trigger('mousedown');
        }
        /*
        $('#term').attr('checked', 'checked');
        $('#term').parent('div').dgStyle();
        */
    }).mouseup(function(){
        if(!$('#term').attr("checked")){
            $('#check_term').trigger('mouseup');
        }
    });
});

function mousedown_tds_button_gery(obj) {
    obj.style.backgroundPosition = '0px -76px';
    obj.firstChild.style.backgroundPosition = 'right -76px';
}
function mouseup_tds_button_gery(obj) {
    obj.style.backgroundPosition = '0px 0px';
    obj.firstChild.style.backgroundPosition = 'right 0px';
}
function mousedown_tds_button_greenb(obj) {
    obj.style.backgroundPosition = '0px -105px';
    obj.firstChild.style.backgroundPosition = 'right -105px';
}
function mouseup_tds_button_greenb(obj) {
    obj.style.backgroundPosition = '0px 0px';
    obj.firstChild.style.backgroundPosition = 'right 0px';
}
function mousedown_tds_button_blub(obj) {
    obj.style.backgroundPosition = '0px -105px';
    obj.firstChild.style.backgroundPosition = 'right -105px';
}
function mouseup_tds_button_blub(obj) {
    obj.style.backgroundPosition = '0px 0px';
    obj.firstChild.style.backgroundPosition = 'right 0px';
}

/** Date picker */
var current_year = new Date().getFullYear();
$(document).ready(function() {
    $('.dob').datepicker({
        maxDate: '+0m +0w',
        changeYear: true,
        changeMonth: true,
        dateFormat: "mm-dd-yy",
        yearRange: '1950:' + current_year
    });
    $('#dobPic').click(function() {
        $('#date_of_birth').datepicker('show');
    });

    $('.datepicker').datepicker({
        //dateFormat: "mm-dd-yy",
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
    $('#startPic').click(function() {
        $('#start_date').datepicker('show');
    });
    $('#endPic').click(function() {
        $('#end_date').datepicker('show');
    });
});

/** Live email check */
$(document).ready(function() {
    $('#customRegForm #email').change(function() {
        //Remove extra message
        $('#loaderEmail').hide();
        if($('#loaderEmail > b').length>0){
            $('#loaderEmail > b').remove();
        }
        if($('#loaderEmail').next('div').hasClass('sucess_message_side')){
           $('#loaderEmail').next('div').remove(); 
        }
        if($('#loaderEmail').next('div').hasClass('error_message_side')){
           $('#loaderEmail').next('div').remove(); 
        }
        
        if ($(this).val().match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/))
        {$.ajax({
                url: site_url() + '/member/register/unique-email',
                type: 'GET',
                data: {email: $(this).val()},
                beforeSend: function() {
                    original = $('#loaderEmail span').html();
                    if (original.length == 0) {
                        $('#loaderEmail span').html($('#loaderEmail img').attr('src'));
                    } else {
                        $('#loaderEmail img').attr('src', original);
                    }
                    $('#loaderEmail').show();
                },
                success: function(res) {
                    if (res.status) {
                        $('#loaderEmail img').attr('src', res.url);
                        $('#loaderEmail').after('<div class="sucess_message_side">Available.</div>');
                        
                    } else if (res.status == false) {
                        $('#loaderEmail img').attr('src', res.url);
                        $('#loaderEmail').after('<div class="error_message_side">Already registered.</div>');
                    }
                },
                error: function() {
                    $('#loaderEmail img').hide();
                    $('#loaderEmail b').remove();
                    $('#loaderEmail').append('<b style="color:#FF0000;">Error</b>');
                }
            });
        } else {
            $('#loaderEmail').after('<div class="error_message_side">Please enter a valid email address.</div>');
        }
    });

});

/* function will return the site url*/
function site_url()
{
    var pathName = "";
    var protocol = window.location.protocol;
    var host = window.location.host;
    var pathArray = window.location.pathname.split('/');
    if (pathArray[1].length !== 0) {
        pathName = '/' + pathArray[1];
        if (pathArray[2] !== 'index.php') {
            pathName = pathName + '/' + pathArray[2];
        }
    }
    var url = protocol + '//' + host + pathName + '/index.php';
    return url;
}

/* This function are used to show ajax loader and response */
function show_loader()
{
    $('#ajaxOverlayModal').dialog({
        height: 200,
        modal: true,
        title: false,
        closeOnEscape: false,
        resizable: false,
        width: 200
    });
    $(".ui-dialog-titlebar").hide();
}
function hide_loader()
{
    $('#ajaxOverlayModal').dialog('close');
    $(".ui-dialog-titlebar").show();
}

function show_ajax_response(message)
{
    $(".ui-dialog-titlebar").show();
    $('#ajaxResponseDialog').html(message);
    $('#ajaxResponseDialog').dialog({
        modal: true,
        resizable: false,
    });
}
