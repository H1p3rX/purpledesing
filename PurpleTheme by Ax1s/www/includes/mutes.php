<?php
  // <<-----------------Database Connection------------>> //
   require 'config.php';
   $sql = 'SELECT name, reason, muter, time, expires FROM mutes ORDER BY time DESC LIMIT 20';
   $retval = $conn->query($sql);
   ?>
  <div class="card tblack lines">
    <div class="card-header" id="headingOne"><h2 class="page-header">Mutes
      <a style="text-decoration:none" href="#" data-toggle="collapse" data-target="#mutes"><h5>(Show Mutes)</h5></a></h2></div>
        <div id="mutes" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div style="background: transparent;" class="card-body">
<body>
   <div class="container content">
      <div class="row">
         <div class="col-lg-12">
            <table class="table table-hover table-bordered table-condensed">
            <thead>
               <tr>
                  <th>
                     <center>Name</center>
                  </th>
                  <th>
                     <center>Muted By</center>
                  </th>
                  <th>
                     <center>Reason</center>
                  </th>
                  <th>
                     <center>Muted On</center>
                  </th>
                  <th>
                     <center>Muted Until</center>
                  </th>
               </tr>
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
                  <td><?php echo "<img src='https://minotar.net/cube/" . $row['banner'] . "/25'  style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . $row['banner'];?></td>
                  <td style="width: 30%;"><?php echo $row['reason'];?></td>
                  <td><?php echo $timeResult;?></td>
                  <td><?php if($row['expires'] == 0) {
                     echo 'Permanent Mute';
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