<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.core');

$title = $displayData['title'];
$message = JText::_('JLIB_HTML_PLEASE_MAKE_A_SELECTION_FROM_THE_LIST');
$message = addslashes($message);
?>
<button data-toggle="modal" onclick="if (document.adminForm.boxchecked.value==0){alert('<?php echo $message; ?>');  }else{jQuery( '#collapseModal' ).modal('show'); return true;}" class="btn btn-small">
	<i class="fa fa-checkbox-partial"></i>
	<?php echo $title; ?>
</button>


