<?php 



	/**
	 *  Validation message
	 */

	function validationMsg($msg, $color_type = 'danger', $text_type = 'danger'){
		return "<p class=\"text-$text_type alert alert-$color_type\">$msg !<button class='close' data-dismiss='alert'>&times;</button></p>";
	}






 ?>