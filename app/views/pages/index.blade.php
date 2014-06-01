@extends('template')

@section('content')

<div class="pt-wrapper">
	<div class="pt-page pt-page-1">
		<div class="corners pt-trigger-container">
			<div class="corner corner-top-left pt-trigger" id="about" data-animation="3" data-goto="2">
				<div class="cell">
					<div class="content">
						<i class="fa fa-child"></i>
						<br/>
						About Me
					</div>
				</div>
			</div>
			<div class="corner corner-top-right pt-trigger" id="blog" data-animation="3" data-goto="3">
				<div class="cell">
					<div class="content">
						<i class="fa fa-pencil"></i>
						<br/>
						My Blog
					</div>
				</div>
			</div>
			<div class="corner corner-bottom-left pt-trigger" id="projects" data-animation="3" data-goto="4">
				<div class="cell">
					<div class="content">
						<i class="fa fa-desktop"></i>
						<i class="fa fa-tablet"></i>
						<i class="fa fa-mobile"></i>
						<br/>
						Projects
					</div>
				</div>
			</div>
			<div class="corner corner-bottom-right pt-trigger" id="contact" data-animation="3" data-goto="5">
				<div class="cell">
					<div class="content">
						<i class="fa fa-send"></i>
						<br/>
						Contact Me
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Me -->
	<div class="pt-page pt-page-2">
		@include('pages.about')
	</div>

	<!-- My Blog -->
	<div class="pt-page pt-page-3">
		@include('pages.blog')
	</div>

	<!-- Projects -->
	<div class="pt-page pt-page-4">
		@include('pages.projects')
	</div>

	<!-- Contact Me -->
	<div class="pt-page pt-page-5">
		@include('pages.contact')
	</div>
</div>

@stop

