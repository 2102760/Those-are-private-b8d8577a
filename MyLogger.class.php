<?php

class MyLogger
{
    public function log($message, $type)
    {
        switch ($type) {
            case 'error':
                $this->error($message);
                break;
            case 'debug':
                $this->debug($message);
            case 'notice' || 'info':
                $this->notice($message);
                break;
            case 'warning':
                $this->warning($message);
                break;
            default:
                error_log('unknown log type');
        }
    }

    public function error($message)
    {
        error_log('Error: ' . $message);
    }

    public function debug($message)
    {
        error_log('Debug: ' . $message);
    }

    public function notice($message)
    {
        error_log('Notice: ' . $message);
    }

    public function warning($message)
    {
        error_log('Warning: ' . $message);
    }
}

?>