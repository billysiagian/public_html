<?php
/**
 * @package     Joomla.Platform
 * @subpackage  HTML
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

function pagination_item_active(&$item) {
	return "<a title=\"".$item->text."\" href=\"".$item->link."\" class=\"page-link\">".$item->text."</a>";
}

function pagination_item_inactive(&$item) {
	return "<span class=\"page-link\">".$item->text."</span>";
}

function pagination_list_render($list) {
	// Reverse output rendering for right-to-left display.
	$html = '<ul>';
	$html .= '<li class="page-start">'.$list['start']['data'].'</li>';
	$html .= '<li class="page-prev">'.$list['previous']['data'].'</li>';
	foreach($list['pages'] as $page) {
		$html .= '<li>'.$page['data'].'</li>';
	}
	$html .= '<li class="page-next">'. $list['next']['data'].'</li>';
	$html .= '<li class="page-end">'. $list['end']['data'].'</li>';
	$html .= '</ul>';

	return $html;
}

function pagination_list_footer($list) {
	$html = "<div class=\"list-footer\">\n";

	$html .= "\n<div class=\"limit\">".JText::_('JGLOBAL_DISPLAY_NUM').$list['limitfield']."</div>";
	$html .= $list['pageslinks'];
	$html .= "\n<div class=\"counter\">".$list['pagescounter']."</div>";

	$html .= "\n<input type=\"hidden\" name=\"" . $list['prefix'] . "limitstart\" value=\"".$list['limitstart']."\" />";
	$html .= "\n</div>";

	return $html;
}
