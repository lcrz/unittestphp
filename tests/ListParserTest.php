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


    public function test_funciona_con_listas_separadas_por_coma(){

        $lista_array = ["vba","c#","php"];
        $lista_test = $this->listParser->parse("vba,c#,php");         

        $this->assertSame($lista_test,$lista_array);
         
    }

    public function test_funciona_con_listas_separadas_por_coma_y_espacio(){

        $lista_array = ["vba","c#","php"];
        $lista_test = $this->listParser->parse("vba, c#,php");         

        $this->assertSame($lista_test,$lista_array);
         
    }

    public function test_funciona_con_listas_separadas_por_coma_y_o_espacio(){

        $lista_array = ["vba","c#","php"];
        $lista_test = $this->listParser->parse("vba c#,php");         

        $this->assertSame($lista_test,$lista_array);
         
    }
}
