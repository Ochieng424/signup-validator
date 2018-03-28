/**
 * Created by Ochieng_Derrick on 12/6/20
 **/

$(document).ready(function () {
    $("#sign_up").validate({
        rules:{
            first_Name: "required",
            last_Name: "required",
            username:{
                required: true,
                minlength: 4
            },
            gender: "required",
            email:{
                required: true,
                email: true
            },
            reg_number: "required",
            dateOfBirth:{
                required: true,
                date: true
            },
            password:{
                required: true,
                minlength: 8
            },
            confirm_password:{
                required: true,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages:{
            first_Name: "Please enter your first name",
            last_Name: "Please enter your last name",
            username:{
                required: "Please provide a username",
                minlength: "Username must have atleast 4 characters"
            },
            gender: "Please enter your gender",
            email:{
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            reg_number: "Please enter your registration number",
            dateOfBirth:{
                required: "Please provide the date you were born",
                date: "Please provide a valid date of birth"
            },
            password:{
                required: "Please provide a password",
                minlength: "Password must be atleast 8 characters"
            },
            confirm_password:{
                required: "Please re-enter your password",
                minlength: "Password must be atleast 8 characters",
                equalTo: "Passwords does not match"
            }
        }
    });
});