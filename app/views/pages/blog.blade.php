@include('pages.back')

<div class="scroll">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Recent Blog Posts</h1>
			</div>
		</div>
	</div>

	<?php $feed = simplexml_load_file('http://blog.lukevers.com/rss'); ?>

	<div class="container">
		@foreach($feed->channel->item as $item)
			<hr>

			<div class="row">
				<div class="col-xs-12">
					<a href="{{ (string) $item->link }}">
						<div class="post">
							<h3>{{ (string) $item->title }}</h3>
							<h5>{{ (string) $item->pubDate }} &bull; Read More</h5>
						</div>
					</a>
				</div>
			</div>

		@endforeach
	</div>
</div>
