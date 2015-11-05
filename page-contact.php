	<?php get_header(); ?>
	<div id="entry">
		<form action="http://www.architecturalhomesny.com/cgi-bin/emailForm.cgi" method="post" enctype="multipart/form-data">
			<input name="Subject" type="hidden" value="Contact Request">
			<fieldset class="contact-form"><legend>Contact Todd</legend>	
			<input name="Subject" type="hidden" value="Contact Request">	
			<label><b>*Name:</b> <input name="Name" type="text" id="Name" size="30" maxlength="60" /></label>
			<br />
			<label><b>*Email:</b> <input name="Email" type="text" id="Email" size="30" maxlength="60" /></label>
			<br />
			<label><b>Phone:</b> <input name="Phone" type="text" id="Phone" size="30" maxlength="60" /></label>
			<br />
			<label><b>Comments:</b><br /><textarea name="Comments" cols="25" rows="6" wrap="virtual" id="Comments"></textarea></label>
			<br />
			<label><input type="submit" name="Submit" value="Send Request" /></label>
			</fieldset>
		</form>

		<br />tgoddard@houlihanlawrence.com<br />
		<a target="_blank" href="http://www.houlihanlawrence.com">Houlihan Lawrence Real Estate</a>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>