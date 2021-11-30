<?php
function is_logged_in2() // batasi akses ke halaman pertugas lurah
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');

        if ($role != 2) {
            if ($role == 1) {
                redirect('lurah');
            }
        }
    }
}
