	<!-- Hero image -->
	<div id="hero" class="w3-row">
		<div class="w3-col hero-wrap">
			<img src="[@URL]images/hero_images/hotel_front.jpg" style="width:100%; height: 100%;" alt="Chough's Nest Hotel in Lynton">
			<div class="hero-overlay"></div>
		</div>
	</div>
	
	<!-- Main content-->
	<div class="w3-container">
		[@booking_bar]
		<div id="page-title" class="w3-row">
			<div class="w3-col w3-center">
				<div class="fancy short page-title">
					<span>
					<h1>Contact Us</h1>
					</span>
				</div>
			</div>
		</div>

		<div class="content">
			<div class="w3-row grid-wrap">
				<div class="w3-col grid-col s12 m6 w3-margin-bottom">
					<h2>Send a direct message</h2>
					<div class="w3-padding-large w3-margin-bottom champagne-bg">
						<form name="form" class="contact-form" id="enquiries" action="[@URL]cgi-bin/cnhcontactform.pl" onsubmit="return enq_validate(this)" method="post">
							<input type="hidden" name="subject" value="Website Enquiry">
							<input type="hidden" name="recipient" value="enquiries@choughsnesthotel.co.uk">
							<input type="hidden" name="redirect" value="[@URL]thanks">
							<input type="hidden" name="required" value="realname, email, g-recaptcha-response">
							<input type="hidden" name="env_report" value="REMOTE_HOST,HTTP_USER_AGENT">
							<p>Please send us a message with your requirements and we will contact you shortly. 
							<span class="small">(* required fields)</span></p>
							
							<label>Title
								<select name="title" id="title">
									<option selected="selected"></option>
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Miss.">Miss.</option>
									<option value="Mr &amp; Mrs.">Mr. &amp; Mrs.</option>
									<option value="Ms.">Ms.</option>
									<option value="Dr.">Dr.</option>
									<option value="Prof.">Prof.</option>
								</select>
							</label>
							<label>Name*
								<input type="text" name="realname" id="name" required />
							</label>
							<label>Email*
								<input type="text" name="email" id="email" required />
							</label>
							<label>Phone
								<input type="text" name="PHONE" id="phone"/>
							</label>		
							<label class="marketing">How did you hear about us?
								<select name="MARKETING" id="marketing">
								<option selected="selected">Please select...</option>
								<option>Search Engine</option>
								<option>Online booking website</option>
								<option>TripAdvisor</option>
								<option>Friend or family</option>
								<option>Word of mouth</option>
								<option>Email newsletter</option>
								<option>Direct mailing</option>
								</select>
							</label>
							<label>Your message
								<textarea class="message" name="MESSAGE" id="message"></textarea>
							</label>	
							<label style="width: 100%; float: right; padding: 0; margin-bottom: 20px;" class="small">
								<input type="checkbox" name="SUBSCRIBE"  value="Yes" id="subscribe_check"/>
								<strong>Subscribe:</strong> If you would like to receive emails from Chough's Nest Hotel 
								about future news and special offers, please tick this box.
							</label>
							
							<div class="g-recaptcha" style="height: 90px; width:304px; margin: 0 auto; clear:both;" 
							data-sitekey="6LeDJx4UAAAAAFXkd4_yYtr2ES9dQxneYS88UurL"></div>					
							
							<div class="w3-center">
								<input class="button-primary" type="submit" value="Send Enquiry" />
							</div>
							
						</form>
					</div>
				</div>
				<div class="w3-col grid-col s12 m6 w3-margin-bottom">
					<h2>Our contact details</h2>
					
					<h3>Address</h3>
					<p>Chough's Nest Hotel<br>
					North Walk<br>
					Lynton<br>
					Devon<br>
					EX35 6HJ
					</p>

					<h3>Telephone</h3>
					<p><a href="tel:+441598753315">01597 753 315</a></p>
					
					<h3>Email</h3>
					<p style="margin-bottom: 32px;"><span id="obf2"><script>document.getElementById("obf2").innerHTML="<n uers=\"znvygb:erynk@pubhtufarfgubgry.pb.hx?fhowrpg=Jrofvgr radhvel\" >erynk@pubhtufarfgubgry.pb.hx</n>".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});document.body.appendChild(eo);</script>
					<noscript><span style="unicode-bidi:bidi-override;direction:rtl;">ku.oc.letohtsenshguohc@xaler</span></noscript></span></p>	
					<hr>

					<h2>Directions &amp; Parking</h2>
					<p>For information on how to find us and details of our parking facilities at the hotel, please see our How To Get Here page.</p>

					<p style="margin-bottom: 32px;"><a href="[@URL]how-to-get-here" class="button button-iris">How to get here</a></p>

					<h2>Access Statement</h2>
					<p>For information on accessibility, please read our Access Statement.</p>

					<p><a href="[@URL]accessibility" class="button button-iris">View Access Statement</a></p>
				</div>
				
			</div>
		</div>
	</div>

	<div id="map_canvas" class="w3-row" style="height: 550px;"></div>
