<?php
session_Start();

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
  <h3>Individual Counseling Report</h3>
  <p class="small">Guidance and Counseling Office</p>
  <p class="date">Date: <?php echo date("M d,Y") . "<br>";?> </p>
</div>
<!---  Header  --->

      <table class="table_data">
            <thead>
              <tr class="tr_data">
                <th class="th_data">ID</th>
                <th class="th_data">Student Number</th>
                <th class="th_data">Student Name</th>
                <th class="th_data">Counseling Type</th>
                <th class="th_data">Status</th>
                <th class="th_data">Approach</th>
              </tr>
            </thead>
         <tbody>

         <?php
         require '../../includes/sms_db.php';
      $rows = mysqli_query($conn, "SELECT * FROM guidance_individual")
      ?>
      <?php foreach ($rows as $row) : ?>
      <tr class="tr_data" >
        <td class="td_data"><?php echo $row["indv_id"]; ?></td>
        <td class="td_data"><?php echo $row["stud_id"];?></td>
        <td class="td_data"><?php echo $row["name"]; ?></td>
        <td class="td_data"><?php echo $row["course_year_section"]; ?></td>
        <td class="td_data"><?php echo $row["status"]; ?></td>
        <td class="td_data"><?php echo $row["approach"]; ?></td>
      </tr>
      <?php endforeach; ?>
          </tbody>
        </table>

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

    .table_data, .th_data, .td_data{
    border:1px solid black;
    }
    .table_data{
        border-collapse: collapse;
        width: 100%;
        text-align: center;
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