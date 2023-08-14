<?php

defined('MOODLE_INTERNAL') || die();

function local_bbzhidehome_extend_navigation(global_navigation $navigation) {
    if ($home = $navigation->find('home', global_navigation::TYPE_SETTING)) {
        $home->remove();
    }
}
