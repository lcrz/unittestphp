<?php
namespace Tests;
use App\ListParser;
use PHPUnit\Framework\TestCase;

class ListParserTest extends TestCase
{

    protected ListParser $listParser;
    protected function setUp(): void
    {
        $this->listParser = new ListParser();
    }

    /**
     * @dataProvider listasDePrueba
     */
    public function test_comprobar_listas($lista, $expectativa){         
        $lista_test = $this->listParser->parse($lista); 
        $this->assertSame($lista_test, $expectativa);         
    }

    public function listasDePrueba()
    {
        return [
            ["vba,c#,php", ["vba","c#","php"]],
            ["vba, c#,php",["vba","c#","php"]], 
            ["vba c#,php",["vba","c#","php"]]   
        ];
    }
}
