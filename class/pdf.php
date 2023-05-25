<?php


include('fpdf/fpdf.php');
class pdf {    
    /**
     * pdf
     *
     * @var FPDF
     */
    private $pdf ;    
    

        
    /**
     * __construct
     *
     * @return void
     */
    function __construct(){
        ob_start();
        $this->pdf = new FPDF();
        $this->pdf->AddPage();
        
        
        
        
    }    
    /**
     * Header
     *
     * @param  string $img chemain de l'image
     * @param  string $logo1 chemain du logo1
     * @param  mixed $logo2 chemain du logo2
     * @return void
     */
    function Header($img,$logo1,$logo2)
{
    ob_start();
    $this->pdf->SetFont('Arial','B',30);
    $this->pdf->Image($logo1,10,10,30,30);
    $this->pdf->Image($logo2,160,4,50,50);
    $this->pdf->Ln(60);
    $this->pdf->Cell(70);
    $this->pdf->Cell(50,50,$this->pdf->Image($img,80,70,50,50),1,0,'C',0,);
    $this->pdf->Ln(20);
    
}
/**
 * Footer
 *
 * @return void
 */
function Footer()
{
    $this->pdf->AliasNbPages();
    $this->pdf->SetY(260);
    $this->pdf->SetFont('Arial','I',20);
    $this->pdf->Cell(0,10,'Page '.$this->pdf->PageNo().'/{nb}',0,0,'C');
    
}
/**
 * setTab
 *
 * @param  int $n nobre de lignes
 * @param  string[] $lab labele
 * @param  mixed[] $tab valeur
 * @param  float $taille size
 * @return void
 */
function setTab($n,$lab,$tab,$taille)
{
    ob_start();
    $this->pdf->SetFont('Arial','B',$taille);
    $this->pdf->Ln(50);
    $this->pdf->Cell(-5);
    $i=0;
    for($i=0;$i<$n;$i++){
    $this->pdf->Cell(40,20,$lab[$i],1,0,'C',0,);
    $this->pdf->Cell(160,20,$tab[$i],1,0,'C',0);
    $this->pdf->Ln();
    $this->pdf->Cell(-5);
    }
}
/**
 * fin
 *
 * @return void
 */
function fin(){
    $this->pdf->Output();
}
}
?>