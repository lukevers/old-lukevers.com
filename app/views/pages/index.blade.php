@extends('template')

@section('content')

<div class="corners">
	<div class="corner corner-top-left">
		<div class="cell">
			<div class="content">
				<i class="fa fa-child"></i>
				<br/>
				About Me
			</div>
		</div>
	</div>
	<div class="corner corner-top-right">
		<div class="cell">
			<div class="content">
				<i class="fa fa-pencil"></i>
				<br/>
				My Blog
			</div>
		</div>
	</div>
	<div class="corner corner-bottom-left">
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
	<div class="corner corner-bottom-right">
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
