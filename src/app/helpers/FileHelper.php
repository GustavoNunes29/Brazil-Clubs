<?php

class FileHelper
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function getData(): array
    {
        $data = file_get_contents($this->getPath());
        return json_decode($data, true);
    }

    private function getPath(): string
    {
        return sprintf('%s/../../data/%s', __DIR__, $this->filename);
    }
}
