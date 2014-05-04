<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Ban extends Jelly_Model
{
    public static function initialize(Jelly_Meta $meta)
    {
        $meta
            ->fields(array(
                'id' => Jelly::field('primary'),
                'created' => Jelly::field('timestamp', array(
                    'format' => 'Y-m-d H:i:s',
                )),
                'created_by' => Jelly::field('belongsto', array(
                    'foreign' => 'user',
                )),
                'approved' => Jelly::field('timestamp', array(
                    'format' => 'Y-m-d H:i:s',
                )),
                'approved_by' => Jelly::field('belongsto', array(
                    'foreign' => 'user',
                )),
                'author' => Jelly::field('string'),
                'period' => Jelly::field('enum', array(
                    'choices' => array('minute','hour','day','week','forever'),
                )),
                'player' => Jelly::field('string'),
                'reason' => Jelly::field('string'),
                'proof' => Jelly::field('string'),
            ));
    }
}
