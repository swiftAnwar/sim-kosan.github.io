@if (session('success'))
    <script>
         setTimeout(function() {
              $(document).ready(function() {
                    $.toast({
                         text: "{{ session('success') }}",
                         heading: 'Success',
                         icon: 'success',
                         showHideTransition: 'fade',
                         allowToastClose: true,
                         hideAfter: 3000,
                         stack: false,
                         position: { left : 'auto', right : 20, top : 85, bottom : 'auto' },
                         textAlign: 'left', 
                         loader: true, 
                    });
               });
         }, 1500);
    </script>
@endif

@if (session('info'))
    <script>
         setTimeout(function() {
               $(document).ready(function() {
                    $.toast({
                         text: "{{ session('info') }}",
                         heading: 'Info',
                         icon: 'info',
                         showHideTransition: 'fade',
                         allowToastClose: true,
                         hideAfter: 3000,
                         stack: false,
                         position: { left : 'auto', right : 20, top : 85, bottom : 'auto' },
                         textAlign: 'left', 
                         loader: true, 
                    });
               });
         }, 1500);
    </script>
@endif

@if (session('warning'))
    <script>
         setTimeout(function() {
              $(document).ready(function() {
                    $.toast({
                         text: "{{ session('warning') }}",
                         heading: 'Warning',
                         icon: 'warning',
                         showHideTransition: 'fade',
                         allowToastClose: true,
                         hideAfter: 3000,
                         stack: false,
                         position: { left : 'auto', right : 20, top : 85, bottom : 'auto' },
                         textAlign: 'left', 
                         loader: true, 
                    });
               });
         }, 1500);
    </script>
@endif

@if (session('danger'))
    <script>
         setTimeout(function() {
              $(document).ready(function() {
                    $.toast({
                         text: "{{ session('danger') }}",
                         heading: 'Danger',
                         icon: 'danger',
                         showHideTransition: 'fade',
                         allowToastClose: true,
                         hideAfter: 3000,
                         stack: false,
                         position: { left : 'auto', right : 20, top : 85, bottom : 'auto' },
                         textAlign: 'left', 
                         loader: true, 
                    });
               });
         }, 1500);
    </script>
@endif