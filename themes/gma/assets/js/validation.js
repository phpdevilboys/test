function mouseup_tds_button_greenb(acc_val) {
    if (acc_val == 1) {
        $('#term').attr('checked', true);
        $('#check_term').css('background-position', 'center -50px');
    } else {
        $('#term').attr('checked', false);
        $('#check_term').css('background-position', 'center 0px');
    }
}


$(document).ready(function() {

    $("#show_message").show('slow').delay(3000).hide('slow');
    $("#show_message_error").show('slow').delay(7000).hide('slow');

    $("#submit_enquiry").click(function() {

        //global vars
        var form = $("#customForm");

        var email = $("#email");
        var emailInfo = $("#emailInfo");
        var subject = $("#subject");
        var subjectInfo = $("#subjectInfo");
        var message = $("#message");
        var messageInfo = $("#messageInfo");


        //On blur
        subject.blur(validateSubject);
        email.blur(validateEmail);
        message.blur(validateMessage);

        //On key press
        subject.keyup(validateSubject);
        email.keyup(validateEmail);
        message.keyup(validateMessage);

        //On Submitting
        form.submit(function() {
            if (validateEmail() && validateSubject() && validateMessage()) {
                return true
            }
            else {
                return false;
            }

        });



    });

    //function to validate the update profile form
    $("#submit_profile_form").click(function() {
        var form = $("#profile_form");
        var first_name = $("#first_name");
        var last_name = $("#last_name");
        var city = $("#city");
        var state = $("#state");
        var zcode = $("#zip_code");
        var ans_1 = $("#security_ans_1");
        var ans_2 = $("#security_ans_2");
        var que1 = $("#security_ques_1");
        var que2 = $("#security_ques_2");
        //on blur

        first_name.blur(validateName);
        last_name.blur(validateLname);
        city.blur(validatecity);
        state.blur(validatestate);
        zcode.blur(validatezcode);
        ans_1.blur(validateAns_1);
        ans_2.blur(validateAns_2);
        que1.blur(valid_drp_dwn1);
        que2.blur(valid_drp_dwn2);


        form.submit(function() {
            // validation begin before submit
            if (validateName() && validateLname() && validatecity() && validatestate() && validatezcode() && valid_drp_dwn1() && validateAns_1() && valid_drp_dwn2() && validateAns_2()) {
                return true;
            } else {
                return false;
            }
        });

    });

    function validateLname()
    {
        var last_name = $("#last_name");
        var lastnameinfo = $("#lastnameinfo");
        if (last_name.val() == "") {
            last_name.addClass("error"); // adding css error class to the control
            lastnameinfo.text("Last Name cannot be empty!");//filling up error message
            lastnameinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            last_name.removeClass("error");
            lastnameinfo.text(" ");
            lastnameinfo.removeClass("error_message");
            return true;
        }
    }

    function validateName()
    {
        var first_name = $("#first_name");
        var firstnameinfo = $("#firstnameinfo");
        if (first_name.val() == "") {
            first_name.addClass("error"); // adding css error class to the control
            firstnameinfo.text("FirstNames cannot be empty!");//filling up error message
            firstnameinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            first_name.removeClass("error");
            firstnameinfo.text(" ");
            firstnameinfo.removeClass("error_message");
            return true;
        }
    }

    function validateMobile()
    {
        var mobile_num = $("#mobile_num");
        var mobileinfo = $("#mobileinfo");
        if (mobile_num.val() == "") {
            mobile_num.addClass("error"); // adding css error class to the control
            mobileinfo.text("Mobile Number cannot be empty!");//filling up error message
            mobileinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            mobile_num.removeClass("error");
            mobileinfo.text(" ");
            mobileinfo.removeClass("error_message");
            return true;
        }

    }

    function validatesecEmail()
    {
        var sec_email_id = $("#email");
        var semailinfo = $("#semailinfo");
        if (sec_email_id.val() == "") {
            sec_email_id.addClass("error"); // adding css error class to the control
            semailinfo.text("Secondary email cannot be empty!");//filling up error message
            semailinfo.addClass("error");//add error class to info span
            return false;
        } else {
            sec_email_id.removeClass("error");
            semailinfo.text(" ");
            semailinfo.removeClass("error");
            return true;
        }

    }


    function validatecity()
    {
        var city = $("#city");
        var addressinfo = $("#cityinfo");
        if (city.val() == "") {
            city.addClass("error"); // adding css error class to the control
            addressinfo.text("City cannot be empty!");//filling up error message
            addressinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            city.removeClass("error");
            addressinfo.text(" ");
            addressinfo.removeClass("error_message");
            return true;
        }
    }

    function validatestate()
    {
        var state = $("#state");
        var addressinfo = $("#stateinfo");
        if (state.val() == "") {
            state.addClass("error"); // adding css error class to the control
            addressinfo.text("State cannot be empty!");//filling up error message
            addressinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            state.removeClass("error");
            addressinfo.text(" ");
            addressinfo.removeClass("error_message");
            return true;
        }
    }

    function validatezcode()
    {
        var zcode = $("#zip_code");
        var addressinfo = $("#zipinfo");
        if (zcode.val() == "") {
            zcode.addClass("error"); // adding css error class to the control
            addressinfo.text("Zip Code cannot be empty!");//filling up error message
            addressinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            zcode.removeClass("error");
            addressinfo.text(" ");
            addressinfo.removeClass("error_message");
            return true;
        }
    }

    function validateAns_1()
    {
        var ans_1 = $("#security_ans_1");
        var addressinfo = $("#ans1info");
        if (ans_1.val() == "") {
            ans_1.addClass("error"); // adding css error class to the control
            addressinfo.text("Answer 1 cannot be empty!");//filling up error message
            addressinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            ans_1.removeClass("error");
            addressinfo.text(" ");
            addressinfo.removeClass("error_message");
            return true;
        }
    }

    function validateAns_2()
    {
        var ans_2 = $("#security_ans_2");
        var addressinfo = $("#ans2info");
        if (ans_2.val() == "") {
            ans_2.addClass("error"); // adding css error class to the control
            addressinfo.text("Answer 1 cannot be empty!");//filling up error message
            addressinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            ans_2.removeClass("error");
            addressinfo.text(" ");
            addressinfo.removeClass("error_message");
            return true;
        }
    }

    $("#submit_reg_form").click(function() {
        //global vars
        var form = $("#customRegForm");
        var email = $("#email");
        var emailInfo = $("#emailInfo");
        var password = $("#password");
        var passwordInfo = $("#passwordInfo");
        var con_password = $("#con_password");
        var con_passwordInfo = $("#con_passwordInfo");
        var captcha = $("#captcha");
        var captchaInfo = $("#captchaInfo");
        var term = $("#term");
        var termInfo = $("#termInfo");

        //On blur
        email.blur(validateEmail);
        password.blur(validatePass1);
        con_password.blur(validatePass2);
        captcha.blur(validatecaptcha);


        //On key press
        email.keyup(validateEmail);
        password.keyup(validatePass1);
        con_password.keyup(validatePass2);
        captcha.keyup(validatecaptcha);

        //On Submitting
        form.submit(function() {
            if (validateEmail() && validatePass1() && validatePass2() && validatecaptcha() && validateCheckBox()) {
                return true
            }
            else {
                return false;
            }
        });
    });

    $("#submit_login").click(function() {
        //global vars
        var form = $("#customLoginForm");
        var email = $("#email");
        var password = $("#password");
        //On blur
        email.blur(validateLoginEmail);
        password.blur(validateLoginPass);
        //On key press
        email.keyup(validateLoginEmail);
        password.keyup(validateLoginPass);
        //On Submitting
        form.submit(function() {
            if (validateLoginEmail() && validateLoginPass()) {
                return true;
            }
            else {
                return false;
            }
        });
    });

    //validation functions

    // validate Captcha
    function validatecaptcha() {
        var cap = $("#captcha").val();
        var cap_hd = $("#hd_cap").val();
        if (cap != cap_hd) {
            $("#captcha").addClass("error");
            $("#captchaInfo").text("Enter a valid security code\n");
            $("#captchaInfo").addClass("error_message_side");

            return false;
        } else {
            $("#captcha").removeClass("error");
            $("#captchaInfo").text("");
            $("#captchaInfo").removeClass("error_message_side");
            return true;
        }

    }

    function validateLoginEmail() {
        //testing regular expression
        var a = $("#email").val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //if it's valid email
        if (filter.test(a)) {
            $("#email").removeClass("error");
            $("#emailInfo").text("");
            $("#emailInfo").removeClass("error_message_side");
            $(".spaceClass_email").hide();
            return true;
        }
        //if it's NOT valid
        else {
            $("#email").addClass("error");
            $("#emailInfo").text("Please enter valid email!");
            $("#emailInfo").addClass("error_message_side");

            $("#email").focus();
            return false;
        }
    }
    
    //Register page
    function validateEmail() {
        //testing regular expression
        var a = $("#email").val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //if it's valid email
        if (filter.test(a)) {
            $("#email").removeClass("error");
            $("#emailInfo").text("");
            $("#emailInfo").removeClass("error_message_side");
            return true;
        }
        //if it's NOT valid
        else {
            $("#email").addClass("error");
            $("#emailInfo").text("Enter a valid email address please\n");
            $("#emailInfo").addClass("error_message_side");
            return false;
        }
    }
    function validateSubject() {
        //if it's NOT valid
        if ($("#subject").val() == 'Subject') {
            $("#subject").addClass("error");
            $("#subjectInfo").text("Please Enter Subject");
            $("#subjectInfo").addClass("error_message");
            $(".spaceClass_sub").show();
            $("#subject").focus();
            return false;
        } else if ($("#subject").val().length < 4) {
            $("#subject").addClass("error");
            $("#subjectInfo").text("Please Enter Subject with more than 3 letters!");
            $("#subjectInfo").addClass("error_message");
            $(".spaceClass_sub").show();
            return false;
        }
        //if it's valid
        else {
            $("#subject").removeClass("error");
            $("#subjectInfo").text("");
            $("#subjectInfo").removeClass("error_message");
            $(".spaceClass_sub").hide();
            return true;
        }
    }

    function validateMessage() {
        //it's NOT valid
        if ($("#message").val().length < 10) {
            $("#message").addClass("error");
            $("#messageInfo").text("We want Comment with more than 10 letters!");
            $("#messageInfo").addClass("error_message");
            $(".spaceClass_comm").show();
            return false;
        }
        //it's valid
        else {
            $("#message").removeClass("error");
            $("#messageInfo").text("");
            $("#messageInfo").removeClass("error_message");
            $(".spaceClass_comm").hide();
            return true;
        }
    }

    function validateLoginPass() {
        var pass1 = $("#password");
        var pass1Info = $("#passwordInfo");

        //it's NOT valid
        if (pass1.val() == "") {
            pass1.addClass("error");
            pass1Info.text("Please Enter Password!");
            pass1Info.addClass("error_message_side");
            $(".spaceClass_cpass").show();
            pass1.focus();
            return false;
        }
        //it's valid
        else {
            pass1.removeClass("error");
            pass1Info.text("");
            pass1Info.removeClass("error_message_side");
            $(".spaceClass_pass").hide();
            //validatePass2();
            return true;
        }


    }


    function validatePass1() {
        var pass1 = $("#password");
        var pass1Info = $("#passwordInfo");

        //it's NOT valid
        if (pass1.val().length < 5) {
            pass1.addClass("error");
            pass1Info.text("Password must be at least 5 characters long !");
            pass1Info.addClass("error_message_side");
            return false;
        }
        //it's valid
        else {
            pass1.removeClass("error");
            pass1Info.text("");
            pass1Info.removeClass("error_message_side");
            //validatePass2();
            return true;
        }
    }
    function validatePass2() {
        var pass1 = $("#password");
        var pass2 = $("#con_password");
        var pass2Info = $("#con_passwordInfo");
        //are NOT valid
        if (pass1.val() != pass2.val()) {
            pass2.addClass("error");
            pass2Info.text("Passwords doesn't match!");
            pass2Info.addClass("error_message_side");
            pass2.focus();
            return false;
        }
        //are valid
        else {
            pass2.removeClass("error");
            pass2Info.text("");
            pass2Info.removeClass("error_message_side");
            return true;
        }
    }
    function validateCheckBox() {
        var check = $("#term");
        var checkInfo = $("#termInfo");
        if (check.is(':checked'))
        {
            check.removeClass("error");
            checkInfo.text("");
            checkInfo.removeClass("error_message_side");
            return true;
        } else {
            check.addClass("error");
            checkInfo.text("Please read & agree to Terms & Condition!");
            checkInfo.addClass("error_message_side");
            return false;
        }
    }

    function valid_drp_dwn1()
    {
        var que1 = $("#security_ques_1");
        var queinfo = $("#queinfo");
        if (que1.val() == "")
        {
            que1.addClass("error"); // adding css error class to the control
            queinfo.text("Security Question cannot be empty!");//filling up error message
            queinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            que1.removeClass("error");
            queinfo.text(" ");
            queinfo.removeClass("error_message");
            return true;
        }
    }

    function valid_drp_dwn2()
    {
        var que2 = $("#security_ques_2");
        var queinfo = $("#queinfo2");

        if (que2.val() == "")
        {
            que2.addClass("error"); // adding css error class to the control
            queinfo.text("Security Question cannot be empty!");//filling up error message
            queinfo.addClass("error_message");//add error class to info span
            return false;
        } else {
            que2.removeClass("error");
            queinfo.text(" ");
            queinfo.removeClass("error_message");
            return true;
        }
    }

    // function to validate the create portfolio form	


    $("#submit_portfolio").click(function() {
        var form = $("#create_portfloio_form");
        var portfolio_name = $("#portfolio_name");
        var financial_advisor_name = $("#financial_advisor_name");
        var firm_name = $("#firm_name");
        var advisor_emailid = $("#financial_advisor_emailid");
        var provider_401K = $("#provider_401K");
        //on blur
        portfolio_name.blur(validatePortfolioName);
        financial_advisor_name.blur(advisorName);
        firm_name.blur(firmNameValidate);
        advisor_emailid.blur(validAdvisorEmail);
        provider_401K.blur(validateProvider);

        form.submit(function() {

            if ($('input[name="portfolio_type"]:checked').val() == 2) {
                return (validateProvider() && validatePortfolioName());
            } else if (validatePortfolioName() && advisorName() && firmNameValidate() && validAdvisorEmail()) {
                return true;
            } else {
                return false;
            }
        });

    });


    function validatePortfolioName()
    {
        var info = $("#accountInfo");
        var portfolio_name = $("#portfolio_name");
        if (portfolio_name.val() == "") {
            portfolio_name.addClass("error"); // adding css error class to the control
            info.text("Account Name cannot be empty!");//filling up error message
            info.addClass("error_message");//add error class to info span

            return false;
        } else {
            portfolio_name.removeClass("error");
            info.text(" ");
            info.removeClass("error_message");
            return true;
        }


    }

    function advisorName()
    {
        var info = $("#advisorInfo");
        var financial_advisor_name = $("#financial_advisor_name");
        if (financial_advisor_name.val() == "") {
            financial_advisor_name.addClass("error"); // adding css error class to the control
            info.text("Financial Advisor Name cannot be empty!");//filling up error message
            info.addClass("error_message");//add error class to info span
            return false;
        } else {
            financial_advisor_name.removeClass("error");
            info.text(" ");
            info.removeClass("error_message");
            return true;
        }

    }

    function firmNameValidate()
    {
        var info = $("#firmInfo");
        var firm_name = $("#firm_name");
        if (firm_name.val() == "") {
            firm_name.addClass("error"); // adding css error class to the control
            info.text("Firm Name cannot be empty!");//filling up error message
            info.addClass("error");//add error class to info span
            return false;
        } else {
            firm_name.removeClass("error");
            info.text(" ");
            info.removeClass("error_message");
            return true;
        }
    }

    function validAdvisorEmail()
    {
        var info = $("#validEmail");
        var advisor_emailid = $("#financial_advisor_emailid");
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //if it's valid email
        if (filter.test(advisor_emailid.val())) {
            advisor_emailid.removeClass("error");
            info.text(" ");
            info.removeClass("error_message");

            return true;
        }
        //if it's NOT valid
        else {
            advisor_emailid.addClass("error"); // adding css error class to the control
            info.text("please Enter valid Email Id!");//filling up error message
            info.addClass("error_message");//add error class to info span
            return false;
        }
    }

    function advisoremailidValid()
    {
        var info = $("#emailInfo");
        var advisor_emailid = $("#financial_advisor_emailid");
        if (advisor_emailid.val() == "") {
            advisor_emailid.addClass("error"); // adding css error class to the control
            info.text("Email Id cannot be empty!");//filling up error message
            info.addClass("error");//add error class to info span
            return false;
        } else {
            advisor_emailid.removeClass("error");
            info.text(" ");
            info.removeClass("error");
            return true;
        }

    }

    function validateProvider()
    {
        var provider_401K = $("#provider_401K");
        var providerInfo = $("#providerInfo");
        if (provider_401K.val() == "")
        {
            provider_401K.addClass("error"); // adding css error class to the control
            providerInfo.text("Provider list cannot be empty!");//filling up error message
            providerInfo.addClass("error_message");//add error class to info span
            return false;
        } else {

            provider_401K.removeClass("error");
            providerInfo.text(" ");
            providerInfo.removeClass("error_message");
        }
    }

    $("#INID1").click(function() {
        var financial_advisor_name = $("#financial_advisor_name");
        var info = $("#advisorInfo");
        var firm_name = $("#firm_name");
        var info1 = $("#firmInfo");
        var advisor_emailid = $("#financial_advisor_emailid");
        var info2 = $("#validEmail");
        info.text(" ");
        financial_advisor_name.removeClass("error");
        info1.text(" ");
        firm_name.removeClass("error");
        info2.text(" ");
        advisor_emailid.removeClass("error");
    });

    $("#INID2").click(function() {

        var provider_401K = $("#provider_401K");
        var providerInfo = $("#providerInfo");
        provider_401K.removeClass("error");
        providerInfo.text(" ");

    });



});