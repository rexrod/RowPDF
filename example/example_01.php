<?php
require('Row.php');

Class pdf extends Row {
    function conteudo(){
            $this->SetWidths([10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10]);
            $this->SetHeights(10);
            // Para configurações iniciais
            $this->SetFont('Arial','B',16);
            $this->SetBackgrounds(true);
            
    
            $config = [ 
                'fill' => [
                // 01
                [255,255, 255, 255,255,0,0,0,0,0,0,255,255,255,255,255],
                // 02
                [255,255,255,0,0,[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],255,0,0,0,255,255,255],
                // 03
                [255,255,0,255,255,[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],255,255,255,0,255,255],
                // 04
                [255,0,255,255,[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],255,255,255,255,0,255],
                // 05
                [255,0,255,[255,0,0],[255,0,0],255,255,255,255,[255,0,0],[255,0,0],255,255,255,0,255],
                // 06
                [0,[255,0,0],[255,0,0],[255,0,0],255,255,255,255,255,255,[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],0],
                // 07
                [0,[255,0,0],[255,0,0],[255,0,0],255,255,255,255,255,255,[255,0,0],[255,0,0],255,255,[255,0,0],0],
                // 08
                [0,255,[255,0,0],[255,0,0],255,255,255,255,255,255,[255,0,0],255,255,255,255,0],
                // 09
                [0,255,255,[255,0,0],[255,0,0],255,255,255,255,[255,0,0],[255,0,0],255,255,255,255,0],
                // 10
                [0,255,255,[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],[255,0,0],255,255,[255,0,0],0],
                // 11
                [0,255,[255,0,0],[255,0,0],0,0,0,0,0,0,0,0,[255,0,0],[255,0,0],[255,0,0],0],
                // 12
                [255,0,0,0,255,255,0,255,255,0,255,255,0,0,0,255],
                // 13
                [255,255,0,255,255,255,0,255,255,0,255,255,255,0,255,255],
                // 14
                [255,255,0,255,255,255,255,255,255,255,255,255,255,00,255,255,255],
                // 15
                [255,255,255,0,255,255,255,255,255,255,255,255,0,255,255,255],
                // 16
                [255,255,255,255,0,0,0,0,0,0,0,0,255,255,255,255]
            ]
        ];

        foreach($config as $key => $fills){

            foreach($fills as $line){
                $this->RowConfig([$key => $line]);
                
                $this->Row([' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ']);
            }
        
        }

    }
}

$pdf = new pdf();
$pdf->AddPage('L');
$pdf->conteudo();
$pdf->Output();


?>