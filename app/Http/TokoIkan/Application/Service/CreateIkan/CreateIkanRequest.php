<?php

namespace App\Http\TokoIkan\Application\Service\CreateIkan;

use App\Http\TokoIkan\Domain\Enums\HabitatIkan;

class CreateTokoIkanRequest
{
    public function __construct(
        private string $nama,
        private string $deskripsi,
        private float $harga,
        private HabitatIkan $habitat,
    )
    {
    }

    // create get method for all variables
    public function getNama(): string
    {
        return $this->nama;
    }
    public function getDeskripsi(): string
    {
        return $this->deskripsi;
    }
    public function getHabitat(): HabitatIkan
    {
        return $this->habitat;
    }
    public function getHarga(): float
    {
        return $this->harga;
    }

}