<?php
namespace Tests;
use App\ListParser;
use PHPUnit\Framework\TestCase;

class ListParserTest extends TestCase
{
    public function test_funciona_con_listas_separadas_por_coma(){

        $parser = new ListParser("vba");
     
        $lista_array = ["vba","c#","php"];
        $lista_test = $parser->parse("vba,c#,php");

         

        $this->assertSame($lista_test,$lista_array);
         
    }

    public function test_funciona_con_listas_separadas_por_coma_y_espacio(){

        $parser = new ListParser("vba");
     
        $lista_array = ["vba","c#","php"];
        $lista_test = $parser->parse("vba, c#,php");         

        $this->assertSame($lista_test,$lista_array);
         
    }

    public function test_funciona_con_listas_separadas_por_coma_y_o_espacio(){

        $parser = new ListParser("vba");
     
        $lista_array = ["vba","c#","php"];
        $lista_test = $parser->parse("vba c#,php");         

        $this->assertSame($lista_test,$lista_array);
         
    }
}
