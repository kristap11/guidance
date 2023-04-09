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
if (isset($_POST['save_multiple_data'])) { 
  $title = $_POST['title'];
}
?>

<!---  Header  --->
<table style="width:100%">
  <thead>
    <tr>
      <th><img class="img1" style="width:50px;" src="logo.jpg"></th>
      <th><h1>BESTLINK COLLEGE OF THE PHILIPPINES</h1>
      <p class="address">#1071 Brgy. Kaligayahan, Quirino Hi-way. Novaliches Quezon City</p>
      </th>
      <th><img style="width: 90px;" src="guidance.jpg"></th>
    </tr>
  </thead>
</table>
<div class="vision_mission">
  <p class="vision"><b>Vision:</b> Bestlink College of the Philippines is Commited to provide and promote quality education,
   with a unique, modern and research-based curriculum with delivery system towards excellence.</p>
  <p class="mission"><b>Mission:</b> To produce self-motivated and self-directed individual who aims for academic excellence, 
  God fearing, peaceful, wealthy, productive and successful citizens.</p>
</div>
<div class="title_date">
  <h3><?php echo $title; ?></h3>
  <p class="small">Guidance and Counseling Office</p>
  <p class="date">Date: <?php echo date("M d,Y") . "<br>";?> </p>
</div>
<!---  Header  --->

<table class="table_question">
  <thead>
    <tr>
      <th class=""></th>
      <th class="th_question">Strongly disagree</th>
      <th class="th_question">Disagree</th>
      <th class="th_question">Neither agree nor disagree</th>
      <th class="th_question">Agree</th>
      <th class="th_question">Strongly agree</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_POST['save_multiple_data']))
    {
        $question = $_POST['question'];
        $i = 1;
        foreach($question as $index => $questions)
        {


            ?>
      <tr>
        <td class="td_question">Q<?php echo $i++;?>.)&nbsp; <?php echo $questions; ?></td>
        <td class="td_center"><input type="checkbox"></td>
        <td class="td_center"><input type="checkbox"></td>
        <td class="td_center"><input type="checkbox"></td>
        <td class="td_center"><input type="checkbox"></td>
        <td class="td_center"><input type="checkbox"></td>
      </tr>        
            <?php
        }
    }
    ?>
  </tbody>
</table>

<div class="emp">
      <small>Note:&nbsp;&nbsp;<em>This questionnaire allowed the school to understand the factors that impact a activity, class, including the instructor,
        the students, the environment, or even the curriculum. It also helps bring greater structure to any research, which can help 
        our school to maximize the success of making decisions. </em></small>
  </div>  
<style>

  /*   Header  */
    .img1{
     position:absolute;
     margin-top: 30px;
     margin-left: 60px;
    }
    .title_date{
      text-align: center;
    }
    .small{
      margin-top: -10px;
      text-align: center;
    }
    .address{
      position: absolute;
      margin-top: -15px;
      margin-left: 30px;
    }
    .mission{
      text-align: center;
    }.vision{
      text-align: center;
    }
    .date{
      margin-left: 81%;
    }
  /*  Header   */

    .table_question{
      width: 100%;
      page-break-after: auto;
    }
    .th_question, .td_question{
      border: 1px solid;
     
    }
    .td_center{
      text-align:center;
    }
    .emp{
      position: absolute;
      bottom: 1px;
    }
    .td_question{
        width: 70%;
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