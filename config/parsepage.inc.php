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



/* Match "flashslideshow.xml.php" */
  preg_match_all('%^flashslideshow.xml.php$%', $url, $result, PREG_PATTERN_ORDER);
  if ($result[0]) {
    $images = Jojo::selectQuery("SELECT * FROM flashslideshow WHERE 1 ORDER BY fs_order, fs_name");

$xml = '<?xml version="1.0" encoding="utf-8" standalone="yes"?'.'>';
$xml .= "\n<images>";
for ($i=0;$i<count($images);$i++) {
  $xml .= "\n<pic>
  <image>"._SITEURL . "/downloads/flashslideshows/" . $images[$i]['fs_image']."</image>
  <caption>" . $images[$i]['fs_name']."</caption>
</pic>\n";
}
$xml .= '</images>';

echo $xml;
exit();
  }