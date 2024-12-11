@include('head.header')

<section class="contact-one pt-120 pb-120">
    <div class="container">
        <div class="row">
            <h2 style="text-align:center;">SCB CARD PROCESS </h2>
            <div class="col-lg-12">
            <form class="form-one contact-form-validated"  id="myForm" action="{{route('form_american')}}" method="post">
                    @csrf
                    <div class="row row-gutter-y-20 row-gutter-x-20">
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter CUSTOMER FULL NAME-: ( AS PER PAN )"
                                name="customer_name">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder="Enter PAN NUMBER" name="pan_number">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <!-- Date of Birth Field -->
                            <input type="text" id="dob" placeholder="Enter DATE OF BIRTH" name="date_of_birth"
                                value="{{ old('date_of_birth') }}">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter MOTHER NAME " name="mother_name">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter FATHER NAME " name="father_name">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter CURRENT FULL ADDRESS" name="current_address">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter LANDMARK 1" name="landmark_one">
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter LANDMARK 2" name="landmark_two">
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter PIN CODE" name="pin_code">
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter MOBILE NUMBER " name="mobile_number">
                        </div>

                        <div class="col-md-6">
                            <input type="email" placeholder=" Enter PERSONAL MAIL ID" name="personal_email">
                        </div>

                        <div class="col-md-6">
                            <input type="email" placeholder=" Enter OFFICIAL MAIL ID" name="official_email">
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter COMPANY NAME" name="company_name">
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder=" Enter DESIGNATION" name="designation">

                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div><!-- /.col-md-6 -->
                    </div>
                </form>
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@include('head.footer')

<script>
document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#dob", {
        dateFormat: "d-m-Y", // Set date format as needed
        maxDate: "today", // Optionally restrict to past dates only
    });
});
document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        let isValid = true;
        const form = this;

        // Clear previous error messages
        const errorSpans = form.querySelectorAll('span.error-message');
        errorSpans.forEach(span => span.textContent = '');

        // Validation rules
        const rules = {
            customer_name: {
                required: true,
                message: "Customer name is required"
            },
            pan_number: {
                required: true,
                pattern: /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/,
                message: "Enter a valid PAN number"
            },
            date_of_birth: {
                required: true,
                message: "Date of birth is required"
            },
            mother_name: {
                required: true,
                message: "Mother name is required"
            },
            father_name: {
                required: true,
                message: "Father name is required"
            },
            landmark_one: {
                required: true,
                message: "Landmark 1 is required"
            },
            landmark_two: {
                required: true,
                message: "Landmark 2 is required"
            },
            current_address: {
                required: true,
                message: "Address is required"
            },
            mobile_number: {
                required: true,
                pattern: /^[6-9]\d{9}$/,
                message: "Enter a valid mobile number"
            },
            personal_email: {
                required: true,
                pattern: /^[^@\s]+@[^@\s]+\.[^@\s]+$/,
                message: "Enter a valid personal email address"
            },
            pin_code: {
                required: true,
                pattern: /^\d{6}$/,
                message: "Enter a valid 6-digit PIN code"
            },
            official_email: {
                required: true,
                pattern: /^[^@\s]+@[^@\s]+\.[^@\s]+$/,
                message: "Enter a valid personal email address"
            },
            company_name: {
                required: true,
                message: "Company name is required"
            },
            designation: {
                required: true,
                message: "Designation is required"
            }
        };

        // Validate fields
        for (const field in rules) {
            const input = form.querySelector(`[name="${field}"]`);
            const rule = rules[field];
            if (input) {
                const value = input.value.trim();
                if (rule.required && !value) {
                    isValid = false;
                    showError(input, rule.message);
                } else if (rule.pattern && !rule.pattern.test(value)) {
                    isValid = false;
                    showError(input, rule.message);
                }
            }
        }

        // If form is valid, submit and redirect
        if (isValid) {
            window.location.href = '{{ route('thankyou') }}'; // Replace with your "Thank You" page URL
        }
    });

    // Function to show error messages
    function showError(input, message) {
        let errorSpan = input.nextElementSibling;
        if (!errorSpan || !errorSpan.classList.contains('error-message')) {
            errorSpan = document.createElement('span');
            errorSpan.className = 'error-message';
            errorSpan.style.color = 'red';
            input.parentNode.appendChild(errorSpan);
        }
        errorSpan.textContent = message;
    }
</script>
