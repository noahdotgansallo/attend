@extends('template')
@section('title')
dashboard
@stop
@section('content')
<?php $count = '1';?>
@foreach($list as $list)

<?php $list = $list['seminar']; ?>

@if($count == '1')
<div class="row">
@endif
	<div class="6u">

		<section class="box special">
			<span class="image featured"><img src="{{asset('images/pic02.jpg')}}" alt="" /></span>
			<h3>{{$list->name}}</h3>
			<ul class="actions">
				<li><a href="{{action('HomeViewController@detailClass', $list->id)}}" class="button alt">View</a></li>
			</ul>
		</section>
		
	</div>
@if($count == '2')
</div>
@endif

@if($count == '2')
<?php $count = '1'; ?>
@else
<?php $count = $count+'1'?>
@endif

@endforeach

@stop