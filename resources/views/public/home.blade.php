@extends('public.layouts.parent')

@section('title', "Scrapyard")

@section('banner')
	<div class="wt-haslayout wt-bannerholder">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-5">
					<div class="wt-bannerimages">
						<figure class="wt-bannermanimg" data-tilt>
							<img src="images/bannerimg/img-01.png" alt="img description">
							<img src="images/bannerimg/img-02.png" class="wt-bannermanimgone" alt="img description">
							<img src="images/bannerimg/img-03.png" class="wt-bannermanimgtwo" alt="img description">
						</figure>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
					<div class="wt-bannercontent">
						<div class="wt-bannerhead">
							<div class="wt-title">
								<h1><span>Find the useful scrap around you,</span> any time of the day</h1>
							</div>
							{{-- <div class="wt-description">
								<p>Artisan connects businesses with freelancers offering digital services in 30+ categories.</p>
							</div> --}}
						</div>
						<form action="" class="wt-formtheme wt-formbanner">
							<fieldset>
								<div class="form-group">
									<input type="text" name="query" class="form-control" placeholder="Search for your scrap..." required>
									<div class="wt-formoptions">
										{{-- <div class="wt-dropdown">
											<span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
										</div> --}}
										{{-- <div class="wt-radioholder">
											<span class="wt-radio">
												<input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked>
												<label for="wt-freelancers">Freelancers</label>
											</span>
											<span class="wt-radio">
												<input id="wt-jobs"  data-title="Jobs" type="radio" name="searchtype" value="job">
												<label for="wt-jobs">Jobs</label>
											</span>
											<span class="wt-radio">
												<input id="wt-company"  data-title="Companies" type="radio" name="searchtype" value="job">
												<label for="wt-company">Companies</label>
											</span>
										</div>  --}}
										<button type="submit" class="wt-searchbtn">
											<i class="lnr lnr-magnifier"></i>
										</button>
									</div>
								</div>
							</fieldset>

							{{-- <script>
								document.getElementById('query').addEventListener('input', function() {
									var query = this.value.trim();
									if (query.length > 0) {
										// Make an AJAX request to your Laravel backend
										fetchSearchSuggestions(query);
									} else {
										// Clear the search suggestions box if the query is empty
										document.querySelector('.search-suggestions').innerHTML = '';
									}
								});
							
								function fetchSearchSuggestions(query) {
									// Make an AJAX request to your Laravel backend
									fetch('{{route("public.search.suggestions")}}', {
										method: 'POST',
										headers: {
											'Content-Type': 'application/json',
											'X-CSRF-TOKEN': '{{ csrf_token() }}'
										},
										body: JSON.stringify({ query: query })
									})
									.then(response => response.json())
									.then(data => {
										// Populate the search suggestions box with the returned suggestions
										var suggestionsHTML = data.map(item => 
							
										`
										
										<span class="wt-radio">
											<input id="wt-${item.id}" data-title="${item.title}" type="radio" name="searchtype" value="${item.title}">
											<label for="wt-${item.id}">${item.title}</label>
										</span>
										
										`).join('');
										document.querySelector('.search-suggestions').innerHTML = suggestionsHTML;
									})
									.catch(error => {
										console.error('Error:', error);
									});
								}
							
								document.querySelector('.search-suggestions').addEventListener('click', function(event) {
									// Check if the clicked element is an input element
									if (event.target.tagName === 'INPUT') {
										// Get the title of the clicked suggestion
										var title = event.target.getAttribute('data-title');
										
										// Update the value of the search box with the title of the clicked suggestion
										document.getElementById('query').value = title;
									}
								});
							</script> --}}
						</form>
						<div class="wt-videoholder">
							<div class="wt-videoshow">
								<a data-rel="prettyPhoto[video]" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-play"></i></a>
							</div>
							<div class="wt-videocontent">
								<span>See For Yourself!<em>How it works </em></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<main id="wt-main" class="wt-main wt-haslayout">

		{{-- <section class="wt-haslayout wt-main-section">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
						<div class="wt-sectionhead wt-textcenter">
							<div class="wt-sectiontitle">
								<h2>Explore Categories</h2>
								<span>Gigs by categories</span>
							</div>
						</div>
					</div>
					<div class="wt-categoryexpl">

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure>
									<img src="images/categories/img-01.png" alt="image description">
								</figure>
								<div class="wt-cattitle">
									<h3>
										<a href="{{ route('public.search', ['category' => $categories[9]->id]) }} ">{{ $categories[9]->name }}</a>
									</h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[9]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[9]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-08.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[13]->id]) }}">{{ $categories[13]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[13]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[13]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-02.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[18]->id]) }}">{{ $categories[18]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[18]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[18]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-03.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[20]->id]) }}">{{ $categories[20]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[20]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[20]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-04.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[17]->id]) }}">{{ $categories[17]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[17]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[17]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-05.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[1]->id]) }}">{{ $categories[1]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[1]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[1]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-06.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[2]->id]) }}">{{ $categories[2]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[2]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[2]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
							<div class="wt-categorycontent">
								<figure><img src="images/categories/img-07.png" alt="image description"></figure>
								<div class="wt-cattitle">
									<h3><a href="{{ route('public.search', ['category' => $categories[21]->id]) }}">{{ $categories[21]->name }}</a></h3>
								</div>
								<div class="wt-categoryslidup">
									<p>{{ $categories[21]->description }}</p>
									<a href="{{ route('public.search', ['category' => $categories[21]->id]) }}">Explore <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="wt-haslayout wt-main-section wt-paddingnull wt-companyinfohold">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="wt-companydetails">
							<div class="wt-companycontent">
								<div class="wt-companyinfotitle">
									<h2>Start As Company</h2>
								</div>
								<div class="wt-description">
									<p>Empower your business with Corporate Artisan Network. Access a diverse pool of skilled freelancers, foster innovation, and elevate your projects to new heights!</p>
								</div>
								<div class="wt-btnarea">
									<a href="{{ route("companies.create") }}" class="wt-btn">Join Now</a>
								</div>
							</div>
							<div class="wt-companycontent">
								<div class="wt-companyinfotitle">
									<h2>Start As Freelancer</h2>
								</div>
								<div class="wt-description">
									<p>Join Corporate Artisan Network: Unleash your freelance potential! Connect with opportunities, showcase your skills, and thrive in a dynamic professional ecosystem.</p>
								</div>
								<div class="wt-btnarea">
									<a href="{{ route("freelancers.create") }}" class="wt-btn">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

	</main>
@endsection