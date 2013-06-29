var site_url = site_url();

$(document).ready(function(){

    /**
     * Initialize tabs
     */
    $("#tabs").tabs();
    
    /**
     * Personal Info
     */
    $('#submit_personal_form').click(function() {
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var mobile_num = $('#mobile_num').val();
        var title = $('#title').val();
        var suffix = $('#suffix').val();
        var gender = $('#gender').val();
        var date_of_birth = $('#date_of_birth').val();

        if (validate_apha(first_name) === false) {
            error_msg = '<div class="error_message_side" >Please enter first name.</div>';
            if ($('#first_name').parent().next('div').hasClass('error_message_side')) {
                $('#first_name').parent().next('div').remove();
            }
            $('#first_name').parent().after(error_msg);
            return false;
        } else {
            if ($('#first_name').parent().next('div').hasClass('error_message_side')) {
                $('#first_name').parent().next('div').remove();
            }
        }

        if (validate_apha(last_name) === false) {
            error_msg = '<div class="error_message_side" >Please enter last name.</div>';
            if ($('#last_name').parent().next('div').hasClass('error_message_side')) {
                $('#last_name').parent().next('div').remove();
            }
            $('#last_name').parent().after(error_msg);
            return false;
        } else {
            if ($('#last_name').parent().next('div').hasClass('error_message_side')) {
                $('#last_name').parent().next('div').remove();
            }
        }

        if (mobile_num.length > 0 && (mobile_num.length !== 10 || validate_num(mobile_num) === false)) {
            error_msg = '<div class="error_message_side" >Please enter valid mobile number.</div>';
            if ($('#mobile_num').parent().next('div').hasClass('error_message_side')) {
                $('#mobile_num').parent().next('div').remove();
            }
            $('#mobile_num').parent().after(error_msg);
            return false;
        } else {
            if ($('#mobile_num').parent().next('div').hasClass('error_message_side')) {
                $('#mobile_num').parent().next('div').remove();
            }
        }

        //Send ajax request

        $.ajax({
            url: site_url + '/member/chage-personal-details',
            type: 'POST',
            data: {
                first_name: first_name,
                last_name: last_name,
                mobile_num: mobile_num,
                title: title,
                date_of_birth: date_of_birth,
                suffix: suffix,
                gender: gender,
                fromwhere: 'basic_info'
            },
            beforeSend: function() {
                show_loader();
            },
            success: function(res) {
                hide_loader();
                //show_ajax_response(res.message);
                status = (res.status === true) ? 'success' : 'fail';
                show_message(res.message, status);
            }
        });
    });

    /**
     * Address Info
     */
    $('#submit_address_form').click(function() {

        var address_line_1 = $('#address_line_1').val();
        var address_line_2 = $('#address_line_2').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var zip_code = $('#zip_code').val();

        if (city.length <= 0) {
            error_msg = '<div class="error_message_side" >Please enter city.</div>';
            if ($('#city').parent().next('div').hasClass('error_message_side')) {
                $('#city').parent().next('div').remove();
            }
            $('#city').parent().after(error_msg);
            return false;
        } else {
            if ($('#city').parent().next('div').hasClass('error_message_side')) {
                $('#city').parent().next('div').remove();
            }
        }

        if (state.length <= 0) {
            error_msg = '<div class="error_message_side" >Please enter state.</div>';
            if ($('#state').parent().next('div').hasClass('error_message_side')) {
                $('#state').parent().next('div').remove();
            }
            $('#state').parent().after(error_msg);
            return false;
        } else {
            if ($('#state').parent().next('div').hasClass('error_message_side')) {
                $('#state').parent().next('div').remove();
            }
        }

        if (zip_code.length <= 0) {
            error_msg = '<div class="error_message_side" >Please enter zip code.</div>';
            if ($('#zip_code').parent().next('div').hasClass('error_message_side')) {
                $('#zip_code').parent().next('div').remove();
            }
            $('#zip_code').parent().after(error_msg);
            return false;
        } else {
            if ($('#zip_code').parent().next('div').hasClass('error_message_side')) {
                $('#zip_code').parent().next('div').remove();
            }
        }
        //Send ajax request

        $.ajax({
            url: site_url + '/member/change-details',
            type: 'POST',
            data: {
                address_line_1: address_line_1,
                address_line_2: address_line_2,
                city: city,
                state: state,
                zip_code: zip_code,
                msg: 'Address details updated successfully.',
                fromwhere: 'alternate_info'
            },
            beforeSend: function() {
                show_loader();
            },
            success: function(res) {
                hide_loader();
                //show_ajax_response(res.message);
                status = (res.status === true) ? 'success' : 'fail';
                show_message(res.message, status);
            }
        });


    });

    /**
     * Alternate Info
     */
    $('#submit_contact_form').click(function() {

        var sec_email_id = $('#email').val();
        var sec_mobile_num = $('#sec_mobile_num').val();

        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (!emailReg.test(sec_email_id)) {
            email_error_msg = 'Enter a valid email address.';
            hasError = true;
        }

        if (hasError == true) {
            error_msg = '<div class="error_message_side" >' + email_error_msg + '</div>';
            if ($('#email').parent().next('div').hasClass('error_message_side')) {
                $('#email').parent().next('div').remove();
            }
            $('#email').parent().after(error_msg);
            return false;
        } else {
            if ($('#email').parent().next('div').hasClass('error_message_side')) {
                $('#email').parent().next('div').remove();
            }
        }

        if (sec_mobile_num.length > 0 && (sec_mobile_num.length !== 10 || validate_num(sec_mobile_num) === false)) {
            error_msg = '<div class="error_message_side" >Please enter valid mobile number.</div>';
            if ($('#sec_mobile_num').parent().next('div').hasClass('error_message_side')) {
                $('#sec_mobile_num').parent().next('div').remove();
            }
            $('#sec_mobile_num').parent().after(error_msg);
            return false;
        } else {
            if ($('#sec_mobile_num').parent().next('div').hasClass('error_message_side')) {
                $('#sec_mobile_num').parent().next('div').remove();
            }
        }
        
        if(sec_email_id.length>0 || sec_mobile_num.length>0)
        {
            $.ajax({
                url: site_url + '/member/change-details',
                type: 'POST',
                data: {
                    sec_email_id: sec_email_id,
                    sec_mobile_num: sec_mobile_num,
                    msg: 'Alternate Informations updated successfully.',
                    fromwhere: 'contact_info'
                },
                beforeSend: function() {
                    show_loader();
                },
                success: function(res) {
                    hide_loader();
                    //show_ajax_response(res.message);
                    status = (res.status === true) ? 'success' : 'fail';
                    show_message(res.message, status);
                }
            });
        }
        else{
            show_message('Nothing to update.', 'fail');
        }
    });

    /**
     * Change Password
     */
    $('#submit_password_form').click(function() {

        var old_pwd = $('#old_pwd').val();
        var new_pwd = $('#new_pwd').val();
        var re_pwd = $('#re_pwd').val();

        if (old_pwd.length <= 0) {
            error_msg = '<div class="error_message_side" >Please enter your current password.</div>';
            if ($('#old_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#old_pwd').parent().next('div').remove();
            }
            $('#old_pwd').parent().after(error_msg);
            return false;
        } else {
            if ($('#old_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#old_pwd').parent().next('div').remove();
            }
        }

        if (new_pwd.length <= 0) {
            error_msg = '<div class="error_message_side" >Please enter new password.</div>';
            if ($('#new_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#new_pwd').parent().next('div').remove();
            }
            $('#new_pwd').parent().after(error_msg);
            return false;
        } else if (new_pwd === old_pwd) {
            error_msg = '<div class="error_message_side" >New password should be differ than current password.</div>';
            if ($('#new_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#new_pwd').parent().next('div').remove();
            }
            $('#new_pwd').parent().after(error_msg);
            return false;
        } else {
            if ($('#new_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#new_pwd').parent().next('div').remove();
            }
        }

        if (re_pwd.length <= 0 || new_pwd !== re_pwd) {
            error_msg = '<div class="error_message_side" >Please confirm new password.</div>';
            if ($('#re_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#re_pwd').parent().next('div').remove();
            }
            $('#re_pwd').parent().after(error_msg);
            return false;
        } else {
            if ($('#re_pwd').parent().next('div').hasClass('error_message_side')) {
                $('#re_pwd').parent().next('div').remove();
            }
        }

        //Send ajax request
        $.ajax({
            url: site_url + '/member/chage-password',
            type: 'POST',
            data: {
                old_pwd: old_pwd,
                new_pwd: new_pwd,
                re_pwd: re_pwd
            },
            beforeSend: function() {
                show_loader();
            },
            success: function(res) {
				
                hide_loader();
                $('#old_pwd').val('');
                $('#new_pwd').val('');
                $('#re_pwd').val('');
                //show_ajax_response(res.message);
                status = (res.status === true) ? 'success' : 'fail';
                show_message(res.message, status);
            }
        });
    });

    /**
     * Secuirty Info
     */

    $('#submit_security_form').click(function() {

        var security_ques_1 = $('#security_ques_1').val();
        var security_ans_1 = $('#security_ans_1').val();
        var security_ques_2 = $('#security_ques_2').val();
        var security_ans_2 = $('#security_ans_2').val();

        if (security_ques_1.length <= 0) {
            error_msg = '<div class="error_message_side" >Security Question cannot be empty!</div>';
            if ($('#security_ques_1').parent().next('div').hasClass('error_message_side')) {
                $('#security_ques_1').parent().next('div').remove();
            }
            $('#security_ques_1').parent().after(error_msg);
            return false;
        } else {
            if ($('#security_ques_1').parent().next('div').hasClass('error_message_side')) {
                $('#security_ques_1').parent().next('div').remove();
            }
        }

        if (security_ans_1.length <= 0) {
            error_msg = '<div class="error_message_side" >Answer 1 cannot be empty!</div>';
            if ($('#security_ans_1').parent().next('div').hasClass('error_message_side')) {
                $('#security_ans_1').parent().next('div').remove();
            }
            $('#security_ans_1').parent().after(error_msg);
            return false;
        } else {
            if ($('#security_ans_1').parent().next('div').hasClass('error_message_side')) {
                $('#security_ans_1').parent().next('div').remove();
            }
        }

        if (security_ques_2.length <= 0) {
            error_msg = '<div class="error_message_side" >Security Question cannot be empty!</div>';
            if ($('#security_ques_2').parent().next('div').hasClass('error_message_side')) {
                $('#security_ques_2').parent().next('div').remove();
            }
            $('#security_ques_2').parent().after(error_msg);
            return false;
        } else {
            if ($('#security_ques_1').parent().next('div').hasClass('error_message_side')) {
                $('#security_ques_1').parent().next('div').remove();
            }
        }

        if (security_ans_2.length <= 0) {
            error_msg = '<div class="error_message_side" >Answer 2 cannot be empty!</div>';
            if ($('#security_ans_2').parent().next('div').hasClass('error_message_side')) {
                $('#security_ans_2').parent().next('div').remove();
            }
            $('#security_ans_2').parent().after(error_msg);
            return false;
        } else {
            if ($('#security_ans_2').parent().next('div').hasClass('error_message_side')) {
                $('#security_ans_2').parent().next('div').remove();
            }
        }


        $.ajax({
            url: site_url + '/member/change-details',
            type: 'POST',
            data: {
                security_ques_1: security_ques_1,
                security_ans_1: security_ans_1,
                security_ques_2: security_ques_2,
                security_ans_2: security_ans_2,
                msg: 'Security settings updated successfully.',
                fromwhere: 'security'
            },
            beforeSend: function() {
                show_loader();
            },
            success: function(res) {
                hide_loader();
                //show_ajax_response(res.message);
                status = (res.status === true) ? 'success' : 'fail';
                show_message(res.message, status);
            }
        });

    });

});

function validate_apha(text)
{
    var pattern = /^[a-zA-Z ]+$/;
    return pattern.test(text);
}

function validate_num(number)
{
    var pattern = /^[0-9]+$/;
    return pattern.test(number);
}

function show_message(message, type)
{
    selectedPanel = $("#tabs div.ui-tabs-panel[aria-hidden='false']").attr('id');
    htmlClass = 'errorMessageBox';
    if (type === 'success') {
        htmlClass = 'successMessageBox';
    }
    htmlContent = '<div class="'+htmlClass+'">' + message + '</div>';
    
    $('#' + selectedPanel).prepend(htmlContent);
    $('#' + selectedPanel+" > ."+htmlClass).show('slow').delay(3000).hide('slow', function() {
        $(this).remove();
    });
}


function matchQues(sq_id) {

    var security_ques_1 = $('#security_ques_1').val();
    var security_ques_2 = $('#security_ques_2').val();

    if (security_ques_1 === security_ques_2) {

        error_msg = '<div class="error_message_side" >Security Question cannot same!</div>';
        if ($('#' + sq_id).parent().next('div').hasClass('error_message_side')) {
            $('#' + sq_id).parent().next('div').remove();
        }
        $('#' + sq_id).parent().after(error_msg);
        return false;
    }
    else {

        if ($('#security_ques_1').parent().next('div').hasClass('error_message_side')) {
            $('#security_ques_1').parent().next('div').remove();
        }
        if ($('#security_ques_2').parent().next('div').hasClass('error_message_side')) {
            $('#security_ques_2').parent().next('div').remove();
        }
    }

}
