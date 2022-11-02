@extends('layouts.dashboard')
@section('title', 'Deactivate Profile')

<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush py-5">
						<div class="card-body py-15 py-lg-20">
							<!--begin::Logo-->
							<h1 class="fw-bold fs-2qx text-gray-800 mb-7">Your account is deactivated</h1>
							<!--end::Logo-->
							<!--begin::Message-->
							
							<!--end::Message-->
							<!--begin::Action-->
							<div class="text-center">
								<a href="{{route('login')}}" class="btn btn-lg btn-primary fw-bold">Go to homepage</a>
							</div>
							<!--end::Action-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		




		
