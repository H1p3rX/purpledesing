<?php
   // <<-----------------Database Connection------------>> //
   require 'config.php';
   $sql = 'SELECT ip, reason, banner, time, expires FROM ipbans ORDER BY time DESC LIMIT 20';
   $retval = $conn->query($sql);
   ?>

  <div class="card tblack lines">
    <div class="card-header" id="headingOne"><h2 class="page-header">IPBans
      <a style="text-decoration:none" href="#" data-toggle="collapse" data-target="#ipbans"><h5>(Show IPBans)</h5></a></h2></div>
        <div id="ipbans" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div style="background: transparent;" class="card-body">
<body>
   <div class="container content">
      <div class="row">
         <div class="col-lg-12">
            <table class="table table-hover table-bordered table-condensed">
            <thead>
               <tr>
                  <th>
                     <center>IP Address</center>
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
                  <td>
                     <?php
                        $ip = $row['ip'];
                        
                        $array = explode(".", $ip);
                        $numbers = $array[0] . "." . $array[1] . "." . $array[2];
                        $numbers .= ".";
                        
                        for($i = 0; $i < strlen($array[3]); $i++) {
                          $numbers .= "*";
                        }
                        
                        echo $numbers;
                        ?>
                  </td>
                  <td><?php echo "<img src='https://minotar.net/cube/" . $row['banner'] . "/25'  style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . $row['banner'];?></td>
                  <td style="width: 30%;"><?php echo $row['reason'];?></td>
                  <td><?php echo $timeResult;?></td>
                  <td><?php if($row['expires'] == 0) {
                     echo 'Permanent Ban';
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