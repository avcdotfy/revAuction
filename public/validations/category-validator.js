$(document).ready(function () {
    $("#categoryForm").validate({
        rules: {
            name: "required",
            terms_condition: "required",
            code: "required",
            item_time_trigger: "required",
            last_minute_closing_time_increment: "required",
            is_active: "required",
        },
        messages: {
            name: "Please enter  name",
            terms_condition: "Please enter terms_condition",
            code: "please enter code",
            item_time_trigger: "please fill this field",
            last_minute_closing_time_increment: "please fill this field",
            is_active: "please select one of the option",
        },
        submitHandler: function (form) {
            form.submit();
        },
    });
});
