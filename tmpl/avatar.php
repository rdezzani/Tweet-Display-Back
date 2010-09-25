<?php
/**
* Tweet Display Back Module for Joomla!
*
* @version		$Id$
* @copyright	Copyright (C) 2010 Michael Babker. All rights reserved.
* @license		GNU/GPL - http://www.gnu.org/copyleft/gpl.html
* 
* Module forked from TweetXT for Joomla!
* Original Copyright ((c) 2009 joomlaxt.com, All rights reserved - http://www.joomlaxt.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$imgpath 		= JURI::root()."modules/mod_tweetdisplayback/media/images";
$headerAlign	= $params->get("headerAvatarAlignment");
$tweetDisplay	= $params->get("tweetDisplayLocation");
JHTML::stylesheet('avatar.css', 'modules/mod_tweetdisplayback/media/css/');
?>

<div class="tweetheadermain">
	<div class="tweetheaderavatar<?php echo $headerAlign;?>">
		<?php echo $twitter->header->avatar; ?>
	</div>
	<?php if ($params->get("showHeader", 1)==1) { ?>
	<div class="tweet-header-<?php echo $headerAlign;?>arrow">
		<img src="<?php echo $imgpath; ?>/arr_<?php echo $headerAlign;?>.png" alt="" />
	</div>
	<div class="tweetheader<?php echo $headerAlign;?>">
		<span class="tweetheaderuser"><?php echo $twitter->header->user; ?></span>
		<span class="tweetheaderbio"><?php echo $twitter->header->bio; ?></span>
		<span class="tweetheaderweb"><?php echo $twitter->header->web; ?></span>
		<span class="tweetheaderlocation"><?php echo $twitter->header->location; ?></span>
	</div>
	<?php } ?>
</div>

<?php if ($params->get("showHeader", 1)==1) : ?>
<div class="tweet-header-downarrow-<?php echo $headerAlign;?>">
	<img src="<?php echo $imgpath; ?>/arr_down.png" alt="" />
</div>
<?php else :?>
<div class="tweet-header-downarrow-<?php echo $headerAlign;?>-nohead">
	<img src="<?php echo $imgpath; ?>/arr_down.png" alt="" />
</div>
<?php endif; ?>

<?php foreach ($twitter->tweets as $t) { ?>
<div class="tweetmain">
	<div class="tweet-<?php echo $tweetDisplay;?>-noavatar">
		<?php echo $t->tweet->user; ?>
		<?php echo $t->tweet->text; ?>
		<p class="tweettime"><?php echo $t->tweet->created; ?></p>
	</div>
</div>
<div class="clr"></div>
<?php } ?>

<?php echo $twitter->footer->follow_me; ?>
<?php echo $twitter->footer->powered_by; ?>
<div id="pixel">&nbsp;</div>