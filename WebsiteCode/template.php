<?php
$global_pagename = "page? - Am I.... A PAGE?!?!?!?!?";
function LoadTemplate($area)
{
  if($area == "header")
  {
    echo "<link rel='stylesheet' href='template.css'>";

    echo "<header id='header' class='center'>";
    echo "<h1 id='siteHeader' class='center'>Test Quiz System</h1> ";
    echo "</header>";
  }
  else if($area == "footer")
  {

  }
  else if($area == "head")
  {
    echo '<head><title>' . "Test Quiz System " . $global_pagename . '</title><meta charset=UTF-8></head>';
  }
  else if($area == "lolFooter")
  {
    echo "<script src='megaAwesomeJavaScriptThatSucks.js'></script>";
  }
}

?>