<?php
require_once('header.php');
?>
<h1>Login form:</h1>
<form name="admin login" class="form-horizontal" method="post">
<label class="control-label">Pranav</label>
<div class="controls">
<input type="text" name="admin[name]" value="" class="span4 typeahead"></div><br/>
<label class="control-label">PASSWORD</label>
<div class=controls>
<input type="text" name="admin[passsword]" value="" class="span6 typeahead"></div><br/>
<label class="control-label">UPLOAD FILE</label>
<div class="controls">
<input type="file" class="input-file uniform_on"></div><br/>
 
<label class="control-label" for="selectError2" id="selectError2">Group Select</label>
<div class="control-group">
<select data-placeholder="Your Favorite Football Team">
	<option value=""></option>
	<optgroup label="NFC EAST">
	<option>Dallas Cowboys</option>
	<option>New York Giants</option>
	<option>Philadelphia Eagles</option>
	<option>Washington Redskins</option>
	</optgroup>
	<optgroup label="NFC NORTH">
	<option>Chicago Bears</option>
	<option>Detroit Lions</option>
	<option>Green Bay Packers</option>
	<option>Minnesota Vikings</option>
	</optgroup>
	</select></div>
<div class="form-actions">
<button type="submit" class="btn btn-primary">Save changes</button>
<button type="reset" class="btn">Cancel</button>
							</div>
</form>
<?
require_once('footer.php');
?>