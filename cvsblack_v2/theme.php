<?php
/*
+---------------------------------------------------------------+
|	e107 website system
|
|	©William Moffett 2001-2005
|	http://e107.net
|	que@e107.net
|
|	Released under the terms and conditions of the
|	GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

if(!defined("e_THEME")){ exit; }
// [multilanguage]
@include_once(e_THEME."alienware/languages/English.php");

// [theme]
$themename = "BLACKv2";
$themeversion = "2.0";
$themeauthor = "Infade";
$themeemail = "infade@infade.net";
$themewebsite = "infade.net";
$themedate = "Jan 2006";
$themeinfo = "<br /><i>BLACKv2</i> by Infade.net";
define("STANDARDS_MODE", TRUE);
$xhtmlcompliant = TRUE;
$csscompliant = TRUE;
define("IMODE", "dark");
define("CBWIDTH", "90%");
define("DREAMDISCLAIMER", "<i>BLACKv2</i> copyright Infade.net 2006 &nbsp;");

// [page defines used for css controll on per page basis]
define("e_PAGE", substr(strrchr($_SERVER['PHP_SELF'], "/"), 1));
define("e_PAGECLASS", ereg_replace(substr(strrchr(e_PAGE, "."), 0), "", e_PAGE));
defined("PAGE_NAME") ? PAGE_NAME : define("PAGE_NAME", e_PAGECLASS);

// [navigation] 
$register_sc[] = 'UL';

// [layout]

$layout = "_default";

// if the following pages then use the header and footer that follow
if(
        eregi(e_PAGE, "forum.php")
    ||eregi(e_PAGE, "forum_viewforum.php")
    ||eregi(e_PAGE, "forum_viewtopic.php")
	||eregi(e_PAGE, "forum_post.php?rp.2")
	||eregi(e_PAGE, "stats.php")
    ||eregi(e_PAGE, "faq.php")
	||eregi(e_PAGE, "calendar.php")
  )
{
$HEADER = "
<table class='alientable' cellpadding='0' cellspacing='0'>
  <tr>
    <td class='header_left'>&nbsp;</td>
    <td class='header_center'>
      <div class='headcenter_left'>
        <div class='headcenter_right'>
          <h1 id='sitename'>
		{SITENAME}
          </h1>
          <h2 id='sitetag'>
		  {SITETAG}
          </h2>
          <div id='logo'>
		<span>
		{LOGO}
		</span>
        </div>
	{UL}
      </div>
    </td>
    <td class='header_right'>&nbsp;</td>
  </tr>
  <tr>
    <td class='content_left'><img src='".THEME."images/content_left.png' width='45' height='225' alt='' /> </td>
    <td class='content_center'>
	<table width='100%' cellspacing='0' cellpadding='0'>
          <tr>
            <td class='left_menu'>
		{MENU=1}
            </td>
            <td>";

$FOOTER = "</td>
<td class='right_menu'>
		{MENU=2}
            </td>
          </tr>
        </table>
    </td>
    <td class='content_right'><img src='".THEME."images/content_right.png' width='42' height='225' alt='' /> </td>
  </tr>
  <tr>
    <td class='footer_left'>&nbsp;</td>
    <td class='footer_center'>
	<table style='width:100%' cellspacing='0' cellpadding='0'>
	  <tr>
	    <td class='fc_left'>&nbsp;</td>
	    <td class='fc_center'>
		<div id='fc_center' class='smalltext'>
		{SITEDISCLAIMER}
		</div>
	    </td>
	    <td class='fc_right'>
		<div id='copy'>
		<span class='smalltext'>
		".DREAMDISCLAIMER."
		</span>
		</div>
	    </td>
	  </tr>
	</table> 
    </td>
    <td class='footer_right'>&nbsp;</td>
  </tr>
</table>";


// otherwise, use the following default header and footer
}else{
// Default Header and Footer -----------------------------------------------------------


$HEADER = "
<table class='alientable' cellpadding='0' cellspacing='0'>
  <tr>
    <td class='header_left'>&nbsp;</td>
    <td class='header_center'>
      <div class='headcenter_left'>
        <div class='headcenter_right'>
          <h1 id='sitename'>
		{SITENAME}
          </h1>
          <h2 id='sitetag'>
		  {SITETAG}
          </h2>
          <div id='logo'>
		<span>
		{LOGO}
		</span>
        </div>
	{UL}
      </div>
    </td>
    <td class='header_right'>&nbsp;</td>
  </tr>
  <tr>
    <td class='content_left'><img src='".THEME."images/content_left.png' width='45' height='225' alt='' /> </td>
    <td class='content_center'>
	<table width='100%' cellspacing='0' cellpadding='0'>
          <tr>
            <td class='left_menu'>
		{MENU=1}
            </td>
            <td>";

$FOOTER = "
			<td class='right_menu'>
		{MENU=2}
            </td>
          </tr>
        </table>
    </td>
    <td class='content_right'><img src='".THEME."images/content_right.png' width='42' height='225' alt='' /> </td>
  </tr>
  <tr>
    <td class='footer_left'>&nbsp;</td>
    <td class='footer_center'>
	<table style='width:100%' cellspacing='0' cellpadding='0'>
	  <tr>
	    <td class='fc_left'>&nbsp;</td>
	    <td class='fc_center'>
		<div id='fc_center' class='smalltext'>
		{SITEDISCLAIMER}
		</div>
	    </td>
	    <td class='fc_right'>
		<div id='copy'>
		<span class='smalltext'>
		".DREAMDISCLAIMER."
		</span>
		</div>
	    </td>
	  </tr>
	</table> 
    </td>
    <td class='footer_right'>&nbsp;</td>
  </tr>
</table>";
}






// [newsstyle]

$NEWSSTYLE = "<h3>
{STICKY_ICON}
{NEWSICON}&nbsp;
{NEWSTITLE}
</h3>
<div class='bodytable' style='text-align:left'>
{NEWSBODY}
{EXTENDED}
</div>
<div style='text-align:right' class='smalltext'>
{NEWSAUTHOR}
on
{NEWSDATE}
<br />
<img src='".e_IMAGE."admin_images/userclass_16.png' alt='' style='vertical-align: middle;' />
{NEWSCOMMENTS} {TRACKBACK}
</div>
<br />
";

define("ICONSTYLE", "float: left; border:0");
define("COMMENTOFFSTRING", Comments ) ;
define("COMMENTLINK", Comments ) ;
define("PRE_EXTENDEDSTRING", "<br /><br />[ ");
define("EXTENDEDSTRING", LAN_THEME_4);
define("POST_EXTENDEDSTRING", " ]<br />");
define("TRACKBACKSTRING", TrackBacks ) ;
define("TRACKBACKBEFORESTRING", " | ");

// [linkstyle]
define("LINKDISPLAY","");
define("PRELINK", "");
define("POSTLINK", "");
define("LINKCLASS", "");
define("LINKCLASS_HILITE", "");
define("LINKSTART", "");
define("LINKSTART_HILITE", "");
define("LINKEND", "");
define("LINKALIGN", "");

// [tablestyle]

function tablestyle($caption, $text, $mode){
	global $style;
		echo "<h3>{$caption}</h3><div class='bodytable'>{$text}</div>";
}

// [commentstyle]
/*
$COMMENTSTYLE = "{USERNAME} @ <span class='smalltext'>{TIMEDATE}</span><br />
{AVATAR}<span class='smalltext'>{REPLY}</span><br />
{COMMENT}
<div style='text-align: right;' class='smallext'>{IPADDRESS}</div>"; 
*/
// [chatboxstyle]

$CHATBOXSTYLE = "
<div class='spacer'>
<div class='indentchat'>
<img src='".THEME."images/bullet.gif' />
<b>{USERNAME}</b><div style='text-align:left; padding:0px;'><span class='small' >{TIMEDATE}</span></div>
<span class='smalltext'><br />{MESSAGE}
</span><br><br />
</div>
</div>";

 ?>