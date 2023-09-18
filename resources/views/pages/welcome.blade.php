@extends('master')

@section('title', "About us ~ Tilde")

@section('content')
		<section id="sec-1">
			<div class="content">
				<h2>
					<span>Hi. We’re Tilde.</span>
				</h2>
				<h1>
					About us.
				</h1>
				<p>
					<span>We're a small team of developers who are passionate about crafting great software.</span>
					<span>We're some of the faces behind Ember.js, Ruby on Rails, jQuery and more.</span>
					<span>We're here to help you build the products and tools of the future.</span>
				</p>
				<div id="team">
					<div><a href="">About us</a></div>
				</div>
				<img src="img/team.png" alt="Nas uzasny tim" id="photo-team">
			</div>
		</section>

		<section id="sec-2">
			<div class="content">
				<h1>You may recognize us from around town</h1>
				<ul>
					<li><a href="" target="_blank"><img src="img/rails.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/jquery.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/ember.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/handlebars.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/bundler.png" alt="Logo"></a></li>
				</ul>
			</div>
		</section>

		<section id="sec-3">
			<div class="content">
				<h1><span>What We Do</span></h1>
				<div class="sec-3 clearfix">
					<div class="col">
						<img src="img/consulting.png" alt="">
						<h3>Ember.js &amp; Product Consulting</h3>
						<p>We can handle the most challenging technical problems, and we've also got architecture, product and marketing chops.</p>
						<a href="#">Learn about our process</a>
					</div>
					<div class="col">
						<img src="img/engagements.png" alt="">
						<h3>Training &amp; Speaking Engagements</h3>
						<p>We offer public, private and group training classes for Ember.js, Ruby on Rails and JavaScript. We also speak at industry conferences.</p>
						<a href="#">View our upcoming schedule</a>
					</div>
					<div class="col">
					<img src="img/open-source.png" alt="">
						<h3>Open Source Development</h3>
						<p>
							We’ve created and made contributions to some of the most notable and successful open-source projects in the world.
						</p>
						<a href="#">See what we've done</a>
					</div>
				</div>
			</div>
		</section>
@endsection