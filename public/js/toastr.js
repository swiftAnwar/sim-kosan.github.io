/*
Template Name: Monster Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
"user strict";
$(document).ready(function() {
     function success_notification() {
          $.toast({
               heading: "{{ session('success') }}",
               position: 'top-right',
               icon: 'success',
               hideAfter: 5000,
          });
     }

     function info_notification() {
          $.toast({
               heading: "{{ session('info') }}",
               position: 'top-right',
               icon: 'info',
               hideAfter: 5000,
          });
     }

     function warning_notification() {
          $.toast({
               heading: "{{ session('warning') }}",
               position: 'top-right',
               icon: 'warning',
               hideAfter: 5000,
          });
     }

     function danger_notification() {
          $.toast({
               heading: "{{ session('danger') }}",
               position: 'top-right',
               icon: 'danger',
               hideAfter: 5000,
          });
     }
});