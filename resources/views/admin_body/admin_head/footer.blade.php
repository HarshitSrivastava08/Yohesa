<footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2023-2024 <a href="#">Yohesa</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
        // Constants for validation
        const MAX_PHONE_DIGITS = 10;
        const EMAIL_REGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const PHONE_REGEX = /^(\+91)?[6789]\d{9}$/; // Indian phone number pattern
        const GST_REGEX = /^[0-9A-Z]{15}$/;

        function extractDigits(phone) {
            return phone.replace(/\D/g, '');
        }

        function isValidEmail(email) {
            return EMAIL_REGEX.test(email);
        }

        function isValidPhoneNumber(phone) {
            const digits = extractDigits(phone);
            return digits.length <= MAX_PHONE_DIGITS && PHONE_REGEX.test(phone);
        }

        function isValidGSTNumber(gst) {
            return GST_REGEX.test(gst);
        }

        function validateEmail() {
            const emailInput = document.getElementById('email').value;
            const emailMessageDiv = document.getElementById('email-message');
            
            if (isValidEmail(emailInput)) {
                emailMessageDiv.textContent = 'Valid email address';
                emailMessageDiv.className = 'message valid';
            } else {
                emailMessageDiv.textContent = 'Invalid email address';
                emailMessageDiv.className = 'message invalid';
            }
        }

        function validatePhoneNumber() {
            const phoneInput = document.getElementById('phone').value;
            const phoneMessageDiv = document.getElementById('phone-message');
            
            if (isValidPhoneNumber(phoneInput)) {
                phoneMessageDiv.textContent = 'Valid phone number';
                phoneMessageDiv.className = 'message valid';
            } else {
                phoneMessageDiv.textContent = `Invalid phone number. Must not exceed ${MAX_PHONE_DIGITS} digits.`;
                phoneMessageDiv.className = 'message invalid';
            }
        }

        function validateGSTNumber() {
            const gstInput = document.getElementById('gst').value;
            const gstMessageDiv = document.getElementById('gst-message');
            
            if (isValidGSTNumber(gstInput)) {
                gstMessageDiv.textContent = 'Valid GST number';
                gstMessageDiv.className = 'message valid';
            } else {
                gstMessageDiv.textContent = 'Invalid GST number. Must be 15 alphanumeric characters.';
                gstMessageDiv.className = 'message invalid';
            }
        }

        function handleInputChange() {
            validateEmail();
            validatePhoneNumber();
            validateGSTNumber();
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('email').addEventListener('input', handleInputChange);
            document.getElementById('phone').addEventListener('input', handleInputChange);
            document.getElementById('gst').addEventListener('input', handleInputChange);
        });
    </script>
    
    <script>
        // Sample data for Indian states, cities, and PIN codes
const data = {
    "Maharashtra": {
        "Mumbai": ["400001", "400002", "400003"],
        "Pune": ["411001", "411002", "411003"]
    },
    "Karnataka": {
        "Bangalore": ["560001", "560002", "560003"],
        "Mysore": ["570001", "570002", "570003"]
    },
    "Delhi": {
        "New Delhi": ["110001", "110002", "110003"],
        "Dwarka": ["110075", "110078", "110085"]
    },
    // Add more states, cities, and PIN codes as needed
};

// Populate states dropdown
const stateSelect = document.getElementById("state");
const citySelect = document.getElementById("city");
const pinSelect = document.getElementById("pin");

function populateStates() {
    for (let state in data) {
        let option = document.createElement("option");
        option.value = state;
        option.text = state;
        stateSelect.appendChild(option);
    }
}

// Update cities dropdown based on selected state
function updateCities() {
    citySelect.innerHTML = '<option value="">--Select City--</option>';
    pinSelect.innerHTML = '<option value="">--Select PIN--</option>';
    
    const selectedState = stateSelect.value;
    if (selectedState) {
        const cities = data[selectedState];
        for (let city in cities) {
            let option = document.createElement("option");
            option.value = city;
            option.text = city;
            citySelect.appendChild(option);
        }
    }
}

// Update PIN codes dropdown based on selected city
function updatePin() {
    pinSelect.innerHTML = '<option value="">--Select PIN--</option>';
    
    const selectedState = stateSelect.value;
    const selectedCity = citySelect.value;
    if (selectedCity) {
        const pins = data[selectedState][selectedCity];
        pins.forEach(pin => {
            let option = document.createElement("option");
            option.value = pin;
            option.text = pin;
            pinSelect.appendChild(option);
        });
    }
}

// Initialize the states dropdown
populateStates();

    </script>