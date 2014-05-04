<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Jelly_Model
{
    const
        ADMIN  = 4,
        LEAD   = 3,
        MOD    = 2,
        JUNIOR = 1,
        GUEST  = 0;

    public static function initialize(Jelly_Meta $meta)
    {
        $meta
            ->fields(array(
                'id' => Jelly::field('primary'),
                'name' => Jelly::field('string'),
                'role' => Jelly::field('integer'),
                'parent' => Jelly::field('belongsto', array(
                    'column' => 'parent',
                    'foreign' => 'user',
                )),
            ));
    }
}
