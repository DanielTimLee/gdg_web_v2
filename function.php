<?php
/*  header menu items
 * (item,active item select)
 * */
function active_item()
{
    global $page, $active;
    $active = array(
        'home' => 'item',
        'about' => 'item',
        'work' => 'item',
        'gallery' => 'item',
        'board' => 'item',
    );
    $active[$page] = 'active item';
}