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

The RHugin package provides an API for the Hugin Decision Engine. Here is a link to the project <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

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

<h2>Quick Introduction</h2>

Once the RHugin package is installed, load it into an R session using the <code>library</code> function.

<pre>
     library(RHugin)
</pre>

You can list all of the functions available in the package using the <code>ls</code> function.

<pre>
     ls("package:RHugin")
      [1] "add.edge"                   "add.node"                  
      [3] "clone.node"                 "compile"                   
      [5] "condense.data.frame"        "delete.edge"               
      [7] "delete.node"                "error.code"                
      [9] "error.description"          "expand.grid.sans.coercion" 
     [11] "generate.nodes"             "generate.tables"           
     [13] "get.belief"                 "get.cases"                 
     [15] "get.edges"                  "get.finding"               
     [17] "get.nodes"                  "get.normalization.constant"
     [19] "get.states"                 "get.table"                 
     [21] "get.table.nodes"            "hugin.domain"              
     [23] "initialize.domain"          "print.RHuginDomain"        
     [25] "print.summary.RHuginDomain" "propagate"                 
     [27] "read.hkb"                   "reset"                     
     [29] "retract"                    "reverse.edge"              
     [31] "RHugin.check.args"          "RHugin.handle.error"       
     [33] "set.cases"                  "set.finding"               
     [35] "set.states"                 "set.table"                 
     [37] "simulate.RHuginDomain"      "summary.RHuginDomain"      
     [39] "switch.parent"              "write.hkb"                 
</pre>

Documentation for each of these functions is provided using the R help system. For example, use the command

<pre>
     help(add.node)
</pre>

to see the documentation for the <code>add.node</code> function.


<h3>An Example</h3>

Lets use the RHugin package to build the bayesian network considered in this Hugin <a href="http://www.hugin.com/developer/tutorials/BN_example/">tutorial</a>.

First we need to create a Hugin domain:

<pre>
     AppleTree <- hugin.domain()
</pre>

Then we add the nodes:

<pre>
     add.node(AppleTree, "Sick", states = c("yes", "no"))
     add.node(AppleTree, "Dry", states = c("yes", "no"))
     add.node(AppleTree, "Loses", states = c("yes", "no"))
</pre>

Next add the edges:

<pre>
     add.edge(AppleTree, "Loses", "Sick")
     add.edge(AppleTree, "Loses", "Dry")
</pre>

After adding all of the nodes and edges, we specify the conditional probabilities. The best practice for setting a conditional probability table (CPT) is to use the <code>get.table</code> function to get the CPT (as a data frame) for a given node from the Hugin domain, set the conditional probabilities, then use the <code>set.table</code> function to actually set the CPT for the given node in the Hugin domain.

<pre>
     sick.table <- get.table(AppleTree, "Sick")
     sick.table[, 2] <- c(0.1, 0.9)
     set.table(AppleTree, "Sick", sick.table)
</pre>

Repeat for Dry:

<pre>
     dry.table <- get.table(AppleTree, "Dry")
     dry.table[, 2] <- c(0.1, 0.9)
     set.table(AppleTree, "Dry", dry.table)
</pre>

And for Loses:

<pre>
     loses.table <- get.table(AppleTree, "Loses")
     loses.table[, 4] <- c(0.95, 0.05, 0.85, 0.15, 0.90, 0.1, 0.02, 0.98)
     set.table(AppleTree, "Loses", loses.table)
</pre>

Then compile the domain:

<pre>
     compile(AppleTree)
</pre>

Enter some evidence:

<pre>
     set.finding(AppleTree, "Loses", "yes")
</pre>

And finally, propagate and get beliefs:

<pre>
     propagate(AppleTree)
     get.belief(AppleTree, "Sick")
           yes        no 
     0.4939956 0.5060044 
</pre>

If we don't make any mistakes we get the same answer as the tutorial.

</body>
</html>
