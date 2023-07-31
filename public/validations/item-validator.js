$(document).ready(function () {
    $("#categoryForm").validate({
        rules: {
            category_id: "required",
            code: "required",
            unit_of_measure_id: "required",
            description: "required",
            region: "required",
            price: "required",
            unit: "required",
            unit_details: "required",
            decrement_price: "required",
            is_manually_change_bidding_price: "required",
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
