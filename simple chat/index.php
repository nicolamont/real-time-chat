<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Simple realtime chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Cognome</label>
            <input type="text" name="lname" placeholder="Cognome" required>
          </div>
        </div>
        <div class="field input">
          <label>Indirizzo Email</label>
          <input type="text" name="email" placeholder="La tua Email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Inserisci la tua password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selezione una immagine</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Inizia a chattare">
		  <input type ="reset" name ="reset" value="Cancella tutto">
        </div>
      </form>
      <div class="link">Possiedi già un account? <a href="login.php">Accedi ora</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
