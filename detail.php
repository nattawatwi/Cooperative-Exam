<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
   $area = $_POST['area'];
   $strength = $_POST['strength'];
   $weakness = $_POST['weakness'];
   $opportunity = $_POST['opportunity'];
   $threats = $_POST['threats'];
   $landmarks = $_POST['landmarks'];
   $plant = $_POST['plant'];
   $thing = $_POST['thing'];
   $community = $_POST['community'];
   $name = $_POST['name'];
   $date = $_POST['date'];

   $sql = "UPDATE `analysis` SET `id`='$id', `area`='$area', `strength`='$strength', `weakness`='$weakness', `opportunity`='$opportunity', `threats`='$threats', `landmarks`='$landmarks', `plant`='$plant', `thing`='$thing', `community`='$community', `name`='$name', `date`='$date' WHERE id = $id"; 
  

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
  echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>SWOT Analysis</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: blue;">
    SWOT Analysis Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `analysis` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

<div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:auto; min-width:auto;">
            
         <div class="mb-3">
               <label class="form-label">การวิเคราะห์พื้นที่เป้าหมาย:</label>
               <input type="text" class="form-control" name="area" value="<?php echo $row['area'] ?>"readonly>
            </div>
            <div class="mb-3">
               <label class="form-label">จุดแข็งของพื้นที่:</label>
               <input type="text" class="form-control" name="strength" value="<?php echo $row['strength'] ?>"readonly>
            </div>
            <div class="mb-3">
               <label class="form-label">จุดอ่อนของพื้นที่:</label>
               <input type="text" class="form-control" name="weakness" value="<?php echo $row['weakness'] ?>"readonly>
            </div>
            <div class="mb-3">
               <label class="form-label">โอกาสและความท้าทายในพื้นที่:</label>
               <input type="text" class="form-control" name="opportunity" value="<?php echo $row['opportunity'] ?>"readonly>
            </div>
            <div class="mb-3">
               <label class="form-label">อุปสรรคและปัจจัยคุกคามในพื้นที่:</label>
               <input type="text" class="form-control" name="threats" value="<?php echo $row['threats'] ?>"readonly>
            </div>

            <div class="mb">
               <label class="form-label">ทรัพยากรท้องถิ่นที่สําคัญ</label>
            </div>

            <li class="mb-3">
               <label class="form-label">สถานที่ท่องเที่ยวหรือสถานที่สําคัญในพื้นที่:</label>
               <input type="text" class="form-control" name="landmarks" value="<?php echo $row['landmarks'] ?>"readonly>
            </li>
            <li class="mb-3">
               <label class="form-label">พืชเศรษฐกิจในพื้นที่:</label>
               <input type="text" class="form-control" name="plant" value="<?php echo $row['plant'] ?>"readonly>
            </li>
            <li class="mb-3">
               <label class="form-label">สิ่งที่มีมากในพื้นที่:</label>
               <input type="text" class="form-control" name="thing" value="<?php echo $row['thing'] ?>"readonly>
            </li>
            <li class="mb-3">
               <label class="form-label">กลุ่มชุมชน/วิสาหกิจชุมชน:</label>
               <input type="text" class="form-control" name="community" value="<?php echo $row['community'] ?>"readonly>
            </li>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ชื่อผู้รายงาน:</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>"readonly>
               </div>

               <div class="col">
                  <label class="form-label">วันที่:</label>
                  <input type="text" class="form-control" name="date" value="<?php echo $row['date'] ?>"readonly>
               </div>
            </div>

            
          <div>
            <div class="d-flex justify-content-center">
              <a href="index.php" class="btn btn-danger ms-2">กลับ</a>
            </div>
          </div>
         </form>
      </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>



