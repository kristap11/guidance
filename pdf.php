<?php
session_Start();

// inlucde auto loader
require_once 'dompdf/autoload.inc.php';


// Reference the Dompdf namespace
use Dompdf\Dompdf;

$pdf = new Dompdf();

// make the content here
// using output buffer

ob_start();
?>

<h1>Information</h1>
    Name: <label for="staticEmail" class="text-primary" id="staticEmail"><?php echo $_SESSION['name']; ?></label><br>
    Age: <label for="staticEmail" id="staticEmail"><?php echo $_SESSION['age']; ?></label>


<div class="page-break">
    <h1>This should be on new page</h1>
    Another content
</div>

<style>
    .page-break{
        page-break-before: always;
    }   
</style>
<?php
$html=ob_get_clean();

$pdf->loadhtml($html);

//(Optional) Setup the paper size and orientation
$pdf->setPaper('A4','portrait');

// Rendder the HTML or PDF
$pdf->render();

// Outout the generated PDF to Browser   (Always stream it)                       
$pdf->stream('result.pdf', Array('Attachment'=>0));

?>