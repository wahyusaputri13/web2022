@extends('front.layouts.app')
@section('content')
	<div class="works" id="album">
		<div class="container">
			<h3 class="tittle_w3ls cen">Top 10 musik </h3>
			<div class="inner_sec_info_agile-w3ls">
				<div class="column add-bottom">
					<div id="mainwrap">
						<div id="nowPlay">
							<span class="right" id="npTitle"></span>
							<span class="left" id="npAction">Paused...</span>
						</div>
						<div id="audiowrap">
							<div id="audio0">
								<audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
							</div>
						</div>
						<div id="plwrap">
							<ul id="plList"></ul>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

