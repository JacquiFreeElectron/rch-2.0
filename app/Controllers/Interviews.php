<?php

namespace App;

class Interviews
{
    # Properties
    private $interviews = [];

    # Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->interviews;
    }

    public function getById(int $id)
    {
        return $this->interviews[$id] ?? null;
    }

    
}