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

<div class="emp">
      <small>Note:&nbsp;&nbsp;<em>This questionnaire allowed the school to understand the factors that impact a activity, class, including the instructor,
        the students, the environment, or even the curriculum. It also helps bring greater structure to any research, which can help 
        our school to maximize the success of making decisions. </em></small>
</div> 

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
<div class="guidance">
  <h3><?php echo $title; ?></h3>
  <p class="small">Guidance and Counseling Office</p>
  <p class="date">Date: <?php echo date("M d,Y") . "<br>";?> </p>
</div>
<!---  Header  --->

<?php


if(isset($_POST['save_multiple_data']))
{
    $question = $_POST['question'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $title = $_POST['title'];
    $i = 1;
    foreach($question as $index => $questions)
    {



      
      if ($i > 5) {

        echo "
        
        <div class='page-break'>
        </div>

        <div class='emp'>
      <small>Note:&nbsp;&nbsp;<em>This questionnaire allowed the school to understand the factors that impact a activity, class, including the instructor,
        the students, the environment, or even the curriculum. It also helps bring greater structure to any research, which can help 
        our school to maximize the success of making decisions. </em></small>
</div> 
        
        ";

        
       
      }
    
        ?>
  
  <p>Question&nbsp;<?php echo $i++;?>.)&nbsp; <?php echo $questions; ?></p> 
          <div class="column" >
            <table class="row">
              <tr class="column">
                <td class=""><input class="" type="checkbox"></td>
                <td class=""><?php echo $answer1[$index]; ?></td>
              </tr>
              <tr class="column">
                <td class=""><input class="" type="checkbox"></td>
                <td class=""><?php echo $answer3[$index]; ?></td>
              </tr>

            </table>
          </div>
          <div class="column" >
            <table class="row">
              <tr class="column">
                <td class=""><input class="" type="checkbox"></td>
                <td class=""><?php echo $answer2[$index]; ?></td>
              </tr>
              <tr class="column">
                <td class=""><input class="" type="checkbox"></td>
                <td class=""><?php echo $answer4[$index]; ?></td>
              </tr>
          </table>
          </div>

        

        <?php 
    }



}
?>




<style>

  /*   Header  */
    .img1{
     position:absolute;
     margin-top: 30px;
     margin-left: 60px;
    }
    .guidance{
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
  
    .emp{
      position: absolute;
      bottom: 1px;
    }
  
    .page-break{
        page-break-before:always;
    }
    .column{
      width: 50%;
      float: left;
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