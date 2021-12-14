<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!--- Displays form --->
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		//displays title 
		echo $title; ?>
	</title>
</head>
<body>
	<h1><?php echo $title; ?></h1>
	<?php
    //starts fieldset and displays title of fieldset
	echo form_fieldset("For Comments and Suggestion:");
    //calls method that will validate the form
	echo validation_errors();
	//redirects to submit method of contact controller class
	echo form_open('contact/submit');
        //displays input fields labels
	    echo form_label('Name', 'name')." ";
	    echo form_input('name', '', 'id="name"').'<br/>'.'<br/>';

	    echo form_label('Email', 'email')." ";
	    echo form_input('email', '', 'id="email"').'<br/>'.'<br/>';

			echo form_label('Phone', 'phone')." ";
	    echo form_input('phone', '', 'id="phone"').'<br/>'.'<br/>';

			echo form_label('Title', 'title')." ";
	    echo form_input('title', '', 'id="title"').'<br/>'.'<br/>';

	    echo form_label('Message', 'content')." ";
	    echo form_textarea('content', '', 'id="content"').'<br/>';

	    echo form_submit('submit', 'Submit');
    //closes form     
	echo form_close();
	//closes fieldset
	echo form_fieldset_close();
	?>

</body>
</html>