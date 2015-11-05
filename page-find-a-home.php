	<?php get_header(); ?>
	<div id="entry">
		<h1>Find a Home</h1>

		I will analyze the data you provide and get back to you with   a range of properties matching your search criteria. Please provide as much information as possible to help me locate the perfect home for you. All information you provide will be kept   strictly confidential.

		<fieldset><legend>Help Me Find My Next Home</legend>
			<form action="http://www.architecturalhomesny.com/cgi-bin/emailForm.cgi" method="post" enctype="multipart/form-data"> 
				<input name="Subject" type="hidden" value="Find a Home Request">
				<b>Property Type:</b>
				<label><select name="Property Type" id="Property Type">
					<option value="Single Family House">Single Family House</option>
					<option value="Condominium">Condominium</option>
					<option value="Multi-Unit Residential">Multi-Unit Residential</option>
					<option value="Lots and Land">Lots and Land</option>
					<option value="Mobile Home">Mobile Home</option>
				</select></label>
				<br/ ><br />
				<b>Time Frame:</b>
				<select name="Time Frame" class="style96" id="Time Frame">
					<option value="As soon as possible" selected="selected">As soon as possible</option>
					<option value="1 to 3 months">1 to 3 months</option>
					<option value="3 to 6 months">3 to 6 months</option>
					<option value="6 to 12 months">6 to 12 months</option>
					<option value="Next Year or later">Next year or later</option>
				</select>
				<br/ ><br />
				<b>Price Range:</b>
				<select name="Price Range Minimum" id="Price Range Minimum">
					<option value="$0.00" selected="selected">$0.00</option>
					<option value="$100,000">$100,000</option>
					<option value="$200,000">$200,000</option>
					<option value="$250,000">$250,000</option>
					<option value="$300,000">$300,000</option>
					<option value="$350,000">$350,000</option>
					<option value="$400,000">$400,000</option>
					<option value="$450,000">$450,000</option>
					<option value="$500,000">$500,000</option>
					<option value="$550,000">$550,000</option>
					<option value="$600,000">$600,000</option>
					<option value="$650,000">$650,000</option>
					<option value="$750,000">$700,000</option>
					<option value="$800,000">$800,000</option>
					<option value="$850,000">$850,000</option>
					<option value="$900,000">$900,000</option>
					<option value="$950,000">$950,000</option>
					<option value="$1 Million">$1 Million</option>
					<option value="$1.25 Million">$1.25 Million</option>
					<option value="$1.5 Million">$1.5 Million</option>
					<option value="$1.75 Million">$1.75 Million</option>
					<option value="$2 Million">$2 Million</option>
					<option value="$2.25 Million">$2.25 Million</option>
					<option value="$2.5 Million">$2.5 Million</option>
					<option value="$2.75 Million">$2.75 Million</option>
					<option value="$3 Million">$3 Million</option>
					<option value="$4 Million">$4 Million</option>
					<option value="$4.5 Million">$4.5 Million</option>
					<option value="$5 Million">$5 Million</option>
					<option value="$6 Million">$6 Million</option>
					<option value="$7 Million">$7 Million</option>
					<option value="$8 Million">$8 Million</option>
					<option value="$9 Million">$9 Million</option>
					<option value="$10 Million +">$10 Million +</option>
				</select>
				
				<b>to</b>
				
				<select name="Price Range Maximum" id="select2">
					<option value="$0.00" selected="selected">$0.00</option>
					<option value="$100,000">$100,000</option>
					<option value="$200,000">$200,000</option>
					<option value="$250,000">$250,000</option>
					<option value="$300,000">$300,000</option>
					<option value="$350,000">$350,000</option>
					<option value="$400,000">$400,000</option>
					<option value="$450,000">$450,000</option>
					<option value="$500,000">$500,000</option>
					<option value="$550,000">$550,000</option>
					<option value="$600,000">$600,000</option>
					<option value="$650,000">$650,000</option>
					<option value="$750,000">$700,000</option>
					<option value="$800,000">$800,000</option>
					<option value="$850,000">$850,000</option>
					<option value="$900,000">$900,000</option>
					<option value="$950,000">$950,000</option>
					<option value="$1 Million">$1 Million</option>
					<option value="$1.25 Million">$1.25 Million</option>
					<option value="$1.5 Million">$1.5 Million</option>
					<option value="$1.75 Million">$1.75 Million</option>
					<option value="$2 Million">$2 Million</option>
					<option value="$2.25 Million">$2.25 Million</option>
					<option value="$2.5 Million">$2.5 Million</option>
					<option value="$2.75 Million">$2.75 Million</option>
					<option value="$3 Million">$3 Million</option>
					<option value="$4 Million">$4 Million</option>
					<option value="$4.5 Million">$4.5 Million</option>
					<option value="$5 Million">$5 Million</option>
					<option value="$6 Million">$6 Million</option>
					<option value="$7 Million">$7 Million</option>
					<option value="$8 Million">$8 Million</option>
					<option value="$9 Million">$9 Million</option>
					<option value="$10 Million +">$10 Million +</option>
				</select>
				<br/ ><br />
				<b>Min Bedrooms:</b>
				<label><input name="Min. Bedrooms" type="radio" value="1" />
				1 </label>
				<label><input name="Min. Bedrooms" type="radio" value="2" />
				2 </label>
				<label><input name="Min. Bedrooms" type="radio" value="3" />
				3 </label>
				<label><input name="Min. Bedrooms" type="radio" value="4" />
				4 </label>
				<label><input name="Min. Bedrooms" type="radio" value="5 or More" />
				5 or more </label>
				<br/ ><br />
				<b>Min Bathrooms:</b>
				<label>
				<input name="Min. Bathrooms" type="radio" value="1" />
				1 </label>
				<label><input name="Min. Bathrooms" type="radio" value="2" />
				2 </label>
				<label><input name="Min. Bathrooms" type="radio" value="3" />
				3 </label>
				<label><input name="Min. Bathrooms" type="radio" value="4" />
				4 </label>
				<label><input name="Min. Bathrooms" type="radio" value="5 or More" />
				5 or more </label>
				<br/ ><br />
				<b>Min Sq. Feet Size:</b>
				<input name="Min Sq. Feet Size:" type="text" id="Min Sq. Feet Size:" size="15" />
				<br/ ><br />
				Additional Information About Your Desired Home:
				
				Please list additional information to help give a better understanding of the perfect home you are looking for. The more information you provide will help me to find a range of suitable properties.
				<br/ ><br />
				<label><textarea name="Additional Information About Your Desired Home:" cols="60" rows="2" wrap="virtual" id="Additional Information About Your Desired Home:"></textarea></label>
				<br/ ><br /><br />
				Please provide the following information so I can contact you with properties matching your description. 
				<br/ ><br />
				<b>*Name:</b> <label><input name="Name" type="text" id="Name" size="30" /></label>
				<br/ ><br />
				<b>*Phone Number:</b> <label><input name="Phone Number" type="text" id="Phone Number" size="30" /></label>
				<br/ ><br />
				<b>Additional Phone:</b> <label><input name="Additional Phone: " type="text" id="Additional Phone: " size="30" /></label>
				<br/ ><br />
				<b>*Email Address:</b> <label><input name="Email" type="text" id="Email Address" size="30" /></label>
				<br/ ><br />
				<b>Comments:</b>
				<br/ ><br />
				<textarea name="Comments" cols="60" rows="4" wrap="virtual" id="Comments"></textarea>
				<br/ ><br />
				<label><input type="submit" name="Submit" value="Send Request" /></label>
				<br/ ><br />
				*Your name, phone number, and email address are required.
				
				By submitting this form with your telephone number you are consenting for Todd Goddard to contact you even if your name is on the Federal &quot;Do-not-call&quot; List.
			
			</form>
		</fieldset>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>