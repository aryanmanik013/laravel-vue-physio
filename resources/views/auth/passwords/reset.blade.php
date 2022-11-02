@extends('layouts.app')
@section('title', 'Reset Password')

@section('content')

<!--begin::Page bg image-->
<style>body { background-image: url('assets/media/auth/bg10.jpeg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg10-dark.jpeg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - New password -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<!--begin::Image-->
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency.png" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency-dark.png" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
						<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<!--begin::Wrapper-->
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<!--begin::Content-->
						<div class="w-md-400px">
						<div class=" mb-10">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
									<a href="{{route('login')}}" class="link-primary fw-bold">Sign in</a></div>
									<!--end::Link-->
								</div>
							<p></p>
						<form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                       
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
								<p></p>
                                <input id="password" placeholder='Password' type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<p></p>
                            
                          
                                <input id="password-confirm" placeholder='Password Confirm' type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
	<p></p>
                        <div class="row mb-0">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                            <!--begin::Link-->
							<p></p>
									<div class="text-gray-500 fw-semibold fs-6">If you not received email sent again ?
									<a href="{{ route('password.request') }}" class="link-primary fw-bold">Send Email</a></div>
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - New password-->


@endsection
