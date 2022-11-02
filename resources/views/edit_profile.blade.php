@section('title', 'Admin Dashboard')
@include('layouts.dashboard')


@include('layouts.top_nav')

				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
					<!--begin::Toolbar-->
					<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
							<!--begin::Title-->
							<h1 class="d-flex text-dark fw-bold m-0 fs-3">Account Settings</h1>
							<!--end::Title-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-600">
									<a href="../../demo19/dist/index.html" class="text-gray-600 text-hover-primary">Home</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-600">Account</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-500">Settings</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->
						<!--begin::Actions-->
						<div class="d-flex align-items-center py-1">
							<!--begin::Daterange-->
							<a href="#" class="btn btn-sm btn-flex btn-light px-5 me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
								<span class="me-2">
									<span class="text-gray-600 fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
									<span class="text-info fw-bold" id="kt_dashboard_daterangepicker_date">Oct 6</span>
								</span>
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-4 m-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<!--end::Daterange-->
							<!--begin::Filter-->
							<div class="me-2">
								<!--begin::Menu-->
								<a href="#" class="btn btn-sm btn-flex btn-light" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
								<span class="svg-icon svg-icon-5 svg-icon-gray-400 me-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Filter</a>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_633e7b3250275">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bold">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_633e7b3250275" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Filter-->
							<!--begin::Button-->
							<a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
							<!--end::Button-->
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Navbar-->
							
							<!--end::Navbar-->
							<!--begin::Basic info-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Profile Details</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
									<form method="post" id="kt_account_profile_details_form" class="form" action="{{route('updateProfile',['id' => auth()->user()->id ])}}" enctype='multipart/form-data'>
										@csrf
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
														<!--begin::Preview existing avatar-->
														@if(auth()->user()->image!='null')
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url(images/{{auth()->user()->image}})"></div>
													@else
													<div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets-dashboard/media/avatars/blank.png')"></div>
												
													@endif
														
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input type="file" name="image" />
														
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
															<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{auth()->user()->name}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Gender</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="Male" name="gender"  @if(Auth::user()->gender=='Male')
													checked
                                            @endif   />
													<label class="form-check-label" for="flexCheckboxLg">
													Male
													</label>&nbsp;&nbsp;

													<input class="form-check-input" type="radio" value="Female" name="gender"  @if(Auth::user()->gender=='Female')
													checked
                                            @endif />
													<label class="form-check-label" for="flexCheckboxLg">
													Female
													</label>
													&nbsp;&nbsp;
													<input class="form-check-input" type="radio" value="Others" name="gender"  @if(Auth::user()->gender=='Others')
													checked
                                            @endif />
													<label class="form-check-label" for="flexCheckboxLg">
													Others
													</label>
													</div>
												</div>
												<!--end::Col-->
											</div>
										
										
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="text" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Enter Phone No" value="{{auth()->user()->phone}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Street</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="text" name="street" class="form-control form-control-lg form-control-solid" placeholder="Enter Street" value="{{auth()->user()->street}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Street No</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="text" name="street_no" class="form-control form-control-lg form-control-solid" placeholder="Enter Street No" value="{{auth()->user()->street_no}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Postalcode</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="text" name="postal_code" class="form-control form-control-lg form-control-solid" placeholder="Enter Postalcode" value="{{auth()->user()->postal_code}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">City</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="text" name="city" class="form-control form-control-lg form-control-solid" placeholder="Enter City" value="{{auth()->user()->city}}" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>

											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Country</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
													@if(Auth::user()->country=='null')
													<option value="">Select a Country...</option>
                                            @else	
													
														<option value="{{auth()->user()->country}}">{{auth()->user()->country}}</option>
														@endif
													
														<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
														<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
														<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
														<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
														<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
														<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
														<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
														<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
														<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
														<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
														<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
														<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
														<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
														<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
														<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
														<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
														<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
														<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
														<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
														<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
														<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
														<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
														<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
														<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
														<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
														<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
														<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
														<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
														<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
														<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
														<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
														<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
														<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
														<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
														<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
														<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
														<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
														<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
														<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
														<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
														<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
														<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
														<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
														<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
														<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
														<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
														<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
														<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
														<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											
											
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Two Factor Authentication</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="1" name="two_factor"  @if(Auth::user()->two_factor==1)
													checked
                                            @endif />
													<label class="form-check-label" for="flexCheckboxLg">
													Yes
													</label>&nbsp;&nbsp;

													<input class="form-check-input" type="radio" value="0" name="two_factor" @if(Auth::user()->two_factor==0)
													checked
                                            @endif />
													<label class="form-check-label" for="flexCheckboxLg">
													No
													</label>
													
													</div>
												<!--end::Col-->
											<!--end::Input group-->
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
										
											<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Basic info-->
			
							<!--end::Sign-in Method-->
						
					
							<!--end::Notifications-->
							<!--begin::Deactivate Account-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Deactivate Account</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_deactivate" class="collapse show">
									<!--begin::Form-->
									<form method="post" action="{{route('deactivate_profile')}}">
										@csrf
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
														<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
														<br />
														<a class="fw-bold" href="#">Learn more</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<div class="row mb-6">
											
												<div class="col-lg-6">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="Enter Your Password For deactivate Account"  />
															<br>
																@if ($errors->any())
																@foreach ($errors->all() as $error)

																<div class="alert alert-danger" role="alert">
																{{$error}}
																</div>
																@endforeach
																@endif
														</div>
														<!--end::Col-->
													

													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>
											<!--begin::Form input row-->
											<div class="form-check form-check-solid fv-row">
												<input name="agree" class="form-check-input" type="checkbox" value="yes"  />
												<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
											</div>
											<!--end::Form input row-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Deactivate Account-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<!--begin::Footer-->
                    @include('layouts.footer')