<?php
/**
 * Created by PhpStorm.
 * User: kristjan.kivastik
 * Date: 31.05.2017
 * Time: 11:06
 */
// loome sisselogimisvormi objekti
$login = new template('login');
$error = $sess->get('error');
$login->set('error', $error);
//paneme reaalsed väärtused template elementidele
$login->set('kasutajanimi', 'Kasutaja');
$login->set('parool', 'Parool');
$login->set('nupp', 'Logi sisse');
// loome link sisselogimisvormi töötlusele
$link = $http->getLink(array('act' => 'login_do'));
$login->set('link', $link);
// paneme sisu template sisse
$main_tmpl->set('content', $login->parse());
