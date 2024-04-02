<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BuildMall;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Service\BuildService;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\InputBag;
use Symfony\Component\HttpFoundation\HeaderBag;


class CyberTest extends TestCase
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

    public function testAvadaKedavra()
    {
        $this->assertTrue(true);
        var_dump ('---avada  requestuz---');

        

    }

    public function dldltestMagicGO()
    {
        $this->assertTrue(true);
        var_dump ('---avada requestuz---');

        $system = [
            'jacke' => 'diamonds',
            'queen' => 'some@value.com',
            'king' => '$informac/ia$nujnaya? {{{lddl}}}',
            'dolly' => 'dolores404'
        ];

        $bag = new ParameterBag($system);

        $iterator = $bag -> getIterator();
        

        $info = $bag->filter('queen', 'queen', FILTER_VALIDATE_EMAIL);
        var_dump ($info);

        //$res = filter_var($email, FILTER_VALIDATE_EMAIL) ? true : throw new \Exception('email not right! error');
        //var_dump ($res);;

        
    }

    function custom_email_filter($email)
    {
        $res = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : false;
        return $res;
    }

    public function ixstestAvadaKedavra()
    {
        $this->assertTrue(true);
        var_dump ('---avada requestuz---');

        //$request = new Request;

        //$info = $request->initialize();
        //var_dump ($info);

        $system = [
            'jacke' => 'diamonds',
            'queen' => '4040dda4040 4040alsj 404234',
            'king' => '$informac/ia$nujnaya? {{{lddl}}}',
            'dolly' => 'dolores404'
        ];

        $bag = new ParameterBag($system);

        /// сфира вернет содержимое массива из сумки
        //$all = $bag -> all();
        //var_dump ($all);
        /*
        $keys = $bag->keys();
        //var_dump ($keys);

        //$bag -> replace(['neo' => 'matrix']);

        $bag->add(['jacke' => 'blackJacke']);

        $info = $bag -> get('queens', 'jacke');
        //var_dump ($info);

        $bag -> set('elexir','alihimika');

        //$bag -> remove('jacke');
        //var_dump ($bag);

        $info = $bag->getAlpha('dolly');
        var_dump ($info);


        $info = $bag->getDigits('queen');
        var_dump ($info);

        $info = $bag -> getAlnum('king');
        var_dump ($info);

        $info = $bag->filter('dolly');
        //var_dump ($info);

        $number = 10; // 1010
        $mask = 2; // 0010

        
        if ($number & $mask) {
            echo "Byte 2 setup";
        } else {
            echo "Byte 2 not setup";
        }

        echo "\n\n";

        $decimalNumber = 15;
        $binaryNumber = decbin($decimalNumber);

        //var_dump ($binaryNumber);

        $_binaryNumber = '0111';
        //$info = bindec($_binaryNumber);
        //var_dump ($info);
        $i = 7;

        var_dump ($_binaryNumber & $i);
        */

        $bold = 0b0001;
        var_dump ($bold);
        $italic = 0b0010;
        var_dump ($italic);
        $underline = 0b0100;
        var_dump ($underline);

        $isBold = $bold | $underline;
        var_dump ($isBold);
        
        if ($isBold & $bold) {
            var_dump ("is bold");
        }

        if ($isBold & $underline) {
            var_dump ("is underline");
        }

        if ($isBold & $italic) {
            var_dump ("is italic");
        }


        die();
        $first = 10;
        $second = 201;

        $info = $first & ~$second;
        var_dump ($info);die();

        $first = decbin($first);
        $second = decbin($second);

        $info = $first & $second;
        $info = bindec($info);

        //var_dump ($info);
        
    }

}
