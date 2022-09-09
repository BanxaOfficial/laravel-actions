<?php

use DragonCode\LaravelActions\Action;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

return new class () extends Action
{
    public function up(): void
    {
        throw new Exception('Custom exception');
    }

    public function down(): void
    {
        throw new Exception('Custom exception');
    }

    public function failed(): void
    {
        $this->table()->insert([
            'value' => Uuid::uuid4(),
        ]);
    }

    protected function table(): Builder
    {
        return DB::table('failed');
    }
};
