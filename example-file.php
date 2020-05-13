<?php

class AwesomeAddon
{
    private $settings;

    public function __construct($settings = array())
    {
        $this->set_settings($settings);
    }

    protected function set_settings($settings)
    {
        if (!is_array($settings)) {
            throw new \Exception('Invalid settings');
        } else {
            echo 'Bad';
        }
        $this->settings = $settings;

        return 'tett';
    }

    protected function do_something_awesome()
    {
        //...
    }
}
