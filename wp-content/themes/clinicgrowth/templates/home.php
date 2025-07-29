<?php
	/*
		Template Name: Home
		Template Post Type: post, page
	*/
?>

	<?php
		$settings = parse_ini_file("settings.ini", TRUE);
	?>

	<?php get_header(); ?>

	<h1 style="height: 0; overflow: hidden;">Dental &amp; Aesthetic Clinic Marketing Agency</h1>

	<!-- Hero Landing -->

	<section id="home-page">
		<section class="landing cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/landing-background.jpg);">
			<section class="container">
				<div class="col-1-1 col flex center-center">
					<div class="txt mar-0-a">
						<h1 class="font-bold t-a-c l-h-1-1 mar-0-a title color-white">We help private clinics <br/>attract 10–30 new <br/><span class="color-primary">high-value patients</span> <br/>every month.</h1>
						<h2 class="font-regular t-a-c color-white subtitle l-h-1-2">Specialist marketing for dentists & aesthetic clinics: Paid Ads, Social Media Content & CRM Systems — All Done For You</h2>
						<div class="flex center-center btn">
							<a
								class="display-block"
								href='<?php echo $settings['website']['FREE_AUDIT_URL']; ?>' 
								target="_blank"
								rel='noreferrer'
							>
								<button class="background-primary color-white hover-background-secondary hover-color-white">Book Your Free Growth Audit</button>
							</a>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- Clients -->

	<section id="home-page">
		<section class="trust">
			<div class="container">
				<div class="col-1-1 flex center-left row">
					<div>
						<p class="l-h-1 small color-primary">Large & Small</p>
						<p class="color-secondary font-bold large">Trusted by Clinics</p>
					</div>
					<div class="flex-1 flex center-right right">
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/medisha.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/woodcroft.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/rebecca.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/stella.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/drkathryn.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/harwood.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/milan.jpg' />
						<img src='<?php bloginfo('template_directory'); ?>/images/home/clients/emma.jpg' />
					</div>
				</div>
			</div>
		</section>
	</section>

	<!-- Who We Help -->

	<section id="home-page">
		<section class="help">
			<div class="container">
				<div class="col-1-1 flex bottom-left top">
					<div class="col-1-2 left">
						<p class="l-h-1 small color-primary">Expertise</p>
						<h3 class="font-bold color-secondary">Who we Help</h3>
						<p>Providing clinics with expertise and knowledge in digital marketing and design that works since 2005.</p>
					</div>
					<div class="col-1-2 flex center-right right">
						<div class="i flex center-center b-r-100 background-faded" style="height: 32px; width: 32px;">
							<svg xmlns="http://www.w3.org/2000/svg" width="68.663" height="74.388" viewBox="0 0 68.663 74.388" class="width-auto display-block color-primary-path" style="height: 16px;">
  								<path d="M16.93,73.333c-4.291-3.05-8.554-10.092-11.676-19.311A107.545,107.545,0,0,1,0,19.937,107.545,107.545,0,0,0,5.253,54.022c3.122,9.22,7.385,16.261,11.676,19.311a5.6,5.6,0,0,0,3.265,1.055,5.754,5.754,0,0,0,5.722-5.328c.3-4.12,1.806-17.563,8.415-17.563s8.111,13.439,8.415,17.552a5.754,5.754,0,0,0,3.283,4.778,5.754,5.754,0,0,1-3.283-4.778c-.3-4.112-1.806-17.552-8.415-17.552S26.221,64.94,25.917,69.06a5.754,5.754,0,0,1-5.722,5.328A5.6,5.6,0,0,1,16.93,73.333Zm0,0c-4.291-3.05-8.554-10.092-11.676-19.311A107.545,107.545,0,0,1,0,19.937,20.027,20.027,0,0,1,20.027,0h28.61A20.026,20.026,0,0,1,68.663,19.937h0a107.41,107.41,0,0,1-5.253,34.074c-3.122,9.227-7.378,16.268-11.676,19.311l-.086.061-.074.05h0a5.61,5.61,0,0,1-3.1.945h-.023a5.6,5.6,0,0,1-2.417-.552,5.754,5.754,0,0,1-3.283-4.778c-.3-4.112-1.806-17.552-8.415-17.552S26.221,64.94,25.917,69.06a5.754,5.754,0,0,1-5.722,5.328A5.6,5.6,0,0,1,16.93,73.333Zm31.524-4.692c1.287-.926,5.568-4.742,9.534-16.45a101.4,101.4,0,0,0,4.953-32.25v0a14.3,14.3,0,0,0-14.3-14.215H20.027a14.3,14.3,0,0,0-14.3,14.219,101.21,101.21,0,0,0,4.953,32.236c3.951,11.68,8.225,15.51,9.516,16.45,1.112-14.745,6.126-22.852,14.14-22.852S47.367,53.9,48.454,68.641ZM5.722,19.941a14.3,14.3,0,0,1,14.3-14.219h28.61a14.3,14.3,0,0,1,14.3,14.215,14.3,14.3,0,0,0-14.3-14.215H20.027A14.3,14.3,0,0,0,5.722,19.941ZM48.446,74.379h0Zm3.126-.945a5.609,5.609,0,0,1-3.1.945A5.61,5.61,0,0,0,51.572,73.434Zm.075-.051-.074.05Zm.086-.061c4.3-3.043,8.554-10.085,11.676-19.311a107.411,107.411,0,0,0,5.253-34.074,107.411,107.411,0,0,1-5.253,34.074c-3.122,9.227-7.378,16.268-11.676,19.311Zm-3.1-44.711H48.63a2.851,2.851,0,0,1-1-.183l-.068-.026-13.232-5.3L21.1,28.4l-.072.028a2.853,2.853,0,0,1-.994.181h-.019a2.864,2.864,0,0,1-1.06-5.52l7.674-3.065-7.674-3.068A2.865,2.865,0,0,1,17.162,14.3a2.865,2.865,0,0,0,1.792,2.663l7.674,3.068-7.674-3.068a2.864,2.864,0,0,1,1.06-5.52h.019a2.852,2.852,0,0,1,.994.181l.009,0,.026.01.037.015,13.232,5.3,13.232-5.3a2.864,2.864,0,1,1,2.146,5.311l-7.674,3.068,7.674-3.068A2.865,2.865,0,0,0,51.5,14.3a2.865,2.865,0,0,1-1.792,2.663l-7.674,3.068,7.674,3.065a2.861,2.861,0,0,1,1.583,3.728l-.027.065-.008.019-.016.036-.01.023a2.865,2.865,0,0,1-2.567,1.649h-.027Zm-.006,0h0Zm-28.615,0h0Zm1.013-.181a2.852,2.852,0,0,1-.994.181A2.853,2.853,0,0,0,21.027,28.43Zm30.2-1.467a2.865,2.865,0,0,1-2.567,1.649A2.865,2.865,0,0,0,51.229,26.963ZM47.563,28.4l-13.232-5.3L21.1,28.4l13.232-5.3,13.232,5.3.068.026Zm3.693-1.5-.016.036Zm.036-.084a2.857,2.857,0,0,0,.209-1.066,2.857,2.857,0,0,1-.209,1.066l-.027.065Zm-33.92,0a2.856,2.856,0,0,1-.209-1.066,2.856,2.856,0,0,0,.209,1.066Zm51.291-6.883h0Zm0,0h0Zm0,0h0Z"/>
							</svg>
						</div>
						<div class="i flex center-center b-r-100 background-faded" style="height: 32px; width: 32px;">
							<svg xmlns="http://www.w3.org/2000/svg" width="223.864" height="223.864" viewBox="0 0 223.864 223.864" class="width-auto display-block color-primary-path" style="height: 16px;">
  								<path d="M96.932,213.432,73.872,150l-63.44-23.07A16,16,0,0,1,0,111.932a16,16,0,0,0,10.432,15L73.872,150l23.06,63.43a16,16,0,0,0,30,0L150,149.992l63.43-23.06a16,16,0,0,0,10.432-15,16,16,0,0,1-10.432,15L150,149.992l-23.07,63.44a16,16,0,0,1-30,0Zm0,0L73.872,150l-63.44-23.07a16,16,0,0,1,0-30l63.44-23.06,23.06-63.44a16,16,0,0,1,30,0l23.06,63.44,63.44,23.06a16,16,0,0,1,0,30L150,149.992l-23.07,63.44a16,16,0,0,1-30,0Zm-14.08-77.2a8,8,0,0,1,4.78,4.78l24.3,66.82,24.3-66.82a8,8,0,0,1,4.78-4.78l66.82-24.3-66.82-24.3a8,8,0,0,1-4.78-4.78l-24.3-66.82-24.3,66.82a8,8,0,0,1-4.78,4.78l-66.82,24.3Zm53.38-53.38a8,8,0,0,0,4.78,4.78l66.82,24.3-66.82-24.3a8,8,0,0,1-4.78-4.78l-24.3-66.82-24.3,66.82a8,8,0,0,1-4.78,4.78l-66.82,24.3,66.82-24.3a8,8,0,0,0,4.78-4.78l24.3-66.82Z"/>
							</svg>
						</div>
						<div class="i flex center-center b-r-100 background-faded" style="height: 32px; width: 32px;">
							<svg xmlns="http://www.w3.org/2000/svg" width="235.983" height="172.009" viewBox="0 0 235.983 172.009" class="width-auto display-block color-primary-path" style="height: 16px;">
  								<path d="M118,172.009c14.71,0,42.12,0,73.06-18.491s41.11-41.85,44.419-54.14a13.99,13.99,0,0,0,.5-3.7,13.99,13.99,0,0,1-.5,3.7c-3.309,12.29-13.479,35.65-44.419,54.14S132.708,172.009,118,172.009Zm-73.08-18.491C14,135.009,3.808,111.668.5,99.389a14,14,0,0,1,1.4-10.74,13.557,13.557,0,0,1,8.3-6.4l.346-.087.164-.041.221-.054.572-.137.241-.057a72.616,72.616,0,0,1,16.4-1.887H28.2q2.985,0,5.971.247l.193.016a95.19,95.19,0,0,1-2.4-21.045,95.19,95.19,0,0,0,2.4,21.045,95.19,95.19,0,0,1-2.4-21.045,82.629,82.629,0,0,1,3.853-25.354l.022-.07q.043-.133.089-.265a14.153,14.153,0,0,1,13.328-9.526H49.3a14.175,14.175,0,0,1,2.859.294l.128.027a84.167,84.167,0,0,1,29.77,13.109,92.7,92.7,0,0,1,27.509-34.6,14,14,0,0,1,16.851,0,92.6,92.6,0,0,1,27.519,34.6A84.224,84.224,0,0,1,183.7,24.309l.13-.027.076-.016.117-.023a14.168,14.168,0,0,1,2.669-.256h.045a14.16,14.16,0,0,1,13.354,9.581l.027.079c.021.064.042.128.063.192a82.629,82.629,0,0,1,3.853,25.354,95.19,95.19,0,0,1-2.4,21.045,95.19,95.19,0,0,0,2.4-21.045,95.19,95.19,0,0,1-2.4,21.045q.361-.031.722-.058,2.719-.2,5.441-.205h.063A72.646,72.646,0,0,1,224.4,81.895l.046.011.251.06.319.077.129.032q.328.081.657.165a13.561,13.561,0,0,1,8.3,6.4,13.995,13.995,0,0,1,1.38,10.74c-3.309,12.29-13.479,35.65-44.419,54.14S132.708,172.009,118,172.009,75.839,172.029,44.918,153.518Zm73.08,5.35c8.81-6.19,34-27.92,34-73.69,0-43.36-22.94-65.34-32.8-72.78a2,2,0,0,0-2.4,0c-9.86,7.44-32.8,29.42-32.8,72.78C84,130.669,109.319,152.669,118,158.869Zm-29.57-1.14a141.006,141.006,0,0,1-41-44.72A126.263,126.263,0,0,1,38,92.729a126.263,126.263,0,0,0,9.43,20.28,141.006,141.006,0,0,0,41,44.72Zm0,0a141.006,141.006,0,0,1-41-44.72A126.263,126.263,0,0,1,38,92.729c-.218-.035-.437-.068-.655-.1l-.186-.027-.079-.011a62.15,62.15,0,0,0-8.775-.626h-.059A62.14,62.14,0,0,0,13.712,93.7l-.423.1a1.712,1.712,0,0,0-1,.8,2.083,2.083,0,0,0-.256,1.4,2.076,2.076,0,0,1-.03-.363,2.077,2.077,0,0,0,.076.568c.406,1.508.935,3.211,1.621,5.068,4.128,11.169,13.971,27.948,37.379,41.932a114.809,114.809,0,0,0,33.037,13.58Q86.261,157.3,88.428,157.729Zm109.57-65a126.367,126.367,0,0,1-9.48,20.27,141,141,0,0,1-41,44.72,141,141,0,0,0,41-44.72A126.367,126.367,0,0,0,198,92.729Zm0,0a126.367,126.367,0,0,1-9.48,20.27,141,141,0,0,1-41,44.72,114.822,114.822,0,0,0,37.38-14.47c27.3-16.349,36.15-36.46,39-47h.02a2.084,2.084,0,0,0-.19-1.61,1.71,1.71,0,0,0-1-.8A62.167,62.167,0,0,0,198,92.729Zm-146.92,50.48a114.823,114.823,0,0,0,33.038,13.58,114.809,114.809,0,0,1-33.037-13.58C27.67,129.225,17.827,112.446,13.7,101.277,17.827,112.446,27.67,129.225,51.078,143.209ZM164,85.179c0,23.76-6.15,41.83-13.83,55.2,7.681-13.369,13.83-31.44,13.83-55.2q0-.433,0-.865,0,.433,0,.865c0,23.76-6.15,41.83-13.83,55.2a129.743,129.743,0,0,0,28-33.369c10.709-18.625,13.874-34.974,13.872-47.8a70.922,70.922,0,0,0-3.283-21.7,2.2,2.2,0,0,0-2.54-1.5,73.1,73.1,0,0,0-27.74,12.9A116.124,116.124,0,0,1,164,84.314Q164,84.746,164,85.179Zm-78.19,55.17C78.148,127.029,72,108.939,72,85.179q0-.433,0-.865a116.124,116.124,0,0,1,5.523-35.4,73.1,73.1,0,0,0-27.74-12.9,73.1,73.1,0,0,1,27.74,12.9,73.1,73.1,0,0,0-27.74-12.9,2.207,2.207,0,0,0-.42-.043h-.013l-.112,0,.089,0a2.2,2.2,0,0,0-2,1.349l0,.012a2.219,2.219,0,0,0-.075.212,70.733,70.733,0,0,0-3.284,21.678c0,12.813,3.156,29.154,13.854,47.762a129.579,129.579,0,0,0,28,33.37C78.148,127.029,72,108.939,72,85.179q0-.433,0-.865,0,.433,0,.865c0,23.76,6.15,41.85,13.81,55.17Zm136.921-46.51a1.71,1.71,0,0,1,1,.8A2.082,2.082,0,0,1,224,95.657a2.082,2.082,0,0,0-.272-1.018,1.71,1.71,0,0,0-1-.8,62.153,62.153,0,0,0-7.358-1.377A62.247,62.247,0,0,1,222.728,93.839ZM119.2,12.4c9.86,7.44,32.8,29.42,32.8,72.78,0-43.36-22.94-65.34-32.8-72.78a2,2,0,0,0-2.4,0c-9.86,7.44-32.8,29.42-32.8,72.78,0-43.36,22.94-65.34,32.8-72.78a2,2,0,0,1,2.4,0ZM47.238,37.539a70.733,70.733,0,0,0-3.284,21.678,70.733,70.733,0,0,1,3.284-21.678Zm141.52-.031a70.922,70.922,0,0,1,3.283,21.7,70.922,70.922,0,0,0-3.283-21.7Zm-2.54-1.5a73.1,73.1,0,0,0-27.74,12.9,73.1,73.1,0,0,1,27.74-12.9ZM45.1,153.627c30.846,18.4,58.218,18.382,72.9,18.382C103.317,172.009,75.946,172.029,45.1,153.627Zm-.181-.108C14,135.009,3.808,111.668.5,99.389a13.994,13.994,0,0,1-.5-3.7,13.994,13.994,0,0,0,.5,3.7c3.31,12.28,13.5,35.62,44.42,54.13l.181.108ZM12.289,94.6a1.707,1.707,0,0,1,1-.8,1.707,1.707,0,0,0-1,.8A2.081,2.081,0,0,0,12,95.641,2.081,2.081,0,0,1,12.289,94.6Zm1.423-.9-.423.1ZM37.157,92.6l.186.027ZM28.3,91.964a62.15,62.15,0,0,1,8.775.626A62.172,62.172,0,0,0,28.3,91.964Zm-.025,0h0ZM47.318,37.315l0,.012Zm2.04-1.349a2.207,2.207,0,0,1,.42.043A2.21,2.21,0,0,0,49.358,35.966Zm-.013,0h0Z" transform="translate(0)"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="all flex">
					<div class="col-1-3 one">
						<div class="img cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/private-dentist.jpg)">
							<img class="col-1-1 height-auto" src="<?php bloginfo('template_directory'); ?>/images/home/private-dentist.jpg" />
						</div>
						<p class="large font-medium title t-a-c">Private Dentists</a></p>
						<p class="small description t-a-c color-light">Our dental marketing experts specialise in marketing dentistry and helping dentists grow their practices. We create tailored digital marketing strategies designed to increase patient bookings, boost your online visibility, and deliver real results.</p>
					</div>
					<div class="col-1-3 one">
						<div class="img cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/aesthetic-clinic.jpg)">
							<img class="col-1-1 height-auto" src="<?php bloginfo('template_directory'); ?>/images/home/aesthetic-clinic.jpg" />
						</div>
						<p class="large font-medium title t-a-c">Aesthetic Clinics</a></p>
						<p class="small description t-a-c color-light">At our agency, our digital marketing team are experts in the Aesthetics market and work closely with you to create the best strategy to maximise the impact your digital marketing has on your Aesthetic clinic.</p>
					</div>
					<div class="col-1-3 one">
						<div class="img cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/medical-spas.jpg)">
							<img class="col-1-1 height-auto" src="<?php bloginfo('template_directory'); ?>/images/home/medical-spas.jpg" />
						</div>
						<p class="large font-medium title t-a-c">MedSpas</a></p>
						<p class="small description t-a-c color-light">Our dental marketing experts specialise in marketing dentistry and helping dentists grow their practices. We create tailored digital marketing strategies designed to increase patient bookings, boost your online visibility, and deliver real results.</p>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!--Grow -->

	<section id="home-page">
		<section class="grow">
			<div class="container">
				<div class="col-1-1 flex top-left row">
					<div class="col-2-5 left">
						<p class="l-h-1 small color-primary">Benefits</p>
						<h3 class="font-bold color-secondary">How We Grow Your Clinic</h3>
						<p>We help your clinic get seen, generate more patient enquiries, and convert those into bookings.</p>
						<div class="flex btn">
							<a
								class="display-block"
								href='<?php echo $settings['website']['FREE_AUDIT_URL']; ?>' 
								target="_blank"
								rel='noreferrer'
							>
							<button class="background-primary color-white hover-background-secondary">Book Free Audit</button>
						</a>
					</div>
					</div>
					<div class="col-3-5 right">
						<div class="all">
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
										<path d="M-411-470a1,1,0,0,1-1-1,1,1,0,0,1,1-1h2a1,1,0,0,0,1-1v-2a1,1,0,0,1,1-1,1,1,0,0,1,1,1v2a3,3,0,0,1-3,3Zm-12,0a3,3,0,0,1-3-3v-2a1,1,0,0,1,1-1,1,1,0,0,1,1,1v2a1,1,0,0,0,1,1h2a1,1,0,0,1,1,1,1,1,0,0,1-1,1Zm10.293-5.293-1.263-1.262A3.975,3.975,0,0,1-416-476a4,4,0,0,1-4-4,4.005,4.005,0,0,1,4-4,4,4,0,0,1,4,4,3.975,3.975,0,0,1-.555,2.03l1.262,1.262a1,1,0,0,1,0,1.415A1,1,0,0,1-412-475,1,1,0,0,1-412.707-475.293ZM-418-480a2,2,0,0,0,2,2,1.991,1.991,0,0,0,1.266-.453,1,1,0,0,1,.126-.154,1.007,1.007,0,0,1,.155-.127A1.99,1.99,0,0,0-414-480a2,2,0,0,0-2-2A2,2,0,0,0-418-480Zm10-5v-2a1,1,0,0,0-1-1h-2a1,1,0,0,1-1-1,1,1,0,0,1,1-1h2a3,3,0,0,1,3,3v2a1,1,0,0,1-1,1A1,1,0,0,1-408-485Zm-18,0v-2a2.978,2.978,0,0,1,.878-2.121A2.98,2.98,0,0,1-423-490h2a1,1,0,0,1,1,1,1,1,0,0,1-1,1h-2a.993.993,0,0,0-.707.293A.993.993,0,0,0-424-487v2a1,1,0,0,1-1,1A1,1,0,0,1-426-485Z" transform="translate(426 490)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">Higher Visibility</p>
									<p class="small color-light">We design and optimise your website for maximum reach through SEO and targeted advertising, so your clinic gets seen by the right people.</p>
								</div>
							</div>
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
  										<path d="M-406.707-520.293-410.414-524H-416a3,3,0,0,1-3-3v-1a1,1,0,0,1,1-1,1,1,0,0,1,1,1v1a1,1,0,0,0,1,1h6a1,1,0,0,1,.707.293l2.293,2.293V-532a1,1,0,0,0-1-1h-2a1,1,0,0,1-1-1,1,1,0,0,1,1-1h2a3,3,0,0,1,3,3v11a1,1,0,0,1-.617.924A1,1,0,0,1-406-520,1,1,0,0,1-406.707-520.293Zm-19.676-6.783A1,1,0,0,1-427-528v-11a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v5a3,3,0,0,1-3,3h-5.586l-3.707,3.707A1,1,0,0,1-426-527,1,1,0,0,1-426.383-527.076ZM-425-539v8.586l2.292-2.293A1,1,0,0,1-422-533h6a1,1,0,0,0,1-1v-5a1,1,0,0,0-1-1h-8A1,1,0,0,0-425-539Z" transform="translate(427 542)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">More Enquiries</p>
									<p class="small color-light">Our high-converting landing pages, clear messaging, and powerful calls-to-action are crafted to turn visitors into patient enquiries.</p>
								</div>
							</div>
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
  										<path d="M-473-555v-2h-2a1,1,0,0,1-1-1,1,1,0,0,1,1-1h2v-2a1,1,0,0,1,1-1,1,1,0,0,1,1,1v2h2a1,1,0,0,1,1,1,1,1,0,0,1-1,1h-2v2a1,1,0,0,1-1,1A1,1,0,0,1-473-555Zm-13,1a3,3,0,0,1-3-3v-14a3,3,0,0,1,3-3h2v-1a1,1,0,0,1,1-1,1,1,0,0,1,1,1v1h6v-1a1,1,0,0,1,1-1,1,1,0,0,1,1,1v1h2a3,3,0,0,1,3,3v7a1,1,0,0,1-1,1,1,1,0,0,1-1-1v-2h-16v9a1,1,0,0,0,1,1h8a1,1,0,0,1,1,1,1,1,0,0,1-1,1Zm15-14v-3a1,1,0,0,0-1-1h-2v1a1,1,0,0,1-1,1,1,1,0,0,1-1-1v-1h-6v1a1,1,0,0,1-1,1,1,1,0,0,1-1-1v-1h-2a1,1,0,0,0-1,1v3Z" transform="translate(489 576)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">More Bookings</p>
									<p class="small color-light">With proven strategies in CRM, follow-ups, and user experience, we help you turn more enquiries into confirmed appointments.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!--How it Works -->

	<!--
	<section id="home-page">
		<section class="how-it-works">
			<div class="container">
				<div class="top">
					<p class="l-h-1 small color-primary">Process</p>
					<h3 class="font-bold color-secondary">How It Works</h3>
					<p>We continuously optimise for long-term growth and patient bookings.</p>
				</div>
				<div class="flex all">
					<div class="col-1-3 one">
						<div class="img">
							<img class="width-auto display-block mar-0-a" alt="audit" src="<?php bloginfo('template_directory'); ?>/images/home/audit.png" />
						</div>
						<div class="desc">
							<p class="l-h-1 large font-medium title">1. Audit</p>
							<p class="description small color-light">We start with a deep dive into your clinic’s digital presence — analysing your website, branding, SEO, and marketing strategy to uncover growth opportunities.</p>
						</div>
					</div>
					<div class="col-1-3 one">
						<div class="img">
							<img class="width-auto display-block mar-0-a" alt="launch" src="<?php bloginfo('template_directory'); ?>/images/home/launch.png" />
						</div>
						<div class="desc">
							<p class="l-h-1 large font-medium title">2. Launch</p>
							<p class="description small color-light">Our team designs and launches a tailored solution — from website improvements to targeted campaigns — built to attract and convert the right patients.</p>
						</div>
					</div>
					<div class="col-1-3 one">
						<div class="img">
							<img class="width-auto display-block mar-0-a" alt="growth" src="<?php bloginfo('template_directory'); ?>/images/home/growth.png" />
						</div>
						<div class="desc">
							<p class="l-h-1 large font-medium title">3. Growth</p>
							<p class="description small color-light">With everything live, we continually optimise your results — increasing visibility, boosting enquiries, and driving long-term patient growth.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	-->
	
	<!--Testimonials -->

	<!-- 
	<section id="home-page">
		<section class="testimonials">
			<div class="container">
				<div class="col-1-1 flex top-left row">
					<div class="col-2-5 left">
						<p class="l-h-1 small color-primary">Reviews</p>
						<h3 class="font-bold color-secondary">Our Testimonials</h3>
						<p>Hear directly from clinic owners who’ve seen real results — more visibility, more patients, and measurable growth.</p>
						<div class="flex btn">
							<a href='<?php echo get_site_url(); ?>/contact-us/' class="display-block">
								<button class="background-primary color-white hover-background-secondary">Contact Us</button>
							</a>
						</div>
					</div>
					<div class="col-3-5 right">
						<div class="reviews">
							<div class="pos-rel">
								<div id="testimonials-slider" class="flexslider">
									<?php get_all_client_testimonials(-1); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section> 
	-->

<?php get_footer();?>














