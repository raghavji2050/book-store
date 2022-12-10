<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						@foreach($breadcrumbs as $breadcrumb)
							<li>
								<a href="{{ route($breadcrumb['route'], $book['routeParams'] ?? '') }}"
									 class="{{ request()->routeIs($breadcrumb['route']) ? 'active' : '' }}">
									{{ $breadcrumb['text'] }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
