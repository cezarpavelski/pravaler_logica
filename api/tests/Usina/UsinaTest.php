<?php

use App\Usina\Usina;
use PHPUnit\Framework\TestCase;

class UsinaTest extends TestCase
{
    public function testPerdaMenorQueOBulkPasssadoRetornarQuantosSegundosLevara(): void
    {
        $usina = new Usina();
        $this->assertEquals(109, $usina->calculate(0.10));
    }
}
