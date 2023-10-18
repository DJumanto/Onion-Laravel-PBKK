<?php

namespace App\Http\TokoIkan\Infrastructure\Repository;

use App\Http\TokoIkan\Domain\Models\Ikan;
use App\Http\TokoIkan\Domain\Services\Repository\IkanRepositoryInterface;
use Illuminate\Support\Facades\DB;

class SqlIkanRepository implements IkanRepositoryInterface
{
    public function persist(Ikan $ikan)
    {
    }
}