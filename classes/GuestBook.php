<?php

require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function append($text)
    {
        $this->data[] = $text;
    }

    public function save()
    {
        file_put_contents($this->path, implode("\n", $this->getData()));
    }
}