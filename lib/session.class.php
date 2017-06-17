<?php

class Session
{
    public static $flash_message;

    /**
     * @param $message
     */
    public static function setFlashMessage($message)
    {
        self::$flash_message = $message;
    }

    /**
     * @return bool
     */
    public static function hasFlash()
    {
        return !is_null(self::$flash_message);
    }

    public static function flash()
    {
        echo self::$flash_message;
        self::$flash_message = null;
    }


}