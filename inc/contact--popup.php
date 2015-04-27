<div id="contact--popup" class="white-popup mfp-hide">
  <form id="leadcap" method="post" action="inc/mailer.php">
  <header>
<h1>Let's Get Started Today</h1>
<p>Call us directly at <a href="tel:8138174691">813.817.4691</a><br/>or fill out the form below:</p>
</header>
  <fieldset>
	  <label>First Name</label>
	  <input type="text" name="fname" required/>
  </fieldset>
  <fieldset>
	  <label>Last Name</label>
	  <input type="text" name="lname" required/>
  </fieldset>
   <fieldset>
	  <label>Best Contact Number</label>
	  <input type="tel" maxlength="10" name="phone" required/>
  </fieldset>
  <fieldset>
	  <label>Email Address</label>
	  <input type="email" name="email" required/>
  </fieldset>
<input type="submit" value="Contact Us"/>
  </form>

  <div id="form--messages"></div>
  <div id="loading"><img src="images/ajax-loader.gif"/></div>
</div>