<?php

class Player
{
    public string $name;
    public string $position;
    public string $logo;
    public string $nickname;

    public function fill(array $data): self
    {
        $this->logo = $data['escudo_clube'];
        $this->position = $data['posicao'];
        $this->nickname = $data['Atleta']['nome'];
        $this->name = $data['Atleta']['apelido'];

        return $this;
    }
}
