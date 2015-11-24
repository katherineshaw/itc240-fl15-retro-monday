<?php
//config.php


//database credentials here
include 'credentials.php';


//this defines the current file name
define('THIS_PAGE',basename ($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//this allows us to add unique info to our pages
switch(THIS_PAGE)
    
{
        
    case "index.php":
        $title = "Home - Retro Diner";
        $pageID = "Welcome to Retro Diner!";
        break;
        
    case "template.php":
        $title = "My Template Title Tag";
        $pageID = "My Template Page ID";
        break;
        
        
    case "about.php":
        $title = "About - Retro Diner";
        $pageID = "A little about us...";
        break;
        
    case "data1.php":
        $title = "First Data Page";
        $pageID = "Customer Data";
        break;

        

    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner!";   
        
        
} // end switch

//here are our navigation pages:
$nav1['index.php'] = 'Home';
$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';
$nav1['data1.php'] = 'Customer Data';
$nav1['about.php'] = 'About';

    
    
/*
                <li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
*/


/*
foreach($nav1 as $link => $label)
{
    echo "link is $link and label is $label<br />";
    
}
*/

//echo $title;

//die;
/*
Creates Links inside the header.php file
*/
function makeLinks($arr)
{
    $myReturn ='';
    foreach($arr as $link => $label)
    {
        $myReturn .= '<li>
					<a href="' . $link . '">' . $label . '</a>
				</li>';
    }
    return $myReturn;
}//end makeLinks()