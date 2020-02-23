<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Full Name<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Last Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Country<br />
            <select id="country" name="country">
              <option value="please choose">choose</option>
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
              <option value="japan">Japan</option>
              <option value="Korea">Korea</option>
              <option value="taiwan">Taiwan</option>
              <option value="china">China</option>
              <option value="russia">Russia</option>
              <option value="uk">UK</option>
              <option value="others">Others</option>
            </select>
		</label>
    </div>
    <div>
          <label>
			Country<br /><input type="text" name="country" required="required" placeholder="Country(required)" title="A valid Country is required" tabindex="20" size="44" />
		</label>
	</div>
    <div>	
		<label>
			Messages<br /><textarea name="Messages" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
