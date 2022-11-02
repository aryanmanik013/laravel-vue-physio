@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>Laravel Vue Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700|Material+Icons" rel="stylesheet">
</head>
<body style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
   <div id="app" class="d-flex flex-column flex-root">
   </div>
   @vite('resources/js/app.js')

   <router-view></router-view>


   {{-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}
</body>
<script>var hostUrl = "assets-dashboard/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets-dashboard/plugins/global/plugins.bundle.js"></script>
<script src="assets-dashboard/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets-dashboard/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets-dashboard/js/custom/apps/user-management/users/view/view.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/update-details.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/add-schedule.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/add-task.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/update-email.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/update-password.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/update-role.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/add-auth-app.js"></script>
<script src="assets-dashboard/js/custom/apps/user-management/users/view/add-one-time-password.js"></script>
<script src="assets-dashboard/js/widgets.bundle.js"></script>
<script src="assets-dashboard/js/custom/widgets.js"></script>
<script src="assets-dashboard/js/custom/apps/chat/chat.js"></script>
<script src="assets-dashboard/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets-dashboard/js/custom/utilities/modals/create-app.js"></script>
<script src="assets-dashboard/js/custom/utilities/modals/users-search.js"></script>
</html>
<style>
    body{
        /* background-image: url('http://127.0.0.1:8000/assets-dashboard/media/misc/page-bg.jpg') */
    }
</style>
