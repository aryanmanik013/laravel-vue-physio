@extends('layouts.app')
@section('title', 'Verify your email')
@section('content')
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg5.jpg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg5-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<!--begin::Logo-->
							<div class="mb-14">
								<a href="../../demo1/dist/index.html" class="">
									<img alt="Logo" src="assets/media/logos/custom-2.svg" class="h-40px" />
								</a>
							</div>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder text-gray-900 mb-5">Verify your email</h1>
							<!--end::Title-->
							<!--begin::Action-->
							<div class="fs-6 mb-8">
                            @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
								<span class="fw-semibold text-gray-500">   {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},</span>
								<a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary fw-bold"></a>
							</div>
							<!--end::Action-->
							<!--begin::Link-->
							<div class="mb-11">
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">{{ __('click here to request another') }}</button>.
                    </form>
								
							</div>
							<!--end::Link-->
							<!--begin::Illustration-->
							<div class="mb-0">
								<img src="assets/media/auth/please-verify-your-email.png" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="assets/media/auth/please-verify-your-email-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
							<!--end::Illustration-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
@endsection
