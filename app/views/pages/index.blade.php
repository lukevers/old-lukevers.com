@extends('template')

@section('content')

<div class="title">
	Luke Evers
</div>

<div class="bottom">
	<a href="https://twitter.com/lukevers_" class="twitter-follow-button" data-show-count="true" data-align="left" data-width="195px">Follow @lukevers_</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<iframe src="github-btn?user=lukevers&type=follow&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="150" height="20"></iframe>
	<script data-gittip-username="lukevers" data-gittip-widget="button" src="//gttp.co/v1.js"></script>
</div>

@stop
