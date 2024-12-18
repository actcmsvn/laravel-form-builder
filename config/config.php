<?php

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormHelper;

return [
    'defaults' => [
        'wrapper_class' => 'form-group',
        'wrapper_error_class' => 'has-error',
        'label_class' => 'control-label',
        'field_class' => 'form-control',
        'field_error_class' => '',
        'help_block_class' => 'help-block',
        'error_class' => 'text-danger',
        'required_class' => 'required',

        'help_block_tag' => 'p',
    ],
    // Templates
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',
    'choice' => 'laravel-form-builder::choice',
    'repeated' => 'laravel-form-builder::repeated',
    'child_form' => 'laravel-form-builder::child_form',
    'collection' => 'laravel-form-builder::collection',
    'static' => 'laravel-form-builder::static',

    // Remove the laravel-form-builder:: prefix above when using template_prefix
    'template_prefix' => '',

    'default_namespace' => '',

    'custom_fields' => [
//        'datetime' => App\Forms\Fields\Datetime::class
    ],

    'plain_form_class' => Form::class,
    'form_builder_class' => FormBuilder::class,
    'form_helper_class' => FormHelper::class,
];
