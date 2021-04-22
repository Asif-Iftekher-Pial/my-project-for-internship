
@include('new_frontend.partials.header.header')



@include('new_frontend.partials.Thumbnails.product_thumbnails')

<div id="mainBody">
	<div class="container">
		<div class="row">
								<!--Left Sidebar ================================================== -->
	
			@include('new_frontend.partials.leftsidebar.leftsidebar')


					<!-- Left Sidebar end=============================================== -->


			<div class="span9">



				


				@yield('body_section')
				
				
				
			</div>
			
		</div>
		
	</div>
</div>

{{-- ---------------------------------footer section--------------------- --}}

@include('new_frontend.partials.Footer.footer')


{{-- --------------------------------- ENd footer section--------------------- --}}






	<!-- Themes switcher section ============================================================================================= -->

@include('new_frontend.partials.theme switch.theme')

	<!-- End Themes switcher section ============================================================================================= -->
