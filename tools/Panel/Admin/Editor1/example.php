<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">




<head>

<title>The Man in Blue &gt; Experiments &gt; widgEditor</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="The Man in Blue" />
<meta name="robots" content="all" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<style type="text/css" media="all">
	@import "css/info.css";
	@import "css/main.css";
	@import "css/widgEditor.css";
</style>

<script type="text/javascript" src="scripts/widgEditor.js"></script>

</head>
<body>
	
<!-- END experimentInfo -->
	<div id="content">

		<form method=post>
			<fieldset>
				<label for="noise">
					Make some noise:
				</label>
				<textarea id="noise" name="noise" class="widgEditor nothing">&lt;p&gt;widgEditor &lt;strong&gt;automatically&lt;/strong&gt; integrates the content that was in the textarea!&lt;/p&gt;</textarea>
			</fieldset>
			<fieldset class="submit">
				<input type="submit" name='view' value="Check the submitted code" />
			</fieldset>
		</form>
	</div>
<!-- END content -->
<?php
if(@$_POST['view']){
$cn=mysqli_connect("localhost","root","","testing");
mysqli_query($cn,"INSERT INTO news values('".$_POST['noise']."')");
}
?>
</body>

</html>
