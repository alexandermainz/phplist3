<?php

if (!defined('PHPLISTINIT')) {
    //	print backtrace();
    echo 'Invalid Request';
    exit;
}

function accessLevel($page)
{
    global $tables, $access_levels;
    if (!empty($GLOBALS['firsttime']) || !empty($_SESSION['firstinstall'])) {
      return 'all';
    }

    if (isSuperUser()) {
        return 'all';
    }
    if (!isset($_SESSION['adminloggedin'])) {
        return "none";
    }
    if (!is_array($_SESSION['logindetails'])) {
        return "none";
    }


    // Modifications for QG: Allow all admins to access all subscriber lists
    if ($page == 'send') {
        return 'all';
    }
    if ($page == 'list') {
        return 'all';
    }
    if ($page == 'messages') {
        return 'all';
    }
    // End of modifications for QG


    //# for non-supers we only allow owner views
    //# this is likely to need tweaking
    return 'owner';
}

function requireAccessLevel($page, $level)
{
    $adminlevel = accessLevel($page);

    return $adminlevel == $level;
}

