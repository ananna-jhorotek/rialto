<?php
/**
 * Created by PhpStorm.
 * User: Sanker Saha
 * Date: 29-01-2017
 * Time: 1:25 AM
 */
$config = [
                'add_blog_form'=>[
                                    [
                                        'field'=>'title',
                                        'label'=>'Blog Title',
                                        'rules'=>'required|trim'
                                    ],
                                    [
                                        'field'=>'desc',
                                        'label'=>'Blog Description',
                                        'rules'=>'required|trim'
                                    ]
                ],
                'login_form'=>[
                                    [
                                        'field'=>'EmailInput',
                                        'label'=>'Email',
                                        'rules'=>'required|trim|valid_email'
                                    ],
                                    [
                                        'field'=>'PasswordInput',
                                        'label'=>'Password',
                                        'rules'=>'required|trim'
                                    ]
                ],
                'plotCellsite'=>[
                                    [
                                        'field'=>'siteid',
                                        'label'=>'SITEID',
                                        'rules'=>'trim'
                                    ],
                                    [
                                        'field'=>'cellid',
                                        'label'=>'CELLID',
                                        'rules'=>'trim'
                                    ],
                                    [
                                        'field'=>'AREA',
                                        'label'=>'Password',
                                        'rules'=>'trim'
                                    ]
                ]
];
