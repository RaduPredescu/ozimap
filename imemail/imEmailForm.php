<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('', @$_POST['Email'], '', false);
	$form->setField('', @$_POST['imObjectForm_2_2'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '1D5D2AF4BFF9A7F8EBFD523DDCAD2051' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_2_2'] != "" ? $_POST['imObjectForm_2_2'] : 'radu637@gmail.com', 'radu637@gmail.com', '', '', false);
		$form->mailToCustomer('radu637@gmail.com', $_POST['imObjectForm_2_2'], '', '', true);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file