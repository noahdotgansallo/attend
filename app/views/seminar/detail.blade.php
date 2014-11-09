@extends('template')
<?php $banner = "landing";?>
@section('title')

@stop
@section('content')
<!-- Banner -->
<section id="banner" style="background-image:url({{asset('images/map-big.jpg')}})!important;background-repeat: no-repeat;background-size:100% 100%">
	<h2 style="color:#444!important">{{$seminar->name}}</h2>
</section>
<section id="main" class="container">
		
	<section class="box special" id="learnmore">
		<header class="major">
			<h2>Creator | {{User::find($seminar->user_id)->first_name.' '.User::find($seminar->user_id)->last_name}}</h2>
		</header>
		<p></p>
	</section>

	<section class="box special">
		<div class="table-wrapper">
			<table class="alt">
				<thead>
					<tr>
						<th>Name</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Something</td>
						<td>Ante turpis integer aliquet porttitor.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
			

</section>
@stop