<?php
/**
 * Local plugin "bbzhidehome" - Lib
 *
 * @package    local_bbzhidehome
 * @copyright  2023, Lukas Diener, <lukas.diener@bbz-cfp.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();

function local_bbzhidehome_extend_navigation(global_navigation $navigation) {
    if ($home = $navigation->find('home', global_navigation::TYPE_ROOTNODE)) {
        $home->remove();
    }
}
