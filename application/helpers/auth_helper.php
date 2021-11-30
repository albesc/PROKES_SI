<?php
function is_logged_in() // batasi akses ke halaman lurah
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');

        if ($role != 1) {
            redirect('petugas_lurah');
        }
    }
}

function is_logged_in2() // batasi akses ke halaman petugas lurah
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');

        if ($role != 2) {
            redirect('lurah');
        }
    }
}
