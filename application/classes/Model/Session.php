<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Session extends Jelly_Model
{
    public static function initialize(Jelly_Meta $meta)
    {
        $meta
            ->fields(array(
                'id' => Jelly::field('primary'),
                'user' => Jelly::field('belongsto', array(
                    'foreign' => 'user',
                )),
                'key' => Jelly::field('string'),
                'logged' => Jelly::field('string'),
            ));
    }
}
