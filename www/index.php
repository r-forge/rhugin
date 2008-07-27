<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>

<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<h1>The RHugin Package Homepage</h1>

The RHugin package provides an R API for the Hugin Decision Engine. Here is a link to the project <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>Installation</h2>

<p>
The package source can be obtained from the R-Forge Subversion repository by following the instructions given <a href="http://r-forge.r-project.org/scm/?group_id=209">here</a>. Additionally, a <a href="RHugin_0.3-1.zip">binary package</a> is available for Microsoft Windows Systems.
</p>

<p>
RHugin requires a functional installation of Hugin Expert. If you have a licensed Hugin installation then simply install the RHugin package and load it into your R session. Please note that the <code>HUGINHOME</code> environment variable must be set* as described in the Hugin documentation. If you don't already have Hugin installed then you can download a trial version from <a href="http://www.hugin.com">www.hugin.com</a>. The trial version is limited but sufficient to explore the capabilities of the RHugin package.
</p>

<p>
*The RHugin package automatically sets the <code>HUGINHOME</code> environment variable on Microsoft Windows systems if Hugin is installed in <code>C://Program Files//Hugin Expert//Hugin Researcher 6.9</code>.
</p>

</body>
</html>
