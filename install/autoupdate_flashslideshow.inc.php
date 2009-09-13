<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_core
 */

$table = 'flashslideshow';
$o = 1;

$default_td[$table]['td_displayfield'] = 'fs_name';
$default_td[$table]['td_rolloverfield'] = 'fs_image';
$default_td[$table]['td_orderbyfields'] = 'fs_name';
$default_td[$table]['td_topsubmit'] = 'yes';
$default_td[$table]['td_deleteoption'] = 'yes';
$default_td[$table]['td_menutype'] = 'list';
$default_td[$table]['td_categoryfield'] = '';
$default_td[$table]['td_categorytable'] = '';
$default_td[$table]['td_help'] = 'This section manages the flash slideshow on the site.<br/>';

//Flash Slideshow ID
$default_fd[$table]['flashslideshowid']['fd_order'] = $o++;
$default_fd[$table]['flashslideshowid']['fd_type'] = 'readonly';
$default_fd[$table]['flashslideshowid']['fd_help'] = 'A unique ID, automatically assigned by the system';

//Name
$default_fd[$table]['fs_name']['fd_order'] = $o++;
$default_fd[$table]['fs_name']['fd_type'] = 'text';
$default_fd[$table]['fs_name']['fd_required'] = 'yes';
$default_fd[$table]['fs_name']['fd_size'] = '40';
$default_fd[$table]['fs_name']['fd_help'] = 'Name of the Image - may or may not be displayed as a caption depending on configuration';

//Image
$default_fd[$table]['fs_image']['fd_order'] = $o++;
$default_fd[$table]['fs_image']['fd_type'] = 'fileupload';
$default_fd[$table]['fs_image']['fd_help'] = 'An image for the slideshow. Ensure dimensions are correct . ';

//Order
$default_fd[$table]['fs_order']['fd_order'] = $o++;
$default_fd[$table]['fs_order']['fd_type'] = 'integer';
$default_fd[$table]['fs_order']['fd_help'] = 'Order in which the image appears in the slideshow';