<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $class=$_POST['class'];
  $clgroll=$_POST['roll'];
  $pgroll=$_POST['pgroll'];
  $pf=$_POST['yn'];
  $year=$_POST['yr'];
  $division=$_POST['division'];
  $sub=$_POST['sub'];
  $distinction=$_POST['distinction'];
  $hons=$_POST['hons'];
  ?>
  <html>
  <head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
  
   
  </head>
  <body>
    <div class="main">
      <div class="img"><image src="images/unlogo.jpg" width="90px" height="90px"></div>
    <b class="un">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;udayanath (auto). college of science & technology</b></br>
    <b class="add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRACHI JNAPITHA,ADASPUR,CUTTACK</b></br>
    <h2 align="center" class="proforma">PROFORMA FOR COLLEGE LEAVING CERTIFICATE</h2>
    <div class="money">
      MONEY RECEIPT No.
    </div>
    <form class="form">
<b>1.Name</b>&nbsp;&nbsp;&nbsp;<input type="text" class="name" class="wclass" id="namee" value="                                                <?php echo$name;?>" readonly
/></br>

<b>2.Class</b>&nbsp;&nbsp;&nbsp;<input type="text" class="clas" class="wclass"  value="                                                 <?php echo$class;?>" readonly/></br>

<b>3.College Roll No.</b>&nbsp;&nbsp;&nbsp;<input  class="clgroll" class="wclass" value="                                  <?php echo$clgroll;?>" readonly/></br>

<b>4.CHSE/U.U/PG. Roll No.</b>&nbsp;&nbsp;&nbsp;<input type="text" class="proll" class="wclass" value="                       <?php echo$pgroll;?>" readonly/></br>

<b>5.Promoted to next higher class or failed</b>&nbsp;&nbsp;<input type="text" class="pf" class="wclass" value="     <?php echo$pf;?>" readonly/></br>

<b>Passed/Failed with year</b>&nbsp;&nbsp;&nbsp;<input type="text" class="year" class="wclass"  value="                          <?php echo$year;?>" readonly/></br>

<span class="spn"><b>Division</b></span>
<span><input type="text" class="division" class="wclass" value="                <?php echo$division;?>" readonly/></span>
<span class="spn"><b>Distinction</b></span>
<span><input type="text" class="division" class="wclass" value="                <?php echo$distinction;?>" readonly/></span>
<span class="spn"><b>Hons</b></span>
<span><input type="text" class="division" class="wclass" value="                <?php echo$hons;?>" readonly/></span></br>

<b>Subject</b>&nbsp;&nbsp;<input type="text" class="subject" class="wclass" value="                                                <?php echo$sub;?>" readonly
/>

</form>
    <b>6:CLEARANCE:</b>
      <ol type="A">
        <li><b>ACADEMIC & ADMINISTRATIVE</b>
          <ol type="a">
          <li>LIBRARY</li>
          <li>HOSTEL</li>
          <li>SEMINAR(+3 HONS. STUDENT)</li>
          <li>N.C.C</li>
          <li>N.S.S</li>
          <li>Rovers & Rangers</li>
          <li>Youth Red Cross</li>
          <li>Running Shield/Medal</li>
          </ol>
        </li>
        <li><b>LABORATORIES</b>
          <ol type="a">
            <li>Botany</li>
            <li>Chemistry</li>
            <li>Electronics</li>
            <li>Education</li>
            <li>Geology</li>
            <li>I.M.V</li>
            <li>Physics</li>
            <li>Psychology</li>
            <li>Statistics</li>
            <li>Zoology</li>

          </ol>
        </li>
      </ol>
  <form>
    Date<input type="text" class="date" readonly /> <input type="text" class="signature" value="Signature Of Candidate" readonly>
  </form>
  <b>N.B</b><ol type="1">
              <li>Identity Card/Library Cards are be surrended.<br>
              C.L.C will be issued after three days from the date of submission of application.</li>
              <li>Mark Sheet xerox copy to be attached.</li>
  </ol>
<button class="print" Onclick="myfun()">Print</button>
<script>
  function myfun()
  {
    window.print();
  }
</script>
</div>
</body>
</html>
<?php
}
?>