
<?php

function send_email($to, $subject, $message) {
    $ci = get_instance();
    $message = '
        <div style="width: 500px;">
            <div style="background-color: #F3F3F3;border-radius: 10px 10px 00px  0px;">
                <img src="' . base_url.'assets/images/logo.jpg' . '" alt="MadeByus4u Logo"/>
            </div>
            <div style="min-height: 210px;padding: 20px;background-color: #F8F8F6;color: #8C8C8C">
                ' . $message .
            '</div>
            <div style="background-color: #252525;padding: 0px 10px;overflow: hidden;border-radius: 0px 0px 10px  10px ;">
                <p style="color: #717171;margin-bottom: 0px;">All Right Reserved</p>
                <p style="margin-top: 0;"><a href="" style="color: #115481;">MadeByUs4U.com</a></p>
            </div>
        </div>';
    $ci->email->from(email, 'MadeByUs4U System Admin');
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($message);
    $sent = $ci->email->send();
    return $sent;
}


function send_email_new ( $template_view , $from , $to ,$subject,$content ) {

    $ci = get_instance();
    $template_view = '
        <div style="width: 500px;">
            <div style="background-color: #F3F3F3;border-radius: 10px 10px 00px  0px;">
                <img src="' .base_url().'assets/images/logo.jpg' . '" alt="MadeByus4u Logo"/>
            </div>
            <div style="min-height: 210px;padding: 20px;background-color: #F8F8F6;color: #8C8C8C">
                ' . $content .
        '</div>
        <div style="background-color: #252525;padding: 0px 10px;overflow: hidden;border-radius: 0px 0px 10px  10px ;">
            <p style="color: #717171;margin-bottom: 0px;">All Right Reserved</p>
            <p style="margin-top: 0;"><a href="" style="color: #115481;">MadeByUs4U.com</a></p>
        </div>
    </div>';
    $ci->email->from($from, 'MadeByUs4u.com');
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($content);
    $sent = $ci->email->send();
}