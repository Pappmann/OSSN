<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
?>
<div class="reset-notice"><?php echo ossn_print('enter:new:password'); ?></div>
<input type="password" name="password"/>

<input type="hidden" name="user" value="<?php echo input('user'); ?>"/>
<input type="hidden" name="c" value="<?php echo input('c'); ?>"/>
<div>
		<?php echo ossn_fetch_extend_views('forms/resetpassword/before/submit'); ?>
</div>
<input type="submit"  class="btn btn-success" value="<?php echo ossn_print('reset'); ?>"/>