<?php

namespace App\Http\TokoIkan\Domain\Services\Repository;

use App\Http\TokoIkan\Domain\Models\Ikan;

interface IkanRepositoryInterface
{
    public function persist(Ikan $ikan);

    public function getById(int $ikan_id): ?Ikan;

}