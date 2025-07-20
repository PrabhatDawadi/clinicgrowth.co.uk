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
		<section class="hero background-faded">
			<section class="container">
				<div class="col-1-1 col flex center-center">
					<div class="col-1-1 flex center-left">
						<div class="col-1-2">
							<h1 class="font-bold t-a-l l-h-1-1 mar-0-a title color-secondary">We help private clinics <br/>attract 10–30 new <br/><span class="color-primary">high-value patients</span> <br/>every month.</h1>
							<h2 class="font-regular subtitle l-h-1-2">Specialist marketing for dentists & aesthetic clinics: Paid Ads, Social Media Content & CRM Systems — All Done For You</h2>
							<div class="flex">
								<a
									class="display-block"
									href='<?php echo $settings['website']['FREE_AUDIT_URL']; ?>' 
									target="_blank"
									rel='noreferrer'
								>
									<button class="background-tertiary color-white hover-background-tertiary hover-color-white">Book Your Free Growth Audit</button>
								</a>
							</div>
						</div>
						<div class="col-1-2 right">
							<div class="of-hid pos-rel">
								<svg xmlns="http://www.w3.org/2000/svg" width="538.999" height="539" viewBox="0 0 538.999 539" class="enclose col-1-1 height-auto display-block pos-rel" style="z-index: 4;">
  									<path d="M539.5,539.5H.5V.5h539v539ZM222.115,18.515a178.421,178.421,0,0,0-29.875,2.236,115.984,115.984,0,0,0-13.91,3.213,92.448,92.448,0,0,0-13.034,4.98,91.318,91.318,0,0,0-12.71,7.365,112.1,112.1,0,0,0-11.721,9.358,168.163,168.163,0,0,0-21.04,23.552c-13.147,17.471-24.975,38.312-36.414,58.466l-.715,1.259-.482.854c-11.4,20.218-23.187,41.121-32.805,62.144a315.057,315.057,0,0,0-12.73,31.994A221.831,221.831,0,0,0,28.3,257.145a202.226,202.226,0,0,0-2.733,34.745,194.163,194.163,0,0,0,3.37,34.717,171.348,171.348,0,0,0,9.727,33.011,141.814,141.814,0,0,0,26.98,42.71c3.693,4.042,7.775,8.07,12.132,11.973A237.972,237.972,0,0,0,105.584,435.5c8.931,5.905,19.077,11.954,31.017,18.494,10.47,5.734,20.866,11.072,32.4,16.956,18.534,9.5,39.541,20.273,59.6,28.016a210.035,210.035,0,0,0,29.1,9.094,144.314,144.314,0,0,0,14.357,2.535,117.406,117.406,0,0,0,14.22.9h.007c2.828,0,5.657-.114,8.409-.34a106.82,106.82,0,0,0,13.982-2.117,129.81,129.81,0,0,0,13.844-3.871,186.938,186.938,0,0,0,27.307-11.972c18.048-9.517,35.985-21.776,53.332-33.631l.035-.024c2.493-1.7,5.071-3.465,7.6-5.185,3.219-2.189,6.475-4.389,9.625-6.516C454.552,424.774,486.79,403,505.9,372.645a137.824,137.824,0,0,0,12.783-26.639,184.6,184.6,0,0,0,7.73-29.423,256.125,256.125,0,0,0,3.548-31.167c.552-10,.632-20.727.239-31.87-.357-10.839-1.141-21.49-2.33-31.658-1.245-10.651-2.972-21.091-5.133-31.03a279.1,279.1,0,0,0-8.3-30.111,248.08,248.08,0,0,0-11.836-28.9,225.669,225.669,0,0,0-15.658-27.158,202.947,202.947,0,0,0-19.3-24.43A171.414,171.414,0,0,0,445.01,59.747a141.546,141.546,0,0,0-25.614-15.4c-29.65-13.716-64.259-16.169-100.9-18.766-7.892-.559-16.052-1.138-24.2-1.835-6.143-.527-12.436-1.134-18.521-1.722C257.923,20.3,239.464,18.515,222.115,18.515Z" transform="translate(-0.5 -0.5)" fill="#b72962"/>
								</svg>
								<div class="pos-abs inset-0">
									<video
									class=""
										playsInline={true}
										controls={false}
										autoPlay={true}
										muted={true}
										loop={true}>
										<source
											src='<?php bloginfo('template_directory'); ?>/images/home/banner.mp4'
											type='video/mp4'
										/>
									</video>
								</div>
								<div class="play flex center-center pos-abs b-r-100 cursor-pointer">
									<svg 
										xmlns="http://www.w3.org/2000/svg" width="21.059" height="23.399" viewBox="0 0 21.059 23.399"
										class="col-1-1 height-auto display-block"
										style="height: 24px; margin-left: 4px;">
  										<path 
											d="M2,23.7V.3L23.059,12Zm2-20V20.3L18.941,12Z" 
											transform="translate(-2 -0.3)"
  											fill="white"/>
									</svg>
								</div>
							</div>
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
				<div class="col-1-1 flex center-left">
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
					<div class="col-1-2">
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
						<div class="img">
							<div class="cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/private-dentist.jpg)">
								<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524.001" viewBox="0 0 524 524.001" class="col-1-1 height-auto display-block">
									<g transform="translate(-6362 -2725)">
										<path d="M524,524H0V0H524V524ZM278.379,2c-4.13,0-8.329.094-12.479.28a268.471,268.471,0,0,0-35.416,3.815,221.788,221.788,0,0,0-33.674,8.659c-22.661,7.846-41.859,19.088-57.061,33.413a150.308,150.308,0,0,0-15.7,17.358,224.043,224.043,0,0,0-13.624,19.711c-8.557,13.777-16.072,28.369-24.027,43.817-6.213,12.066-12.637,24.538-19.6,36.573-6.479,11.2-13.564,22.244-20.416,32.924-9.705,15.128-18.872,29.417-26.521,44.185a195.126,195.126,0,0,0-9.992,22.332,128.137,128.137,0,0,0-6.244,22.891c-3.362,19.983-1.5,42.01,5.537,65.468a228.978,228.978,0,0,0,12.684,32.539,291.277,291.277,0,0,0,17.277,31.026,273.805,273.805,0,0,0,43.933,53.374c17.073,15.855,35.26,27.921,54.054,35.862,14.754,6.234,31.167,10.466,50.177,12.938,15.071,1.96,31.488,2.834,53.229,2.834h.007c8.276,0,16.631-.124,23.813-.24,23.318-.431,44.33-.968,65.361-3.185a316.046,316.046,0,0,0,32.071-4.938,233.92,233.92,0,0,0,31.457-8.831,216.781,216.781,0,0,0,30.537-13.639,208.125,208.125,0,0,0,28.345-18.492,187.07,187.07,0,0,0,24.77-23.061,163.577,163.577,0,0,0,19.81-27.344,169.2,169.2,0,0,0,13.721-31.116,219.121,219.121,0,0,0,8.111-33.933c3.473-21.773,4.353-45.862,2.616-71.6-.8-11.858-2.154-23.8-4.023-35.485-1.857-11.608-4.274-23.3-7.186-34.742-2.891-11.364-6.352-22.81-10.285-34.019-3.9-11.127-8.386-22.336-13.319-33.315C475.7,124.3,463.645,103.18,450.5,85.285A235.942,235.942,0,0,0,427.49,58.28a184.908,184.908,0,0,0-26.737-22.295c-16.834-11.4-36.315-20.1-57.9-25.857A250.288,250.288,0,0,0,278.379,2Z" transform="translate(6362 2725)" fill="#1b00e6"/>
									</g>
								</svg>
							</div>
						</div>
						<p class="large font-medium title t-a-c">Private Dentists</a></p>
						<p class="small description t-a-c color-light">Our dental marketing experts specialise in marketing dentistry and helping dentists grow their practices. We create tailored digital marketing strategies designed to increase patient bookings, boost your online visibility, and deliver real results.</p>
					</div>
					<div class="col-1-3 one">
						<div class="img">
							<div class="cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/aesthetic-clinic.jpg)">
								<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524.001" viewBox="0 0 524 524.001" class="col-1-1 height-auto display-block">
									<g transform="translate(-7006 -2725)">
										<path d="M524,524H0V0H524V524ZM214.856,2c-18.1,0-33.308,1.146-46.5,3.5a145.865,145.865,0,0,0-21.1,5.325,105.478,105.478,0,0,0-19.046,8.549A100.16,100.16,0,0,0,115.22,28.4a120.706,120.706,0,0,0-11.693,10.976A173.189,173.189,0,0,0,83.433,65.917C71.252,85.3,61.3,107.46,52.151,128.5c-8.661,19.759-17.712,41.009-25.227,62.522-3.83,10.963-6.989,21.183-9.656,31.242a326.766,326.766,0,0,0-6.861,32.019A273.29,273.29,0,0,0,7.143,287.4,210.194,210.194,0,0,0,8.47,320.353c2.87,23.2,9.928,43.091,20.977,59.121a122.792,122.792,0,0,0,17.228,19.787,197.938,197.938,0,0,0,21.49,17.347c15.481,10.96,32.708,20.752,50.948,31.118,7.34,4.172,14.927,8.484,22.386,12.877,7.232,4.259,14.529,8.706,21.587,13.007l.009.005c17.613,10.734,35.825,21.834,53.874,30.484a215.039,215.039,0,0,0,27.269,11.037,140.086,140.086,0,0,0,27.831,6.091A128.1,128.1,0,0,0,286.2,522c19.266,0,39.947-4.173,61.472-12.4a286.4,286.4,0,0,0,57.892-30.757c20.863-14.157,38.863-29.7,53.5-46.2,15.637-17.621,27.275-36.173,34.591-55.141a165.56,165.56,0,0,0,6.857-22.547,235.569,235.569,0,0,0,4.115-23.424c2.035-15.886,2.843-32.005,3.7-49.071.555-11.074,1.129-22.522,2.07-33.995.733-8.934,1.707-18.094,2.649-26.952v-.007c1.951-18.342,3.968-37.308,3.95-55.3a181.891,181.891,0,0,0-1.78-26.4,118.934,118.934,0,0,0-6.285-24.91,116.088,116.088,0,0,0-15.458-28.133,151.719,151.719,0,0,0-22.834-24.446,192.387,192.387,0,0,0-28.327-20.213,220.812,220.812,0,0,0-31.936-15.435,251.754,251.754,0,0,0-33.854-10.335c-10.886-2.548-22.437-4.616-35.315-6.324C317.231,6.831,292.956,5.455,267.256,4,249.961,3.016,232.077,2,214.856,2Z" transform="translate(7006 2725)" fill="#1b00e6"/>
									</g>
								</svg>
							</div>
						</div>
						<p class="large font-medium title t-a-c">Aesthetic Clinics</a></p>
						<p class="small description t-a-c color-light">At our agency, our digital marketing team are experts in the Aesthetics market and work closely with you to create the best strategy to maximise the impact your digital marketing has on your Aesthetic clinic.</p>
					</div>
					<div class="col-1-3 one">
						<div class="img">
							<div class="cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/medical-spas.jpg)">
								<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524" viewBox="0 0 524 524" class="col-1-1 height-auto display-block">
									<g transform="translate(-7652 -2725)">
										<path d="M524,524H0V0H524V524ZM177.336,2a124.385,124.385,0,0,0-24.2,2.227,84.488,84.488,0,0,0-35.214,15.5A114.2,114.2,0,0,0,105.973,30,179.727,179.727,0,0,0,84.39,56.146c-6.155,8.877-12.468,19.182-19.3,31.5-6.209,11.2-12.32,23.115-18,34.326-5.695,11.171-11.723,23.131-17.22,34.907-6.034,12.927-10.844,24.375-14.7,35a236.961,236.961,0,0,0-10,34.938,169.7,169.7,0,0,0-2.55,17.4,134.9,134.9,0,0,0,1.119,34.554A168.194,168.194,0,0,0,7.4,295.89a234.969,234.969,0,0,0,12.145,33.864c4.435,10.093,9.865,20.989,16.6,33.31,5.9,10.786,11.958,21.183,18.7,32.684,6.365,10.855,12.61,21.449,19.016,31.709,7.125,11.412,13.58,20.988,19.734,29.277a221.708,221.708,0,0,0,21.387,25.11,148.772,148.772,0,0,0,11.6,10.451,118.853,118.853,0,0,0,12.368,8.759c13.731,8.351,29.82,14,49.186,17.261S227.752,522,243.213,522c4.882,0,10.073-.046,16.832-.148,9.706-.147,21.129-.379,32.261-.976,11.778-.632,22.1-1.606,31.551-2.978a207.319,207.319,0,0,0,30.2-6.528c4.978-1.5,9.822-3.207,14.4-5.08a140.172,140.172,0,0,0,13.822-6.549,156.425,156.425,0,0,0,25.858-17.826A226.635,226.635,0,0,0,431.8,458.608a343.259,343.259,0,0,0,21.843-27.616c6.622-9.236,13.3-19.3,20.415-30.756,7.345-11.8,13.538-22.5,18.933-32.717A322.29,322.29,0,0,0,508.7,333.49a210.1,210.1,0,0,0,10.339-34.728,156.574,156.574,0,0,0,2.485-17.433,133.28,133.28,0,0,0,.337-17.377,141.8,141.8,0,0,0-6.113-34.192,197.4,197.4,0,0,0-13.549-32.951,278.211,278.211,0,0,0-18.758-30.96c-6.438-9.277-13.752-18.771-21.74-28.22-7.379-8.784-15.047-17.191-22.792-24.989-7.621-7.673-15.54-14.983-23.537-21.726-7.86-6.627-16.027-12.9-24.274-18.647-8.094-5.64-16.506-10.94-25-15.753a350.562,350.562,0,0,0-52.808-23.877c-16.464-5.965-35.024-11.6-58.412-17.719-10.682-2.819-24.731-6.383-38.66-8.942A215.348,215.348,0,0,0,177.336,2Z" transform="translate(7652 2725)" fill="#1b00e6"/>
									</g>
								</svg>
							</div>
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
				<div class="col-1-1 flex top-left">
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
							<button class="background-tertiary color-white hover-background-secondary">Book Free Audit</button>
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

	<section id="home-page">
		<section class="how-it-works">
			<div class="container">
				<div class="top">
					<p class="l-h-1 small color-primary">Process</p>
					<h3 class="font-bold color-secondary">How It Works</h3>
					<p>We continuously optimise for long-term growth and patient bookings.</p>
				</div>
				<div class="all flex">
					<div class="col-1-3 one">						
						<img class="width-auto display-block mar-0-a" alt="audit" src="<?php bloginfo('template_directory'); ?>/images/home/audit.png" />
						<p class="l-h-1 large font-medium title t-a-c">1. Audit</p>
						<p class="description small t-a-c color-light">We start with a deep dive into your clinic’s digital presence — analysing your website, branding, SEO, and marketing strategy to uncover growth opportunities.</p>
					</div>
					<div class="col-1-3 one">						
						<img class="width-auto display-block mar-0-a" alt="launch" src="<?php bloginfo('template_directory'); ?>/images/home/launch.png" />
						<p class="l-h-1 large font-medium title t-a-c">2. Launch</p>
						<p class="description small t-a-c color-light">Our team designs and launches a tailored solution — from website improvements to targeted campaigns — built to attract and convert the right patients.</p>
					</div>
					<div class="col-1-3 one">						
						<img class="width-auto display-block mar-0-a" alt="growth" src="<?php bloginfo('template_directory'); ?>/images/home/growth.png" />
						<p class="l-h-1 large font-medium title t-a-c">3. Growth</p>
						<p class="description small t-a-c color-light">With everything live, we continually optimise your results — increasing visibility, boosting enquiries, and driving long-term patient growth.</p>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!--Testimonials -->

	<section id="home-page">
		<section class="testimonials">
			<div class="container">
				<div class="col-1-1 flex top-left">
					<div class="col-2-5 left">
						<p class="l-h-1 small color-primary">Reviews</p>
						<h3 class="font-bold color-secondary">Our Testimonials</h3>
						<p>Hear directly from clinic owners who’ve seen real results — more visibility, more patients, and measurable growth.</p>
						<div class="flex btn">
							<a href='<?php echo get_site_url(); ?>/contact-us/' class="display-block">
								<button class="background-tertiary color-white hover-background-secondary">Contact Us</button>
							</a>
						</div>
					</div>
					<div class="col-3-5 right">
						<div class="reviews">
							<div class="one border-color-faded">
								<p class="l-h-1 color-primary" style="font-size: 12px;">June 2025</p>
								<p class="small quote color-light">Partnering with this team was one of the best decisions we made for our clinic. Within just a few months, our online visibility improved significantly, and we experienced a 40% increase in patient enquiries. Their strategic approach, attention to detail, and genuine understanding of the aesthetics industry made all the difference. We finally feel like our marketing is working for us.</p>
								<div class="flex center-left" style="gap: 12px;">
									<div class="i flex center-center b-r-100 background-faded">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" class="width-auto display-block">
  											<path d="M-461-466v-2a3,3,0,0,0-3-3h-6a2.977,2.977,0,0,0-2.121.878A2.981,2.981,0,0,0-473-468v2a1,1,0,0,1-1,1,1,1,0,0,1-1-1v-2a4.967,4.967,0,0,1,1.464-3.535A4.968,4.968,0,0,1-470-473h6a5.006,5.006,0,0,1,5,5v2a1,1,0,0,1-1,1A1,1,0,0,1-461-466Zm-11-14a5.005,5.005,0,0,1,5-5,5.006,5.006,0,0,1,5,5,5.006,5.006,0,0,1-5,5A5.005,5.005,0,0,1-472-480Zm2,0a3,3,0,0,0,3,3,3,3,0,0,0,3-3,3,3,0,0,0-3-3A3,3,0,0,0-470-480Z" transform="translate(475 485)"/>
										</svg>
									</div>
									<div>
										<p class="l-h-1-2 tiny">Dr. Sarah Thompson</p>
										<p class="l-h-1-2 _t">Aesthetic Clinic Owner</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer();?>














