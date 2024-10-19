
<?php 
  session_start();
  include_once '../../controllers/e-consulting/consultationC.php';
?>

<?php require './header.php';?>
  <!-- Side Navbar -->
  <?php require './sideNavBar.php'?>
  <div class="page">
    <!-- navbar-->
    <?php require './headerContent.php'; ?>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Animaux</li>
            </ul>
          </div>
          <div class="col-sm-9">

          </div>
        </div>
      </div>
    </div>
    
    <section>
      <div>
      <?php
          if(isset($_SESSION['message'])):
        ?>
    <div class="alert-msg alert alert-<?=$_SESSION['msg_type'];?>">
      <p class="alert-msg">
      <?php echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </p>  
  </div>
    <?php endif ?>
      <div class="container-fluid">
        <!-- formulaire ajouter produit-->
        <h1 class="titre1">GERER VOS CONSULTATIONS</h1>
        <table class="table  table-hover" id="table_data">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Objet</th>
                <th scope="col">Type animal</th>
                <th scope="col">Age</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <?php
              $consultationCtrl = new consultationC();
              $rows = $consultationCtrl->getAllCon();
              $i=1;
              foreach($rows as $row) :
            ?>
              <tbody>
                <td><?=$i++;?></td>
                
                <td><?=$row['Objet']; ?></td>
                <td><?=$row['type_animal']; ?></td>
                <td><?=$row['age']; ?></td>
                <td><?=$row['description_con'];?></td>
               
                <td>
                    <!--a href="../../public/util/processProd.php?edit=<?php echo $row['id_consultation'] ?>">
                      <i class="far fa-edit"></i>
                    </!--a-->  
                    <a href="../../public/util/processConsultation.php?delete=<?php echo $row['id_consultation'] ?>">
                      <i class="fas fa-trash-alt"></i> 
                    <a>
                </td>
              </tbody>
            <?php endforeach ?>
          </table>
          
      </div>
      </div>
    </section>
    <?php require './footerContent.php'; ?>
  </div>
  <?php require './script.php' ?> 
</body>
</html>
