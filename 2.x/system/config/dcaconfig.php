<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Andreas Isaak 2013 
 * @package    contao-boilerplate
 * @license    GNU/LGPL 
 * @filesource
 *
 */

// Display page ID
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(ID: %s)</span>';
 
// Display article ID
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id'; 
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(%s, ID: %s)</span>';

// Narrow headlines
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6', 'h1');

// Import Backend-User
$this->import('BackendUser', 'User');
if (!$this->User->isAdmin)
{
    $GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_news']['fields']['teaser']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_news']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['teaser']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['details']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_newsletter']['fields']['teaser']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_newsletter']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_faq']['fields']['answer']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_form_field']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_comments']['fields']['comment']['eval']['rte'] = 'tinyMCE_boilerplate';
    $GLOBALS['TL_DCA']['tl_article']['fields']['teaser']['eval']['rte'] = 'tinyMCE_boilerplate';
}

// Remove the space fields
// unset($GLOBALS['TL_DCA']['tl_article']['fields']['space']);
// unset($GLOBALS['TL_DCA']['tl_content']['fields']['space']);
// unset($GLOBALS['TL_DCA']['tl_module'] ['fields']['space']);

// Remove the image margin fields
// unset($GLOBALS['TL_DCA']['tl_article']['fields']['imagemargin']);
// unset($GLOBALS['TL_DCA']['tl_content']['fields']['imagemargin']);
// unset($GLOBALS['TL_DCA']['tl_module']['fields']['imagemargin']);
// unset($GLOBALS['TL_DCA']['tl_news']['fields']['imagemargin']);
// unset($GLOBALS['TL_DCA']['tl_calendar_events']['fields']['imagemargin']);

// Sets the default content element
// $GLOBALS['TL_DCA']['tl_content']['fields']['type']['default'] = 'headline';

// Sets the default form field
// $GLOBALS['TL_DCA']['tl_form_field']['fields']['type']['default'] = 'hidden';
