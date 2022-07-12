<?php
require_once('tcpdf_include.php'); 
include '../Includes/ligamysql.php';
$sql= 'select * from Utilizador';
$res = $lig->query($sql);


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
/*Conteúdo que irá aparecer no PDF*/
$html= "
<div class='wrapper'>

  <section class='invoice'>
  
    <div class='row'>
      <div class='col-12'>
        <h2 class='page-header'>
          <i class='fas fa-globe'></i> KamiWatch, Inc.
          <small class='float-right'>Date: 2/10/2014</small>
        </h2>
      </div>
    <div class='row'>
      <div class='col-12 table-responsive'>
        <table class='table table-striped'>
          <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Foto</th>
          </tr>
          </thead>
          <tbody>";
          while ($lin=$res->fetch_array()){
          $html.= '
          <tr>
            <td>' . $lin [NumUti] . '</td>
            <td>' . $lin [NomeUti] . '</td>
            <td>' . $lin [LoginUti] . '</td>
            <td>' . $lin [DatanascUti] . '</td>
            <td> <img src="../'. $lin [FotoUti]. '" width="60px" height="59px"></td>
            
          </tr>
          ';
          }
          $html.= " 
          </tbody>
        </table>
      </div>
      <div>";
   
    /*
    </div>


    <div class='row'>
 
      <div class='col-6'>
        <p class='lead'>Payment Methods:</p>
        <img src='/dist/img/credit/visa.png' alt='Visa'>
        <img src='/dist/img/credit/mastercard.png' alt='Mastercard'>
        <img src='/dist/img/credit/american-express.png' alt='American Express'>
        <img src='/dist/img/credit/paypal2.png' alt='Paypal'>

        <p class='text-muted well well-sm shadow-none' style='margin-top: 10px;'>
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
          jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>

      <div class='col-6'>
        <p class='lead'>Amount Due 2/22/2014</p>

        <div class='table-responsive'>
          <table class='table'>
            <tr>
              <th style='width:50%'>Subtotal:</th>
              <td>$250.30</td>
            </tr>
            <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>$265.24</td>
            </tr>
          </table>
        </div>
      </div>
 
    </div>
  
  </section>
 
</div>

</body>
</html>";
*/
//include 'html_pdf.html';
  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdf->Output('1º_PDF', 'I');

//echo $html; 

?>

<!----------------------------------------------------------------

-->