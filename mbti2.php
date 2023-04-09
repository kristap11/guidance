<?php include("includes/sms_db.php");  ?>
<?php
  $number = 14;
 ?>

<?php 
  include 'assets/body/upper.php';
?>

<section class="home-section ms-3 p-3 text-dark" style="background-color:#edf2f9;">
<!-------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
<form action='pprocess2.php' method='post'>
  <div class="card border-0 rounded-0 shadow">
    <div class="container card-body p-5">
      <div class="text-center">
        <h4 class="fw-bold"><ion-icon name="cog-sharp"></ion-icon>Personality Test</h4> 
        <label class="">Set 2: Answer The following</label> 
      </div>
     <?php while($number!=7): ?>
      <div class="mt-3">
        <?php $query = "select question from `guidance_mbti` where qid = $number";
              $result = $conn->query($query) or die($conn->error.__LINE__);
              $question = $result->fetch_assoc();?>   
   
      <label><?php echo $question['question']; ?></label><br>
      <label class="choice border-0 p-1 rounded-5" style="background-color:#e6e6fa">
        <?php $query1 = "select option1 from `guidance_mbti` where qid = $number";
                  $result = $conn->query($query1) or die($conn->error.__LINE__);
                  $choice1 = $result->fetch_assoc(); ?>
        <input type="radio" name="answer<?php echo $number?>" value="A" required/>
        <span><?php echo $choice1['option1'];?></span>
      </label>
      <label class="choice border-0 p-1 rounded-5" style="background-color:#BAD7E9">
         <?php $query2 = "select option2 from `guidance_mbti` where qid = $number";
                  $result = $conn->query($query2) or die($conn->error.__LINE__);
                  $choice2 = $result->fetch_assoc(); ?>
        <input type="radio" name="answer<?php echo $number?>" value="B" required/>
        <span><?php echo $choice2['option2'];?></span>
      </label>
      </div>
     <?php $number--;
              endwhile; ?> 
      <div class="d-flex justify-content-between pt-3">
      <a class="btn btn-primary btn-sm" href="mbti1.php" role="button"><ion-icon name="caret-back-sharp"></ion-icon>Back</a>
      <button class="btn btn-primary btn-sm button-submit " onclick="check()" type="submit"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button>
      </div>
    </div>
  </div>
</form>
 <!-------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->   
 </section>
     

 <?php
  include 'assets/body/lower.php';
?>
