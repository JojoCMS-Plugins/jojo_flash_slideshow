<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */



if (!Jojo::tableexists('flashslideshow')) {
        echo "Table <b>flashslideshow</b> Does not exist - creating empty table<br />";
        $query = "
        CREATE TABLE `flashslideshow` (
        `flashslideshowid` INT NOT NULL AUTO_INCREMENT ,
        `fs_name` VARCHAR( 255 ) NOT NULL ,
        `fs_image` VARCHAR( 255 ) NOT NULL ,
        `fs_order` INT NOT NULL ,
        PRIMARY KEY ( `flashslideshowid` )
        ) TYPE=MyISAM;
        ";
        Jojo::updateQuery($query);
}

// Flash slide show xml
$data = Jojo::selectQuery("UPDATE {page} SET pg_link='jojo_flash_slideshow' WHERE pg_link='Jojo_Plugin_jojo_flash_slideshow.php'");

$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_link='jojo_flash_slideshow'");
if (count($data) == 0) {
    echo "Adding <b>jojo_flash_slideshow</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Flash Slideshow', pg_link='Jojo_Plugin_jojo_flash_slideshow', pg_url='flashslideshow.xml.php', pg_mainnav='no', pg_parent = ?", array($_NOT_ON_MENU_ID));
}

// Edit Flash Slideshow
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url = 'admin/edit/flashslideshow'");
if (count($data) == 0) {
    echo "Adding <b>Edit Flash Slideshow</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO page SET pg_title = 'Edit Slideshow', pg_link = 'Jojo_Plugin_Admin_Edit', pg_url = 'admin/edit/flashslideshow', pg_parent = ?, pg_order=6", array($_ADMIN_CONTENT_ID));
}