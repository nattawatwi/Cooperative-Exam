<?php
include "db_conn.php";

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


   // SQL query for inserting into

   $sql = "INSERT INTO `analysis`(`id`, `area`, `strength`, `weakness`, `opportunity`, `threats`, `landmarks`, `plant`, `thing`, `community`, `name`, `date`) 
   VALUES (NULL,'$area','$strength','$weakness','$opportunity','$threats','$landmarks','$plant','$thing','$community','$name','$date')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=บันทึกเสร็จสิ้น");
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

   <title>SWOT Analysis Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: blue;">
      SWOT Analysis Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>เพิ่มรายงานการวิเคราะห์พื้นที่</h3>
         <p class="text-muted">รายงานการวิเคราะห์พื้นที่</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:auto; min-width:auto;">
            
         <div class="mb-3">
               <label class="form-label">การวิเคราะห์พื้นที่เป้าหมาย:</label>
               <input type="text" class="form-control" name="area" placeholder="SWOT Analysis">
            </div>
            <div class="mb-3">
               <label class="form-label">จุดแข็งของพื้นที่:</label>
               <input type="text" class="form-control" name="strength" placeholder="พื้นที่มีจุดเด่นและความเข้มแข็งอะไรบ้าง">
            </div>
            <div class="mb-3">
               <label class="form-label">จุดอ่อนของพื้นที่:</label>
               <input type="text" class="form-control" name="weakness" placeholder="พื้นที่มีปัญหาและความไม่เข้มแข็งอะไรบ้าง">
            </div>
            <div class="mb-3">
               <label class="form-label">โอกาสและความท้าทายในพื้นที่:</label>
               <input type="text" class="form-control" name="opportunity" placeholder="ในพื้นที่คาดว่าจะมีโอกาสที่จะพัฒนาอะไรบ้างเพื่อให้พื้นที่หรือตัวท่านเองมีคุณภาพชีวิตที่ดีขึ้น">
            </div>
            <div class="mb-3">
               <label class="form-label">อุปสรรคและปัจจัยคุกคามในพื้นที่:</label>
               <input type="text" class="form-control" name="threats" placeholder="มีปัจจัยใดหรืออุปสรรคใดที่ทําให้พื้นที่ไม่สามารถพัฒนาได้">
            </div>

            <div class="mb">
               <label class="form-label">ทรัพยากรท้องถิ่นที่สําคัญ</label>
            </div>

            <li class="mb-3">
               <label class="form-label">สถานที่ท่องเที่ยวหรือสถานที่สําคัญในพื้นที่:</label>
               <input type="text" class="form-control" name="landmarks" placeholder="">
            </li>
            <li class="mb-3">
               <label class="form-label">พืชเศรษฐกิจในพื้นที่:</label>
               <input type="text" class="form-control" name="plant" placeholder="">
            </li>
            <li class="mb-3">
               <label class="form-label">สิ่งที่มีมากในพื้นที่:</label>
               <input type="text" class="form-control" name="thing" placeholder="">
            </li>
            <li class="mb-3">
               <label class="form-label">กลุ่มชุมชน/วิสาหกิจชุมชน:</label>
               <input type="text" class="form-control" name="community" placeholder="">
            </li>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ชื่อผู้รายงาน:</label>
                  <input type="text" class="form-control" name="name" placeholder="">
               </div>

               <div class="col">
                  <label class="form-label">วันที่:</label>
                  <input type="text" class="form-control" name="date" placeholder="">
               </div>
            </div>

            
            <div>
            <div class="d-flex justify-content-center">
             <button type="submit" class="btn btn-success" name="submit">บันทึก</button>
              <a href="index.php" class="btn btn-danger ms-2">ยกเลิก</a>
            </div>
          </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
