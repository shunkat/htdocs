<?php

	function mail_subject($subject = ""){
		$mime_subject = mb_convert_encoding($subject,"JIS","UTF-8");
		mb_language("Japanese");
		mb_internal_encoding("JIS");
		$mime_subject = mb_encode_mimeheader($mime_subject,"JIS", 'B', "\n");
		mb_internal_encoding("UTF-8");
		
		return $mime_subject;
	}

?>
