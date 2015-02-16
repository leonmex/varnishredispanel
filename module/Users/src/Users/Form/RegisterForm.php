<?php
/**
 * User: nbarrera
 * Date: 2/11/15
 * Time: 3:45 PM
 */

namespace Users\Form;
use Zend\Form\Form;

class RegisterForm extends Form

{
    public function __construct($name = null)
    {
        parent::__construct('register');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');

        $this->add(array(
           'name' => 'name',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required',
            ),
            'options' => array(
              'label' => 'Full Name',
            ),
        ));

        $this->add(array(
           'name' => 'email',
            'attributes' => array(
                'type'   => 'email',
                'required' => 'required',
            ),
            'options'   => array(
                'label' => 'Email',
            ),
            'filters'   => array(
              array('name' => 'StringTrim'),
            ),
            'validators'   => array(
                'name'  => 'EmailAddress',
                'options' => array(
                    'messages'  => array(
                        \Zend\Validator\
                        EmailAddress::INVALID_FORMAT => 'Email address format is invalid'
                    )
                ),
            )
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'      => 'password',
                'size'      => '10',
                'required'  =>  'required',
            ),
            'options'   => array(
                'label'  => 'Password'
            ),
        ));

        $this->add(array(
            'name' => 'password_confirmation',
            'attributes' => array(
                'type'      => 'password',
                'size'      => '10',
                'required'  =>  'required',
            ),
            'options'   => array(
                'label'  => 'Password Confirmation'
            ),
        ));

        $this->add(array(
            'name' => 'password_confirmation',
            'attributes' => array(
                'type'      => 'password',
                'size'      => '10',
                'required'  =>  'required',
            ),
            'options'   => array(
                'label'  => 'Password Confirmation'
            ),
        ));

        $this->add(array(
            'name'  => 'submit',
            'attributes'    => array(
                'type'  => 'submit',
                'value' => 'Submit',
                'id'    => 'submitbutton',
                'class' => 'btn btn-default'
            ),
            'options' => array(
                'label' => 'Submit',
            ),
        ));
    }
}
