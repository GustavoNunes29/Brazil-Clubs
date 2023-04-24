<?php

class Club
{
    public int $id;
    public array $championships;
    public string $name;
    public Stadium $stadium;
    public datetime $fundation_date;
    public string $manager;
    public string $logo;
    public string $nickname;

    public function fill(array $data): self
    {
        $this->name = $data['nome'];
        $this->logo = $data['escudos']['45x45'];
        $this->nickname = $data['abreviacao'];
        $this->id = $data['id'];

        return $this;
    }

    public function hasLogo(): bool
    {
        return !str_contains($this->logo, 'default');
    }
}
