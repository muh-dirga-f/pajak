<?php
function is_logged_in()
{
    // Get current CodeIgniter instance
    $CI = &get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('user_data');
    if (!isset($user)) {
        $CI->session->sess_destroy();
        redirect('login','refresh');
        return false;
    } else {
        return true;
    }
}
?>