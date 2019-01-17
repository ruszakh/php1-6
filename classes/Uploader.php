<?php

class Uploader
{
    public $formName;

    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->formName])) {
            return true;
        }
    }

    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../images/' . $_FILES[$this->formName]['name']
            );
        }
    }
}