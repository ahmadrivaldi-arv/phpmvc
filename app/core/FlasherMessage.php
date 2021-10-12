<?php


class FlasherMessage{



    /* 
    |-------------------------------------------------------
    | @Set Flasher Message
    |-------------------------------------------------------
    |
    | Configure/Set the message to variable $message put your text
    | do you want to show.
    |
    */

    public static function setMessage($message,$action,$type)
    {

        $_SESSION['message'] = [
            "msg_text" => $message,
            "msg_action" => $action,
            "msg_type" => $type
        ];

    }


    /* 
    |--------------------------------------------------------
    | @Show Message
    |--------------------------------------------------------
    |
    | This function aims to display messages that have been set
    | previously set in the function setMessage().
    |
    |
    */ 
    public static function showMessage()
    {

        if(isset($_SESSION['message']))
        {
            echo '<div class="alert alert-'. $_SESSION['message']['msg_type'] .' alert-dismissible fade show" role="alert">
            <strong>'. $_SESSION['message']['msg_action'] .'!</strong> '. $_SESSION['message']['msg_text'] .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            // echo("<script>showToast()</script>");
          unset($_SESSION['message']);
        }
    }
}