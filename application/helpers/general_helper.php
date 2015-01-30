
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
            <p style="margin-top: 0;"><a href="http://www.madebyus4u.com" style="color: #115481;">MadeByUs4U.com</a></p>
        </div>
    </div>';
    $ci->email->from($from, 'MadeByUs4u.com');
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($content);
    $sent = $ci->email->send();
}


function send_activation_email($first_name,$user_id ,$activation_code,$email) {
    $activation_link = base_url('signup/activate') . '/' . $user_id . '/' . $activation_code;
    $signup_link = base_url('signup/');
    $from = 'admin@madebyus4u.com';
    $to = $email;
    $subject = "MadeByUs4u.com Activation Required";
    $content =
        "<html><body>" .
        "<p><h1> Dear " . $first_name . ",</h1>" . "your registration was successful </p>" .
        "<h3>Your Activation code is:<small>" . $activation_code . "</small></h3>" .
        "<p>Please use the below link to activate your account.</p>" .
        "<p><a href=" . $activation_link . ">" . $activation_link . "</a> to activate</p>" .
        "<p>If this above does not work please click on signup link " .
        "<a href=" . $signup_link . ">  <b/>SignUp</b> </a>to resend your activation link again! </p>" .
        "</body></html>";

        $ci = get_instance();

         $template_view = '
            <div style="width: 500px;">
                <div style="background-color: #F3F3F3;border-radius: 10px 10px 00px  0px;padding:5px;">
                    <img src="' . base_url() . 'assets/images/logo.jpg' . '" alt="MadeByus4u Logo" style="padding-left:30%;"/>
                </div>
                <div style="min-height: 210px;padding: 20px;background-color: #F8F8F6;color: #8C8C8C">
                    ' . $content .
        '</div>
            <div style="background-color: #252525;padding: 0px 10px;overflow: hidden;border-radius: 0px 0px 10px  10px ;">
                <p style="color: #717171;margin-bottom: 0px;">All Right Reserved</p>
                <p style="margin-top: 0;"><a href=""http://www.madebyus4u.com" style="color: #115481;">MadeByUs4U.com</a></p>
            </div>
        </div>';

    $ci->email->from($from, 'MadeByUs4u.com');
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($template_view);
    $sent = $ci->email->send();
}

function twitter_helper($count ,$numdays) {
        $ci = &get_instance();
        $ci->load->library('twitterfetcher');

        $tweets = $ci->twitterfetcher->getTweets(array(
            'consumerKey'       => 'FeVmw5zMQSLFH0dBO6TdGIBJh',
            'consumerSecret'    => '49GuUWsqQADVWfEX9IFfrw0Uh6sWJPM8cW25HFtkIZ8ggqA3GF',
            'accessToken'       => '2371707444-fq8K4Rhnk82qg3jtirWytcyMFR9WBunzlm43GEq',
            'accessTokenSecret' => 'zD7Zmxs2uQqP344OEgwJ63rOStEKFOkwEJdtkJhQMNysb',
            'usecache'          => true,
            'count'             => intval($count),
            'numdays'           => intval($numdays)
        ));

        //var_dump($tweets);die;
       
        $twee_texts = array(); 

        foreach($tweets as $value)  {
            
          array_push($twee_texts,$value->text);

        }

        return $twee_texts; 
}

