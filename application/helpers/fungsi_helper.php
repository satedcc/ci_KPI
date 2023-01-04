<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

function randomHex()
{
    $chars = 'ABCDEF0123456789';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $color;
}
function randomString()
{
    $chars = 'ABCDEF0123456789';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $color;
}
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('../login');
    }
}
function is_logged_user()
{
    $ci = get_instance();
    if (!$ci->session->userdata('akun')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mohon untuk login terlebih dahulu</div>');
        redirect('../');
    }
}
function angka($length)
{
    $str        = "";
    $characters = '123456789';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
