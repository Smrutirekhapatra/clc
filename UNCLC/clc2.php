<!DOCTYPE HTML>
 <html>
 <head>

<link rel="stylesheet" type="text/css" href="css/clcapply.css">
 <script type="text/javascript" source="js/validation.js"></script>
 <style>
  .lbl
  {
    border:3px solid transparent;
    border-right:none;
    width:12px;
    height:42px;
    color:#000;
    font-weight: bold;
    font-size:20px;
    opacity: 0.9;
    box-sizing:border-box;
    padding:5px;
    margin-bottom:20px;
    margin-top: 20px;

  }
  .slt
  {
    border:3px solid black;
    width:120px;
    height:40px;
    box-sizing:border-box;
    border-radius: 5px 5px 5px 5px;
    padding:4px;
    color:black;
    font-weight:bold;
    font-size:15px;
  }
  .slt:hover
  {
    box-shadow: 4px 4px 4px black;

  }
 </style>

</head>
<body>
  <div class="main">
    <div class="img"><image src="images/unlogo.jpg" width="90px" height="90px"></div>
  <b class="un">udayanath (auto). college of science & technology</b></br>
  <b class="add">PRACHI JNAPITHA, ADASPUR, CUTTACK</b></br>
  <h2 align="center" class="proforma">PROFORMA FOR COLLEGE LEAVING CERTIFICATE</h2>
  <div class="form">
  <form  action="printform.php" method="post" value="" onsubmit="return validation()">
    <input type="text" name="name" class="name" id="name" placeholder="Enter Your Name">
    <span id="sname"></span></br>
    <input type="text" name="class" class="clas" id="clas" placeholder="Enter Your Class">
    <span id="sclas"></span></br>
    <input type="text" name="roll"  class="clgroll" id="clgroll" placeholder="Enter Your College Roll No.">
    <span id="sclgroll"></span></br>
    <input type="text" name="pgroll" class="proll" id="proll" placeholder="Enter Your CHSE/U.U/P.G Roll No.">
    <span id="sproll"></span></br>
    <input type="text" name="yn"  class="pf" id="pf" placeholder="Promoted To Next Higher Class OR Failed">
    <span id="spf"></span></br>
    <input type="text" name="yr"  class="year" id="year" placeholder="Passed/Failed With Year">
    <span id="syear"></span></br>
    <span class="lbl">Division</span>
    <span><select class="slt" name="division" id="slt">
      <option>1st</option>
      <option>2nd</option>
      <option>3rd</option>
      <option>GWH</option>
     <!-- <option>PASSED</option>
      <option>FAILED</option>
    <option>NA</option>-->
    </select>
    <!--<script>
    function myyfun()
    {
    var divis=document.getElementById("slt").value;
    if(divis=="GWH"||divis=="FAILED"||divis=="NA")
    {
      document.getElementById("dist").setAttribute('disabled',true); 
      document.getElementById("dist").value="NA";
  
      document.getElementById("hons").value="NA";
      document.getElementById("hons").setAttribute('disabled',true);
       
       
    }
  }
</script>-->
  </span>
   <span class="lbl">Distinction</span>
    <span><select class="slt" name="distinction" id="dist">
      <option>YES</option>
      <option>NO</option>
      <option>NA</option>
    </select>
  </span>
   <span class="lbl">Hons</span>
    <span><select class="slt" name="hons" id="hons">
      <option>YES</option>
      <option>NO</option>
      <option>NA</option>
    </select>
  </span>
    </br>
    
    <input type="text" name="sub" class="subject" id="subject" placeholder="Enter The Subject">
    <span id="ssubject"></span></br>
    <button type="submit" name="submit" class="button" id="submit" Onclick="document.getElementById('submit').style.background='rgb(0,0,40)'" Onmouseout="document.getElementById('submit').style.background='rgb(0,0,98)' " >Submit</button>
  </form>
</div>
</div>
</body>
</html>
<?php
?>