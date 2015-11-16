<?php get_header(); ?>
	<div class="page-content">
		<div class="title-wrapper">
			<h2 class="title-properties">Properties</h2>
		</div>
		<h1>Home Evaluation Request</h1>

		<form action="http://www.architecturalhomesny.com/cgi-bin/emailForm.cgi" method="post" enctype="multipart/form-data">               

		To receive a free market analysis estimating your home's value, just fill in the   form below. I will analyze the data you provide and get back to you with   comparable sale information for your neighborhood and a range of approximate   values for your home. If you need a more precise valuation estimate, I will   arrange to tour the property with you. All information you provide will be kept   strictly confidential.

		<fieldset><legend>Basic Information</legend>
			<input name="Subject" type="hidden" value="Home Evaluation Request">	
			<b>Address of Property:</b> <label><input name="Address of Property" type="text" id="Address of Property" size="30" /></label>
			<br /><br />
			<b>City &amp; State:</b> <label><input name="City &amp; State" type="text" id="City &amp; State" size="30" /></label>
			<br /><br />
			<b>Property Type:</b>
			<label>
			<select name="Property Type" id="Property Type">
			<option value="Single Family House">Single Family House</option>
			<option value="Condominium">Condominium</option>
			<option value="Multi-Unit Residential">Multi-Unit Residential</option>
			<option value="Lots and Land">Lots and Land</option>
			<option value="Mobile Home">Mobile Home</option>
			</select>
			</label>
			<br /><br />
			<b>Condition of Property:</b>
			<label>Excellent<input name="Condition of Property" type="radio" value="Excellent" /></label>
			<label>Good<input name="Condition of Property" type="radio" value="Good" /></label>
			<label>Fair<input name="Condition of Property" type="radio" value="Fair" /></label>
			<label>Needs Work<input name="Condition of Property" type="radio" value="Needs Work" /></label>	
			<label>Poor<input name="Condition of Property" type="radio" value="Poor" /></label>
			<br /><br />
			<b>Bedrooms:</b>
			<label>1<input name="Bedrooms" type="radio" value="1" /></label>
			<label>2<input name="Bedrooms" type="radio" value="2" /></label>                        
			<label>3<input name="Bedrooms" type="radio" value="3" /></label>                        
			<label>4<input name="Bedrooms" type="radio" value="4" /></label>                        
			<label>5 or more<input name="Bedrooms" type="radio" value="5 or More" /></label>                        
			<br /><br />
			<b>Bathrooms:</b>
			<label>1<input name="Bathrooms" type="radio" value="1" /></label>
			<label>2<input name="Bathrooms" type="radio" value="2" /></label>                        
			<label>3<input name="Bathrooms" type="radio" value="3" /></label>                        
			<label>4<input name="Bathrooms" type="radio" value="4" /></label>                        
			<label>5 or more<input name="Bathrooms" type="radio" value="5 or More" /></label>                        
		</fieldset>
		<br /><br />
		<fieldset><legend>Additional Rooms/Features</legend>
			Please list additional rooms and describe   any special features and recent upgrades. For example: new roof, new carpet,   custom kitchen cabinets, property near park, etc.
			<br />
			<label><textarea name="Additional Rooms/Features" cols="60" rows="2" wrap="virtual" id="Additional Rooms/Features"></textarea></label>
			<br /><br />
			<b>Approx. Size:</b> <label><input name="Approx. Size" type="text" id="Approx. Size" size="15" /></label>
			<br /><br />
			<b>Approx. Age of Kitchen:</b> <label><input name="Approx. Age of Kitchen" type="text" id="Approx. Age of Kitchen" size="15" /></label>
			<br /><br />
			<b>Approx. Age of Bathrooms:</b> <label><input name="Approx. Age of Bathrooms" type="text" id="Approx. Age of Bathrooms" size="15" /></label>
			<br /><br />
			Please provide the following information so I can contact you with your home   valuation report. 
			<br /><br />
			<b>*Name:</b> <label><input name="Name" type="text" id="Name" size="30" /></label>
			<br /><br />
			<b>*Phone Number(s):</b> <label><input name="Phone Number" type="text" id="Phone Number" size="30" /></label>
			<br /><br />
			<b>Additional Phone:</b> <input name="Additional Phone: " type="text" id="Additional Phone: " size="30" />
			<br /><br />
			<b>*Email Address:</b> <label><input name="Email Address" type="text" id="Email Address" size="30" /></label>
			<br /><br />
			<b>Comments:</b>
			<br /><br />
			<textarea name="Comments" cols="60" rows="4" wrap="virtual" id="Comments"></textarea>
			<br /><br />
			<label><input type="submit" name="Submit" value="Send Request" /></label>
		</fieldset>

		</form>

		* Your name, phone number, and email address are   required. 
		By submitting this form with your telephone number you are consenting for Todd Goddard to contact you even if your name is on the Federal &quot;Do-not-call List.&quot;
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>