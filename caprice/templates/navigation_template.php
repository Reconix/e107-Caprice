<?php
/*
* Navigation Template
*/
/* HTML - TEMPLATE


			<li><a href="index.html" class="active">Home</a>
				<ul>
					<li><a href="index.html">Home w/ Carousel</a></li>
					<li><a href="index2.html">Home w/ Portfolio</a></li>
					<li><a href="index3.html">Home w/ Testimonials</a></li>
				</ul>
			</li>
			<li><a href="portfolio.html">Portfolio</a>
				<ul>
					<li><a href="portfolio.html">Portfolio 4 Columns</a></li>
					<li><a href="portfolio2.html">Portfolio 3 Columns</a></li>
					<li><a href="portfolio3.html">Portfolio 2 Columns</a></li>
					<li><a href="portfolio4.html">Portfolio 1 Column</a></li>
					<li><a href="portfolio-post.html">Portfolio Post</a></li>
				</ul>
			</li>
			<li><a href="blog.html">Blog</a>
				<ul>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blog2.html">Blog w/ Sidebar</a></li>
					<li><a href="post.html">Post</a></li>
					<li><a href="post2.html">Post w/ Sidebar</a></li>
				</ul>
			</li>
			<li><a href="buttons-boxes-images.html">Features</a>
				<ul>
					<li><a href="buttons-boxes-images.html">Buttons Boxes Images</a></li>
					<li><a href="tabs-toggle-table.html">Tabs Toggle Tables</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="typography.html">Typography</a></li>
					<li><a href="service-icons.html">Service Icons</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact Us</a></li>


*/

 //-----------------------=[Main Nav]=------------------------\\

// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '
<!-- Begin Menu -->
	<div id="menu" class="menu-v">
		<ul>
';

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = '
	<li>
		<a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		{LINK_ICON}{LINK_NAME}
		</a>
	</li>
';

// Main Link - active state
$NAVIGATION_TEMPLATE['main']['item_active'] = '
	<li class="active">
		<a class= href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON} {LINK_NAME}
		</a>
	</li>
';


// Main Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="{LINK_IDENTIFIER}">
		<a href="{LINK_URL}">
			{LINK_ICON}
			{LINK_NAME}
		</a>
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="active {LINK_IDENTIFIER}">
		<a href="{LINK_URL}">
		 {LINK_ICON}{LINK_NAME}
		 <span class="caret"></span>
		</a>
		{LINK_SUB}
	</li>
';

$NAVIGATION_TEMPLATE['main']['end'] = '
		</ul>
 </div>
<!-- End Menu -->
';


// Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<ul class="sub-menu submenu-level-{LINK_DEPTH}">
';

// Sub menu Link
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
			<li>
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
			<li role="menuitem" class="active">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';
$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</ul>';

// Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '
		<ul class="sub-menu submenu-level-{LINK_DEPTH}" role="menu" >
';

// Sub Menu Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '
			<li>
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '
			<li role="menuitem" class="dropdown-submenu active">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['main']['submenu_lowerend'] = '</ul>';

 //-----------------------=[Sidebar Nav]=------------------------\\

// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="nav nav-list"><li class="nav-header">Sidebar</li>
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '<li><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


 //-----------------------=[Footer Nav]=------------------------\\

// Footer links.

/* TPL

		<ul class="footer-menu f-right">
			<li><a href="#">Home</a></li>
			<li><a href="#">News / Blog</a></li>
			<li><a href="#">Forums</a></li>
			<li><a href="#">CLAN</a></li>
			<li><a href="#">Arcade</a></li>
		</ul>

*/

$NAVIGATION_TEMPLATE["footer"]["start"] 				= '<ul class="footer-menu f-right">';
$NAVIGATION_TEMPLATE["footer"]["item"] 					= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= "<li>{LINK_NAME}</li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= "<li><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["end"] 					= '</ul>';


 //-----------------------=[Random Navz]=------------------------\\

$NAVIGATION_TEMPLATE['alt'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['side'];

?>
