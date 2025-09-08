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
						<h1 class="font-bold t-a-c l-h-1-1 mar-0-a title color-white"> Guaranteed <span class="color-primary">Results</span>, <br/>Real <span class="color-primary">Clients</span>, Real <span class="color-primary">ROI</span><br/>- or Your Money Back</h1>
						<h2 class="font-regular t-a-c color-white subtitle l-h-1-2">Specialist marketing for Dentists & Aesthetic Clinics: Paid Ads, Social Media Content & CRM Systems — All Done For You</h2>
						<div class="flex center-center btn">
							<button class="open-calendar-booking background-primary color-white hover-background-secondary hover-color-white">Book Your Free Videography Shoot</button>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- Info Stat -->

	<section id="home-page">
		<section class="info">
			<div class="container">
				<div class="all flex center-left mar-0-a">
					<div class="one col-1-3 t-a-c">
						<div class="i">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="19.499" viewBox="0 0 17.5 19.499" class="width-auto mar-0-a display-block">
								<path d="M13.25,20h-8A4.755,4.755,0,0,1,.5,15.25v-1A8.764,8.764,0,0,1,5.744,6.233l.344-.15-.271-.259A4.211,4.211,0,0,1,4.5,2.75,2.253,2.253,0,0,1,6.75.5h5A2.253,2.253,0,0,1,14,2.75a4.214,4.214,0,0,1-1.317,3.073l-.271.259.343.15A8.76,8.76,0,0,1,18,14.25v1A4.756,4.756,0,0,1,13.25,20Zm-4-13A7.258,7.258,0,0,0,2,14.25v1A3.254,3.254,0,0,0,5.25,18.5h8A3.254,3.254,0,0,0,16.5,15.25v-1A7.258,7.258,0,0,0,9.25,7ZM6.75,2A.751.751,0,0,0,6,2.75,2.753,2.753,0,0,0,8.75,5.5h1A2.753,2.753,0,0,0,12.5,2.75.751.751,0,0,0,11.75,2ZM9.561,16.473H9.215v-.658l-.228-.021a1.844,1.844,0,0,1-.706-.2,2.258,2.258,0,0,1-.653-.536l.391-.39a1.957,1.957,0,0,0,.45.419,1.252,1.252,0,0,0,.445.183l.3.061V13.446l-.165-.059c-.126-.046-.227-.085-.319-.122a2.153,2.153,0,0,1-.457-.257,1.1,1.1,0,0,1-.316-.382,1.316,1.316,0,0,1-.12-.6,1.222,1.222,0,0,1,.2-.714,1.325,1.325,0,0,1,.563-.452,1.79,1.79,0,0,1,.4-.124l.205-.038v-.668h.346v.663l.2.039a1.69,1.69,0,0,1,.453.154,1.9,1.9,0,0,1,.533.4l-.4.4a2.025,2.025,0,0,0-.4-.323l-.391-.235v1.805l.162.061c.1.036.191.073.279.11a1.994,1.994,0,0,1,.463.271,1.164,1.164,0,0,1,.326.407,1.423,1.423,0,0,1,.124.636,1.236,1.236,0,0,1-.449,1.012,1.627,1.627,0,0,1-.707.327l-.2.042v.679Zm0-2.991v1.887l.382-.239c.021-.013.04-.025.058-.038a.746.746,0,0,0,.309-.629.776.776,0,0,0-.165-.506,1.058,1.058,0,0,0-.184-.175Zm-.346-2.334-.34.131a.826.826,0,0,0-.192.1.676.676,0,0,0-.276.582.653.653,0,0,0,.171.468,1.135,1.135,0,0,0,.262.2l.375.217Z" transform="translate(-0.5 -0.5)"/>
							</svg>
						</div>
						<div class="d">
							<p class="small l-h-1 font-light color-white t-t-u">Over</p>
							<h4 class="color-white font-bold t-t-u">$100M</h4>
							<p class="small l-h-1 t-t-u font-bold" style="color: #D8B96F;">In ad Spend</p>
						</div>
					</div>
					<div class="one col-1-3 t-a-c">
						<div class="i">
							<svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="19.499" viewBox="0 0 21.5 19.499" class="width-auto mar-0-a display-block">
								<path d="M15.25,20h-8a.75.75,0,1,1,0-1.5H10.5V16H3.251A2.754,2.754,0,0,1,.5,13.25v-10A2.753,2.753,0,0,1,3.251.5h16A2.753,2.753,0,0,1,22,3.25v10A2.753,2.753,0,0,1,19.251,16H12v2.5h3.25a.75.75,0,1,1,0,1.5Zm-12-18A1.252,1.252,0,0,0,2,3.25v10a1.252,1.252,0,0,0,1.25,1.25h16a1.252,1.252,0,0,0,1.25-1.25v-10A1.252,1.252,0,0,0,19.251,2ZM10,12a1.5,1.5,0,0,1-1.5-1.5V6a1.5,1.5,0,0,1,2.283-1.278l3.665,2.248a1.5,1.5,0,0,1,0,2.556l-3.663,2.251A1.5,1.5,0,0,1,10,12Zm0-6v4.5L13.664,8.25Z" transform="translate(-0.5 -0.5)"/>
							</svg>
						</div>
						<div class="d">
							<p class="small l-h-1 font-light color-white t-t-u">Over</p>
							<h4 class="color-white font-bold t-t-u">10 Million</h4>
							<p class="small l-h-1 t-t-u small font-bold" style="color: #D8B96F;">Organic Views</p>
						</div>
					</div>
					<div class="one col-1-3 t-a-c">
						<div class="i">
							<svg xmlns="http://www.w3.org/2000/svg" width="19.502" height="19.5" viewBox="0 0 19.502 19.5" class="width-auto mar-0-a display-block">
								<path d="M15.252,20a.746.746,0,0,1-.531-.22l-2-2a.75.75,0,1,1,1.06-1.06l1.471,1.469,3.469-3.469a.75.75,0,1,1,1.061,1.06l-4,4A.741.741,0,0,1,15.252,20Zm-5.465-.012h-.04a9.75,9.75,0,1,1,10.192-8.631.751.751,0,0,1-.744.665c-.026,0-.055,0-.086,0a.751.751,0,0,1-.66-.831A8.252,8.252,0,0,0,10.26,2a8.471,8.471,0,0,0-.88.047A8.25,8.25,0,0,0,9.826,18.49a.75.75,0,0,1-.039,1.5ZM13.252,14a.745.745,0,0,1-.53-.22l-3-3a.754.754,0,0,1-.22-.529v-5a.75.75,0,1,1,1.5,0V9.94l2.78,2.78A.75.75,0,0,1,13.252,14Z" transform="translate(-0.5 -0.5)"/>
							</svg>
						</div>
						<div class="d">
							<p class="l-h-1 font-light color-white t-t-u">25</p>
							<h4 class="color-white font-bold t-t-u">Years</h4>
							<p class="small l-h-1 t-t-u small font-bold" style="color: #D8B96F;">Industry Experience</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!-- Clients -->

	<!-- <section id="home-page">
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
	</section> -->

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
				<?php get_all_who_we_help(3); ?>
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
							<button class="open-calendar-booking background-primary color-white hover-background-secondary">Free Videography Shoot</button>
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
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">Stand-Out Content — Free Shoot Included</p>
									<p class="small color-light">We kick things off with a complimentary videography shoot so your ads and socials instantly grab attention.</p>
								</div>
							</div>
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="21.683" height="22" viewBox="0 0 21.683 22">
  										<path d="M18.3,23H4a3,3,0,0,1-3-3V13a3,3,0,0,1,3-3H6.35l3.736-8.406A1,1,0,0,1,11,1a4,4,0,0,1,4,4V8h4.656a3,3,0,0,1,2.993,3.45l-1.38,9A3.013,3.013,0,0,1,18.3,23ZM8,21H18.3a1,1,0,0,0,.989-.85l1.38-9a1,1,0,0,0-1-1.149H14a1,1,0,0,1-1-1V5a2,2,0,0,0-1.392-1.906L8,11.212ZM4,12a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1H6V12Z" transform="translate(-1 -1)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">Ads That Work</p>
									<p class="small color-light">Our targeted Meta & Google campaigns get your clinic seen by the right people — delivering enquiries from day one.</p>
								</div>
							</div>
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  										<path d="M-624-464a2.994,2.994,0,0,1,.113-.818l-1.554-1.11A3.983,3.983,0,0,1-628-465a3.981,3.981,0,0,1-2.559-.928l-1.554,1.11A2.991,2.991,0,0,1-632-464a3,3,0,0,1-3,3,3,3,0,0,1-3-3,3,3,0,0,1,3-3,2.985,2.985,0,0,1,1.73.55l1.542-1.1A3.978,3.978,0,0,1-632-469a4.008,4.008,0,0,1,3-3.874v-2.3A3.005,3.005,0,0,1-631-478v0a3,3,0,0,1,3-3,2.977,2.977,0,0,1,2.121.878A2.979,2.979,0,0,1-625-478a3.005,3.005,0,0,1-2,2.828v2.3a3.978,3.978,0,0,1,1.829,1.046A3.978,3.978,0,0,1-624-469a3.978,3.978,0,0,1-.272,1.449l1.542,1.1A2.983,2.983,0,0,1-621-467a3,3,0,0,1,3,3,3,3,0,0,1-3,3A3,3,0,0,1-624-464Zm2,0a1,1,0,0,0,1,1,1,1,0,0,0,1-1,1,1,0,0,0-1-1A1,1,0,0,0-622-464Zm-14,0a1,1,0,0,0,1,1,1,1,0,0,0,1-1,1,1,0,0,0-1-1A1,1,0,0,0-636-464Zm6-5a2,2,0,0,0,2,2,2,2,0,0,0,2-2,1.986,1.986,0,0,0-.585-1.414A1.987,1.987,0,0,0-628-471,2,2,0,0,0-630-469Zm1-9a1,1,0,0,0,1,1,1,1,0,0,0,1-1,.993.993,0,0,0-.292-.707A.993.993,0,0,0-628-479,1,1,0,0,0-629-478Z" transform="translate(638 481)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">Social That Sells</p>
									<p class="small color-light">Scroll-stopping organic content builds trust, authority, and a loyal following that keeps patients coming back.</p>
								</div>
							</div>
							<div class="one flex center-left">
								<div class="icon flex center-center b-r-100 background-faded">
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18">
  										<path d="M12,21a1,1,0,0,1-.514-.143l-5-3A1,1,0,0,1,6,17V4a1,1,0,0,1,1.515-.857L12,5.834l4.486-2.691A1,1,0,0,1,18,4V17a1,1,0,0,1-.486.857l-5,3A1,1,0,0,1,12,21ZM8,16.434l4,2.4,4-2.4V5.766L12.514,7.857a1,1,0,0,1-1.029,0L8,5.766Z" transform="translate(-6 -3)"/>
									</svg>
								</div>
								<div class="flex-1 desc">
									<p class="l-h-1 large font-medium" style="margin-bottom: 8px;">From Leads to Loyal Patients</p>
									<p class="small color-light">With smart CRM systems and proven follow-up strategies, we turn more enquiries into confirmed bookings.</p>
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














