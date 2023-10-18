<?php

namespace App\Http\TokoIkan\Domain\Enums;

enum HabitatIkan : string
{
    case Tawar = 'air_tawar';
    case Laut = 'air_asin';
    case Payau = 'air_payau';
}