<?php

namespace App\Http\TokoIkan\Infrastructure\Repository;

use App\Http\TokoIkan\Domain\Models\Ikan;
use App\Http\TokoIkan\Domain\Services\Repository\IkanRepositoryInterface;
use Illuminate\Support\Facades\DB;

class SqlIkanRepository implements IkanRepositoryInterface
{
    public function persist(Ikan $ikan)
    {
        $data = $this->createPayload($ikan);
        DB::table('ikans')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $ikan_id): ?Ikan
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Ikan $ikan)
    {
        return [
            'id' => $ikan->getId(),
            'nama' => $ikan->getNama(),
            'deskripsi' => $ikan->getDeskripsi(),
            'harga' => $ikan->getHarga(),
            'habitat' => $ikan->getHabitat()->value,
        ];
    }
}