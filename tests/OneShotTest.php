<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Service\BuildService;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\InputBag;
use Symfony\Component\HttpFoundation\HeaderBag;
use App\Models\BuildMall;

use Tests\Dispatcher\EventDispatcher;
use Tests\Dispatcher\Event;
use Tests\Dispatcher\Logger;
use Tests\Dispatcher\Observer;
use Tests\Dispatcher\OnboardingNotification;
use Tests\Dispatcher\User;
use Tests\Dispatcher\UserRepository;

use Tests\Handler\Dispatcher;
use Tests\Handler\FirstHandler;
use Tests\Handler\SecondHandler;

use Tests\Game\Glass;
use Tests\Game\Philosopher;

class OneShotTest  extends TestCase
{
    protected $kernel;

    public $system;

    public function setUp(): void
    {
        $app = require __DIR__ . '/../bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();
        $this->kernel = $app;
        $this->system = [
            'jacke' => 'diamonds',
            'queen' => 'queen@hearts.com',
            'king' => '$informac/ia$nujnaya? {{{lddl}}}',
            'dolly' => 'dolores404'
        ];
    }

    public function xxtestShotKedavra()
    {
        var_dump ('--- avada  object---');
        $this->assertTrue(true);

        $jacke = new Philosopher('Jacke');

        $queen = new Philosopher('Queen');
        $queen->setMessage('hey, hello! ');

        $jacke->setMessage($queen->getMessage());
        
        var_dump ($jacke);
        
    }
  

}

