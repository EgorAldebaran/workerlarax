<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BuildMall;

class MaterialTest extends TestCase
{
    protected $kernel;

    public function setUp(): void
    {
        $app = require __DIR__ . '/../bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();
        $this->kernel = $app;
    }

    public function testGetOneMaterials()
    {
        $id = 4;
        $material = BuildMall::find($id);

        $this->assertEquals($material->id, 4);
    }

}
