<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * News default templates
 <!-- Begin Post -->
 <div class="post"> <a href="post2.html"><img src="style/images/art/blog2-1.jpg" alt="" /></a>

	 <!-- Begin Info -->
	 <div class="info">
		 <!-- Begin Date -->
		 <div class="date">
			 <div class="day">24</div>
			 <div class="month">Sep</div>
		 </div>
		 <!-- End Date -->

		 <!-- Begin Meta -->
		 <div class="meta">
			 <h3 class="title"><a href="post2.html">Malesuada Condimentum Inceptos Vehicula</a></h3>
			 <div class="comments"><a href="#">11 Comments</a></div>
			 <div class="tags"><a href="#">photography,</a> <a href="#">manipulation,</a> <a href="#">journal</a></div>
		 </div>
		 <!-- End Meta -->
	 </div>
	 <div class="clear"></div>
	 <!-- End Info -->

	 <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="post2.html" class="more">Continue reading...</a></p>
 </div>
 <!-- End Post -->
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page.
// As displayed by news.php?cat.1 OR news.php?all
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query)

// Template/CSS to be reviewed for best bootstrap implementation
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=400&h=350&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '

		<div class="row row-fluid">
				<div class="span3 col-md-3">
                   <div class="thumbnail">
                        {NEWSTHUMBNAIL=placeholder}
                    </div>
				</div>
				<div class="span9 col-md-9">
                   <h3 class="media-heading">{NEWS_TITLE: link=1}</h3>
                      <p>
                       	{NEWS_SUMMARY} item list ...
					</p>
                    <p>
                       <a href="{NEWSURL}" class="btn btn-small btn-primary">'.LAN_READ_MORE.'</a>
                   </p>
 				</div>
		</div>
		<hr class="visible-xs" />

';






//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme.
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/

$NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

/*

{SETIMAGE: w=400&h=400}
<div class="default-item">
<h2 class="news-title">{NEWS_TITLE: link=1}</h2>

<hr class="news-heading-sep">
	<div class="row">
		<div class="col-md-6"><small>{GLYPH=user} &nbsp;{NEWSAUTHOR} &nbsp; {GLYPH=time} &nbsp;{NEWSDATE=short} </small></div>
		<div class="col-md-6 text-right options"><small>{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </small></div>
	</div>
<hr>
  {NEWSIMAGE: item=1}

  <p class="lead">{NEWS_SUMMARY}</p>
  {NEWSVIDEO: item=1}
  <div class="text-justify">
  {NEWS_BODY}
  </div>
  <div class="text-right">
  {EXTENDED}
  </div>
  <hr>
	<div class="options">
	<div class="btn-group hidden-print">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default}{PRINTICON: class=btn btn-default}{PDFICON}{SOCIALSHARE}{ADMINOPTIONS: class=btn btn-default}</div>
	</div>
</div>


 */
$NEWS_TEMPLATE['default']['item'] = <<<TMPL

<!-- Begin Post -->
<div class="post">
 <a href="#">
	{SETIMAGE: w=470&h=255}
	{NEWSIMAGE: item=1}
 </a>

	<!-- Begin Info -->
	<div class="info">
		<!-- Begin Date -->
		<div class="date">
			<div class="day">24</div>
			<div class="month">Sep</div>
		</div>
		<!-- End Date -->

		<!-- Begin Meta -->
		<div class="meta">
			<h3 class="title"><a href="post2.html">Malesuada Condimentum Inceptos Vehicula</a></h3>
			<div class="comments"><a href="#">11 Comments</a></div>
			<div class="tags"><a href="#">photography,</a> <a href="#">manipulation,</a> <a href="#">journal</a></div>
		</div>
		<!-- End Meta -->
	</div>
	<div class="clear"></div>
	<!-- End Info -->
	<p>{NEWS_SUMMARY}</p>
	 <a href="post2.html" class="more">Continue reading...</a>
</div>
<!-- End Post -->




					<h4>{NEWS_TITLE: link=1}</h4>
					<ul class="post-meta">
						<li class="main-bg"><i class="fa fa-video-camera"></i></li>
						<li class="meta-user"><i class="fa fa-user"></i>By: {NEWSAUTHOR}</li>
						<li class="meta_date">{GLYPH=folder-open}in: {NEWSCATEGORY}</li>
						<li>{NEWSCOMMENTLINK}</li>

			{NEWS_SUMMARY}
TMPL;



###### Default view item (temporary)  ######
//$NEWS_MENU_TEMPLATE['view']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['view']['end']         = '</ul>';

// As displayed by news.php?extend.1


$NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = '
{SETIMAGE: w=900&h=600}
	<div class="view-item">
		<h2 class="news-title">{NEWS_TITLE: link=1}</h2>

        <hr class="news-heading-sep">
         	<div class="row">
        		<div class="col-md-6"><small>{GLYPH=user} &nbsp;{NEWSAUTHOR} &nbsp; {GLYPH=time} &nbsp;{NEWSDATE=short} </small></div>
        		<div class="col-md-6 text-right options"><small>{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </small></div>
        	</div>
        <hr>


		<div class="body">
			{NEWSIMAGE: item=1}
			 <p class="lead">{NEWS_SUMMARY}</p>
			  <div class="text-justify">
			{NEWS_BODY=body}
			</div>
			<div class="news-videos-1">
			{NEWSVIDEO: item=1}
		 	{NEWSVIDEO: item=2}
		 	{NEWSVIDEO: item=3}
			</div>


			<br />
			{SETIMAGE: w=400&h=400}

			<div class="row  news-images-1">
        		<div class="col-md-6">{NEWSIMAGE: item=2}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=3}</div>
        	</div>
        	<div class="row news-images-2">
        		<div class="col-md-6">{NEWSIMAGE: item=4}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=5}</div>
            </div>

            {NEWSVIDEO: item=4}
			{NEWSVIDEO: item=5}

           <div class="body-extended text-justify">
				{NEWS_BODY=extended}
			</div>


		</div>




		<hr>

		<div class="options hidden-print ">
			<div class="btn-group">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default}{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE}</div>
		</div>





	</div>

	<hr />
	{NEWSRELATED}
	<hr>
	{NEWSNAVLINK}

';

/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';


###### news_categories.sc
$NEWS_TEMPLATE['category']['body'] = '
	<div style="padding:5px"><div style="border-bottom:1px inset black; padding-bottom:1px;margin-bottom:5px">
	{NEWSCATICON}&nbsp;{NEWSCATEGORY}
	</div>
	{NEWSCAT_ITEM}
	</div>
';

$NEWS_TEMPLATE['category']['item'] = '
	<div style="width:100%;padding-bottom:2px">
	<table style="width:100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td style="width:2px;vertical-align:top">&#8226;
	</td>
	<td style="text-align:left;vertical-align:top;padding-left:3px">
	{NEWSTITLELINK}
	<br />
	</td></tr>
	</table>
	</div>
';

### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">You Might Also Like</h2><div class="row">';
$NEWS_TEMPLATE['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end'] = '</div>';
