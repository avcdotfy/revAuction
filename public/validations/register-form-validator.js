$(document).ready(function () {
    $("#registerForm").validate({
        rules: {
            name: "required",
            company_type: "required",
            company_name: "required",
            contact_person: "required",
            gst_number: "required",
            pan_number: "required",
            establishment_year: "required",
            username: "required",
            password: "required",
            phone: "required",
            landline_number: "required",
            fax_number: "required",
            registered_address: "required",
            countrySelect: "required",
            stateSelect: "required",
            city: "required",
            pin_code: "required",
            category_id: "required",
            region_id: "required",
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            company_type: "please enter company type",
            company_name: "please enter company name",
            contact_person: "please enter contact person",
            gst_number: "please enter gst number",
            pan_number: "please enter pan number",
            establishment_year: "please enter establishment year",
            username: "please enter username",
            phone: "please enter phone",
            landline_number: "please enter landline number",
            fax_number: "please enter fax number",
            registered_address: "please enter registered address",
            countrySelect: "please enter country",
            stateSelect: "please enter state",
            city: "please enter city",
            pin_code: "please enter pin code",
            category_id: "please enter category",
            region_id: "please enter region",
            password: {
                required: "Please provide a password",
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
    });
});
