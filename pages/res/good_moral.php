<?php
session_Start();
include '../../includes/sms_db.php';
// inlucde auto loader
require_once '../../dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options;
$options->setChroot(__DIR__);

$pdf = new Dompdf($options);


// make the content here
// using output buffer
ob_start();
?>


<?php
if(isset($_POST['save_multiple_data']))
{
    $fname = $_POST['fname'];
    $stud_lname = $_POST['lname'];
    $initial = $_POST['initial'];
    $suffix = $_POST['suffix'];
    $year1 = $_POST['year1'];
    $year2 = $_POST['year2'];
    $course_strand = $_POST['course_strand'];
    $grade_year = $_POST['grade_year'];

    foreach($fname as $index => $stud_fname)
    {
        ?>

<!---  Header  --->
<table class="header" style="width:100%">
  <thead>
    <tr>
      <th class="img1"><img style="width:50px;" src="logo.jpg"></th>
      <th><h1>BESTLINK COLLEGE OF THE PHILIPPINES</h1>
      <p class="address">#1071 Brgy. Kaligayahan, Quirino Hi-way. Novaliches Quezon City</p>
      </th>
      <th><img style="width: 120px;" src="deped.jpg"></th>
    </tr>
  </thead>
</table>
<div class="guidance">
  <h3>CERTIFICATE OF GOOD MORAL CHARACTER</h3>
  <p class="small">Guidance and Counseling Office</p>
</div>
<div class="concern">
  <p><b>TO WHOM IT MAY CONCERN:</b></p> 
</div>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    This is to certify <b><?php echo $stud_lname . ','; echo "&nbsp;"; echo $stud_fname; echo "&nbsp;"; echo $initial. '. &nbsp;'; echo $suffix; ?></b> is a bonafide <?php echo $grade_year;  echo '&nbsp;'; echo $course_strand;?> student
  of Bestlink College of the Philippines, School Year &nbsp;<?php echo $year1; ?>-<?php echo $year2; ?>.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    This further certifies that he/she is a law abiding pupil with good moral character having not subjected to disciplinary action while a student in this school.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Issued upon request of the interested party for whatever legal purpose it may serve him/her</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Given this day of&nbsp;<?php echo date("M d, Y");?>&nbsp;at Bestlink College of the Philippines.</p>
<!---  Header  --->
<div class="principal">
  <p>Name of the Principal<br>
  <b>Principal</b></p>
</div>
        <?php
    }
}
?> 

<div class="footer"> 
  <div class="space">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  <table>
    <tr>
      <th><img style="width:80px;" src="guidance.jpg"></th>
      <th>Guidance and Counseling<br>Department</b></th>
    </tr>
  </table>
</div>

<style>

  /*   Header  */
    .img1{
     width: 100px;
    }
    .guidance{
      text-align: center;
      margin-bottom: 50px;
    }
    .small{
      margin-top: -10px;
      text-align: center;
    }

  /*  Header   */
  .header{
    border-bottom: 3px solid black;
    margin-bottom: 50px ;
  }
  .concern{
    margin-bottom: 50px;
  }
  .footer{
    border-top: 3px solid black;
    position:absolute;
    bottom: 0%;
  }
  .principal{
    text-align: center;
    position: absolute;
    right:5%;
    margin-top: 100px;
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