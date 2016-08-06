<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_stylishnone($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}

function modChrome_withtitlehead($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' col-sx-12 col-sm-6 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="' . $moduleClass . htmlspecialchars($params->get('moduleclass_sfx')) . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
		echo '</' . $moduleTag . '>';
	}
}
function modChrome_frontendshowNocolor($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' col-sx-12 col-sm-6 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="' . $moduleClass . htmlspecialchars($params->get('moduleclass_sfx')) . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '" itemprop="alternativeHealine">' . $module->title . '</' . $headerTag . '><hr class="smallers-color" />';
			}

			echo '<div class="row">'.$module->content.'</div>';
		echo '</' . $moduleTag . '>';
	}
}
function modChrome_frontendshowYescolor($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' col-sx-12 col-sm-6 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="' . $moduleClass . htmlspecialchars($params->get('moduleclass_sfx')) . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '" itemprop="alternativeHealine">' . $module->title . '</' . $headerTag . '><hr class="smallers" />';
			}

			echo '<div class="row">'.$module->content.'</div>';
		echo '</' . $moduleTag . '>';
	}
}
