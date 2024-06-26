@extends('public.layouts.parent')

@section('title', "Gigs | CAN")
	
@section('banner')
	
	<!--Inner Home Banner Start-->
	<div class="wt-haslayout wt-innerbannerholder">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
					<div class="wt-innerbannercontent">
					<div class="wt-title"><h2>Search Results</h2></div>
					<ol class="wt-breadcrumb">
						<li><a href="{{ route("public.home") }}">Home</a></li>
						<li class="wt-active">Search</li>
					</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Inner Home End-->

@endsection

@section('content')
	
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
		<div class="wt-haslayout wt-main-section">
			<!-- User Listing Start-->
			<div class="wt-haslayout">
				<div class="container">
					<div class="row">
						{{-- <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
							<aside id="wt-sidebar" class="wt-sidebar">
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Categories</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="form-group">
													<input type="text" name="Search" class="form-control" placeholder="Search Category">
													<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
												</div>
											</fieldset>
											<fieldset>
												<div class="wt-checkboxholder wt-verticalscrollbar">
													<span class="wt-checkbox">
														<input id="wordpress" type="checkbox" name="description" value="company" checked>
														<label for="wordpress"> WordPress</label>
													</span>
													<span class="wt-checkbox">
														<input id="graphic" type="checkbox" name="description" value="company">
														<label for="graphic"> Graphic Design</label>
													</span>
													<span class="wt-checkbox">
														<input id="website" type="checkbox" name="description" value="company">
														<label for="website"> Website Design</label>
													</span>
													<span class="wt-checkbox">
														<input id="article" type="checkbox" name="description" value="company">
														<label for="article"> Article Writing</label>
													</span>
													<span class="wt-checkbox">
														<input id="software" type="checkbox" name="description" value="company">
														<label for="software"> Software Architecture</label>
													</span>
													<span class="wt-checkbox">
														<input id="wordpress1" type="checkbox" name="description" value="company">
														<label for="wordpress1"> WordPress</label>
													</span>
													<span class="wt-checkbox">
														<input id="graphic1" type="checkbox" name="description" value="company">
														<label for="graphic1"> Graphic Design</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Project Type</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="wt-checkboxholder">
													<span class="wt-radio">
														<input id="project" type="radio" name="description" value="company" checked>
														<label for="project"> Any Project Type</label>
													</span>
													<span class="wt-radio">
														<input id="hourly" type="radio" name="description" value="company">
														<label for="hourly"> Hourly Based Project</label>
													</span>
													<div id="wt-productrangeslider" class="wt-productrangeslider wt-themerangeslider"></div>
													<div class="wt-amountbox">
														<input type="text" id="wt-consultationfeeamount" readonly>
													</div>
													<span class="wt-radio">
														<input id="fixed" type="radio" name="description" value="company">
														<label for="fixed"> Fixed Price Project</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Location</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="form-group">
													<input type="text" name="fullname" class="form-control" placeholder="Search Location">
													<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
												</div>
											</fieldset>
											<fieldset>
												<div class="wt-checkboxholder wt-verticalscrollbar">
													<span class="wt-checkbox">
														<input id="wt-description" type="checkbox" name="description" value="company" checked>
														<label for="wt-description"> <img src="images/flag/img-01.png" alt="img description"> Australia</label>
													</span>
													<span class="wt-checkbox">
														<input id="us" type="checkbox" name="description" value="company">
														<label for="us"> <img src="images/flag/img-02.png" alt="img description"> United States</label>
													</span>
													<span class="wt-checkbox">
														<input id="canada" type="checkbox" name="description" value="company">
														<label for="canada"> <img src="images/flag/img-03.png" alt="img description"> Canada</label>
													</span>
													<span class="wt-checkbox">
														<input id="england" type="checkbox" name="description" value="company">
														<label for="england"> <img src="images/flag/img-04.png" alt="img description"> England</label>
													</span>
													<span class="wt-checkbox">
														<input id="emirates" type="checkbox" name="description" value="company">
														<label for="emirates"> <img src="images/flag/img-05.png" alt="img description"> United Emirates</label>
													</span>
													<span class="wt-checkbox">
														<input id="wt-description1" type="checkbox" name="description" value="company">
														<label for="wt-description1"> <img src="images/flag/img-01.png" alt="img description"> Australia</label>
													</span>
													<span class="wt-checkbox">
														<input id="us1" type="checkbox" name="description" value="company">
														<label for="us1"> <img src="images/flag/img-02.png" alt="img description"> United States</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Skills Required</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="wt-checkboxholder">
													<span class="wt-checkbox">
														<input id="proindependent" type="checkbox" name="description" value="company" checked>
														<label for="proindependent">Pro Independent Freelancers</label>
													</span>
													<span class="wt-checkbox">
														<input id="proagency" type="checkbox" name="description" value="company">
														<label for="proagency"> Pro Agency Freelancers</label>
													</span>
													<span class="wt-checkbox">
														<input id="independent" type="checkbox" name="description" value="company">
														<label for="independent"> Independent Freelancers</label>
													</span>
													<span class="wt-checkbox">
														<input id="agency" type="checkbox" name="description" value="company">
														<label for="agency">Agency Freelancers</label>
													</span>
													<span class="wt-checkbox">
														<input id="rising" type="checkbox" name="description" value="company">
														<label for="rising"> New Rising Talent</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Project Length</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="wt-checkboxholder">
													<span class="wt-checkbox">
														<input id="anyproject" type="checkbox" name="anyproject" value="project" checked>
														<label for="anyproject">Any Project Length</label>
													</span>
													<span class="wt-checkbox">
														<input id="01month" type="checkbox" name="01month" value="month">
														<label for="01month"> Less Than 01 Month</label>
													</span>
													<span class="wt-checkbox">
														<input id="3months" type="checkbox" name="3months" value="months">
														<label for="3months"> 01 to 03 Months</label>
													</span>
													<span class="wt-checkbox">
														<input id="6months" type="checkbox" name="months" value="months">
														<label for="6months"> 03 to 06 Months</label>
													</span>
													<span class="wt-checkbox">
														<input id="moremonths" type="checkbox" name="months" value="months">
														<label for="moremonths"> More Than 06 Months</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgettitle">
										<h2>Languages</h2>
									</div>
									<div class="wt-widgetcontent">
										<form class="wt-formtheme wt-formsearch">
											<fieldset>
												<div class="form-group">
													<input type="text" name="fullname" class="form-control" placeholder="Search Language">
													<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
												</div>
											</fieldset>
											<fieldset>
												<div class="wt-checkboxholder wt-verticalscrollbar">
													<span class="wt-checkbox">
														<input id="chinese" type="checkbox" name="description" value="company" checked>
														<label for="chinese">Chinese</label>
													</span>
													<span class="wt-checkbox">
														<input id="spanish" type="checkbox" name="description" value="company">
														<label for="spanish">Spanish</label>
													</span>
													<span class="wt-checkbox">
														<input id="english" type="checkbox" name="description" value="company">
														<label for="english">English</label>
													</span>
													<span class="wt-checkbox">
														<input id="arabic" type="checkbox" name="description" value="company">
														<label for="arabic">Arabic</label>
													</span>
													<span class="wt-checkbox">
														<input id="russian" type="checkbox" name="description" value="company">
														<label for="russian">Russian</label>
													</span>
													<span class="wt-checkbox">
														<input id="chinese1" type="checkbox" name="description" value="company">
														<label for="chinese1">Chinese</label>
													</span>
													<span class="wt-checkbox">
														<input id="spanish1" type="checkbox" name="description" value="company">
														<label for="spanish1">Spanish</label>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="wt-widget wt-effectiveholder">
									<div class="wt-widgetcontent">
										<div class="wt-applyfilters">
											<span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
											<a href="javascript:void(0);" class="wt-btn">Apply Filters</a>
										</div>
									</div>
								</div>
							</aside>
						</div> --}}
						<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
								<div class="wt-userlistingholder wt-haslayout">
									<div class="wt-userlistingtitle">
										
										<span>{{$gigs->count()}} results found. 
											{{-- <em>"{{ $request->input("query") }}"</em> --}}
										</span>

									</div>
									{{-- <div class="wt-filterholder">
										<ul class="wt-filtertag">
											<li class="wt-filtertagclear">
												<a href="javascrip:void(0)"><i class="fa fa-times"></i> <span>Clear All Filter</span></a>
											</li>
											<li class="alert alert-dismissable fade in">
												<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Graphic Design</span></a>
											</li>
											<li class="alert alert-dismissable fade in">
												<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Hourly Rate</span></a>
											</li>
											<li class="alert alert-dismissable fade in">
												<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Freelancer Type</span></a>
											</li>
											<li class="alert alert-dismissable fade in">
												<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Chinese</span></a>
											</li>
											<li class="alert alert-dismissable fade in">
												<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>English</span></a>
											</li>
										</ul>
									</div> --}}

									{{-- <div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
										<span class="wt-featuredtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Light Bulb Association</a>
													<h2>I want some customization and installation</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">JQuery</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
													<li><span><em><img src="images/flag/img-04.png" alt="img description"></em>England</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Hour</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 03 Months</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li>
													<li><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
										<span class="wt-featuredtag wt-featuredtagcolor1"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Point Trend Studio</a>
													<h2>Website changes in HTML &amp; PHP</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">Team Management</a>
													<a href="javascript:void(0);">JQuery</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
													<li><span><em><img src="images/flag/img-02.png" alt="img description"></em>United States</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Fixed</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 15 Days</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: 5aUQgM2ZbW</span></li>
													<li><a href="javascript:void(0);" class="wt-clicklike"><i class="fa fa-heart"></i> Click to Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
										<span class="wt-featuredtag wt-featuredtagcolor2"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Vertex Association</a>
													<h2>Need Amazon MWS handshaking</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">JQuery</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
													<li><span><em><img src="images/flag/img-05.png" alt="img description"></em>United Emirates</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Hour</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 03 Months</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li>
													<li><a href="javascript:void(0);" class="wt-clicklike"><i class="fa fa-heart"></i> Click to Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div> --}}
									@foreach ($gigs as $gig)
										<div class="wt-userlistinghold wt-userlistingholdvtwo">
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{ $gig->freelancer->name}}</a>
														<h2>{{ $gig->title}}</h2>
													</div>
													<div class="wt-description">
														{!! $gig->description !!}
													</div>
													{{-- <div class="wt-tag wt-widgettag">
														<a href="javascript:void(0);">PHP</a>
														<a href="javascript:void(0);">HTML</a>
														<a href="javascript:void(0);">JQuery</a>
													</div> --}}
												</div>
												<div class="wt-viewjobholder">
													<ul>
														<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
														{{-- <li><span><em><img src="images/flag/img-01.png" alt="img description"></em>United Emirates</span></li> --}}
														<li><span><i class="far fa-folder wt-viewjobfolder"></i> {{ $gig->category->name}}</span></li>
														
														<li><span><i class="fa-solid fa-money-bill"></i>Price: ${{ $gig->price}}</span></li>
														{{-- <li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 03 Months</span></li> --}}
														{{-- <li><span><i class="fa fa-tag wt-viewjobtag"></i>Gig UUID: {{ $gig->uuid}}</span></li> --}}
														{{-- <li><a href="javascript:void(0);" class="wt-clicklike"><i class="fa fa-heart"></i> Click to Save</a></li> --}}
														<li class="wt-btnarea">
															<a href="{{ route("public.gig.show", $gig->id) }}" class="wt-btn">View Gig</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									@endforeach
									{{-- <div class="wt-userlistinghold wt-userlistingholdvtwo">
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Alfredo Bossard
													</a>
													<h2>Classifieds Posting, Data Entry, Typing</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">JQuery</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Intermediate</span></li>
													<li><span><em><img src="images/flag/img-03.png" alt="img description"></em>Canada</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Fixed</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 15 Days</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: bsf3NAxTMj</span></li>
													<li><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-userlistinghold wt-userlistingholdvtwo">
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Web Revolutions</a>
													<h2>Develop a transportation company website</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">Team Management</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
													<li><span><em><img src="images/flag/img-02.png" alt="img description"></em>United States</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Fixed</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 15 Days</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: 5aUQgM2ZbW</span></li>
													<li><a href="javascript:void(0);" class="wt-clicklike"><i class="fa fa-heart"></i> Click to Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-userlistinghold wt-userlistingholdvtwo">
										<div class="wt-userlistingcontent">
											<div class="wt-contenthead">
												<div class="wt-title">
													<a href="usersingle.html"><i class="fa fa-check-circle"></i> Alfredo Bossard
													</a>
													<h2>Designer Finger Change temp to Arabic and install on alloi</h2>
												</div>
												<div class="wt-description">
													<p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>
												</div>
												<div class="wt-tag wt-widgettag">
													<a href="javascript:void(0);">PHP</a>
													<a href="javascript:void(0);">HTML</a>
													<a href="javascript:void(0);">JQuery</a>
												</div>
											</div>
											<div class="wt-viewjobholder">
												<ul>
													<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>
													<li><span><em><img src="images/flag/img-01.png" alt="img description"></em>United Emirates</span></li>
													<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Hour</span></li>
													<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 03 Months</span></li>
													<li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li>
													<li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Click to Save</a></li>
													<li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>
												</ul>
											</div>
										</div>
									</div> --}}
									{{-- <nav class="wt-pagination">
										<ul>
											<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
											<li><a href="javascrip:void(0);">1</a></li>
											<li><a href="javascrip:void(0);">2</a></li>
											<li><a href="javascrip:void(0);">3</a></li>
											<li><a href="javascrip:void(0);">4</a></li>
											<li><a href="javascrip:void(0);">...</a></li>
											<li><a href="javascrip:void(0);">50</a></li>
											<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
										</ul>
									</nav> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- User Listing End-->
		</div>
	</main>
	<!--Main End-->

@endsection

