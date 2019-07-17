<?php ?>

 <header id="header">

    <div class="user-info d-flex">
      <i class="far fa-user"></i>
      <h3><?php echo $_SESSION['user']['username']; ?> <span id="user-type">(<?php echo $_SESSION['user']['user_type']; ?>)</span> </h3>
    </div>

    <ul class="d-flex flex-column ">
      <li><i class="fas fa-home"></i><a href="../index.php">Accueil</a></li>
      <li><i class="far fa-bell"></i><a href="../notification.php">Notifications</a></li>
      <li><i class="fas fa-cog"></i><a href="">Parametres</a></li>
      <li><i class="fas fa-sign-out-alt"></i><a href="../index.php?logout='1'">Déconnection</a></li>
    </ul>
    <div class="logo"><a href="../index.php"><img src="../assets/img/logo.png" class="img-fluid" height="145" width="186" alt=""></a></div>

  </header>