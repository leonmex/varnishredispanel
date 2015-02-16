<?php
/**
 * Created by PhpStorm.
 * User: nbarrera
 * Date: 2/12/15
 * Time: 3:01 PM
 */
namespace Users\Form;
use Zend\InputFilter\InputFilter;

class RegisterFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name'      => 'email',
            'required'  =>  true,
            'validators' =>  array(
                array(
                    'name'      => 'EmailAddress',
                    'options'   =>  array(
                        'domain'    => true,
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name'      => 'name',
            'required'  => true,
            'filters'   => array(
                array(
                    'name'  => 'StripTags',
                ),
            ),
            'validators'    => array(
                array(
                    'name'  => 'StringLenght',
                    'options' => array(
                        'enconding' => 'UTF-8',
                        'min'       => 2,
                        'max'       =>140,
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name'      => 'password_confirmation',
            'required'  => true,
        ));


    }
}