<?php
   // <<-----------------Database Connection------------>> //


   require_once 'config.php';
   $sql = 'SELECT name, reason, banner, time, expires FROM bans ORDER BY time DESC LIMIT 20';
   $retval = $conn->query($sql);
   ?>

   <div class="accordion lines" id="accordionExample">
  <div class="card tblack">
    <div class="card-header" id="headingOne"><h2 class="page-header">Bans
      <a style="text-decoration:none" href="#" data-toggle="collapse" data-target="#bans"><h5>(Show Bans)</h5></a></h2></div>
        <div id="bans" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div style="background: transparent;" class="card-body">
<body>
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <table class="table table-hover table-bordered table-condensed">
            <thead>
                  <th>
                     <center>Name</center>
                  </th>
                  <th>
                     <center>Banned By</center>
                  </th>
                  <th>
                     <center>Reason</center>
                  </th>
                  <th>
                     <center>Banned On</center>
                  </th>
                  <th>
                     <center>Banned Until</center>
                  </th>
            </thead>
            <tbody>


               <?php while($row = $retval->fetch_assoc()) { 
                  if($row['banner'] == null) {
                     $row['banner'] = 'Console';
                  }
                  // <<-----------------Ban Date Converter------------>> //
                  $timeEpoch = $row['time'];
                  $timeConvert = $timeEpoch / 1000;
                  $timeResult = date('F j, Y, '. $web["timezone"] .'', $timeConvert);
                  // <<-----------------Expiration Time Converter------------>> //
                  $expiresEpoch = $row['expires'];
                  $expiresConvert = $expiresEpoch / 1000;
                  $expiresResult = date('F j, Y, '. $web["timezone"] .'', $expiresConvert);
                  ?>


               <tr>
                  <td><?php echo "<img src='https://minotar.net/cube/" . $row['name'] . "/25' style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . $row['name'];?></td>
                  <td><?php echo "<img src='https://minotar.net/cube/" . $row['banner'] . "/25'  style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . ucfirst($row['banner']);?></td>
                  <td><?php echo $row['reason'];?></td>
                  <td><?php echo $timeResult;?></td>
                  <td><?php if($row['expires'] == 0) {
                     echo 'Permanent';
                     } else {
                     echo $expiresResult; }?></td>
               </tr>
               <?php }
                  $conn->close();
                  echo "</tbody></table>";
                  ?>
         </div>
      </div>
   </div>


      </div>
    </div>
    </div>
    </div>