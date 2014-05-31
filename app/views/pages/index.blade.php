@extends('template')

@section('content')

<div class="corners">
	<div class="corner corner-top-left" id="about">
		<div class="cell">
			<div class="content">
				<i class="fa fa-child"></i>
				<br/>
				About Me
			</div>
		</div>
	</div>
	<div class="corner corner-top-right" id="blog">
		<div class="cell">
			<div class="content">
				<i class="fa fa-pencil"></i>
				<br/>
				My Blog
			</div>
		</div>
	</div>
	<div class="corner corner-bottom-left" id="projects">
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
	<div class="corner corner-bottom-right" id="contact">
		<div class="cell">
			<div class="content">
				<i class="fa fa-send"></i>
				<br/>
				Contact Me
			</div>
		</div>
	</div>
</div>

@stop
