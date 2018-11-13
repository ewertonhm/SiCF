<?php

require_once '\..\controllers\controllers.php';
require_once '\..\models\classes.php';

class Grafico {
    public $Graph;
    
    public function __construct() {
        $this->Graph = new PHPlot($width = 600, $height = 400);
        $this->Graph->SetFileFormat('png');
        $this->Graph->SetTitle('exemplo');
        $this->Graph->SetXTitle('Exito X');
        $this->Graph->SetYTitle('Eixo Y');
        $this->drawbars();
    }
    
    private function drawfromdata(){
        $dados = array(
            array('Janeiro', 10),
            array('Fevereiro', 5),
            array('Março', 4),
            array('Abril', 8),
            array('Maio', 7),
            array('Junho', 5),
            );
        $this->Graph->SetDataValues($dados);
        $this->Graph->DrawGraph();
    }
    
    private function drawbars($param) {
        $dados = array(
            array('Janeiro', 10),
            array('Fevereiro', 5),
            array('Março', 4),
            array('Abril', 8),
            array('Maio', 7),
            array('Junho', 5),
            );
        $this->Graph->SetDataValues($dados);
        $this->Graph->SetPlotType("bars");
        $this->Graph->DrawGraph();
    }
}
