<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <base href="../../../" />
        <title>{{ config('app.name') }} | @yield('title')</title>
        <meta charset="utf-8" />
        <meta
            name="description"
            content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free."
        />
        <meta
            name="keywords"
            content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets-dashboard/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="assets-dashboard/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets-dashboard/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets-dashboard/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-column flex-column-fluid">
                <!--begin::Header-->
            </div>
        </div>
    </body>
</html>
