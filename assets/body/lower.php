
    </main>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!----- ionicons cdn link----->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




<script>
// Set a timeout for 10 minutes (600000 milliseconds)
const timeout = setTimeout(function() {
  // Refresh the page to log out the user
  location.reload();
  window.location.href = "logout";
}, 600000);

// If the user performs an action before the timeout, reset the timer
document.addEventListener("mousemove", function() {
  clearTimeout(timeout);
  timeout = setTimeout(function() {
    location.reload();
    window.location.href = "logout";
  }, 600000);
});

</script>

<script> 
// JavaScript code
function updateTime() {
  const now = new Date();
  const time = now.toLocaleTimeString();
  const date = now.toLocaleDateString();
  const dateTimeString = `${date} ${time}`;
  document.getElementById("time").innerHTML = dateTimeString;
}
// Update the time every second
setInterval(updateTime, 1000);
</script>

<?php

    if(isset($_SESSION['stats']) && $_SESSION['stats_code'] != ""){
      ?>
    <script>
    swal({
  title: "<?php echo $_SESSION['stats'] ?>",
// text: "You clicked the button!",
  icon: "<?php echo $_SESSION['stats_code'] ?>",
  button: "OKAY!",
});
</script>
<?php 
unset($_SESSION['stats']);
    }
?>



  </body>
</html>
