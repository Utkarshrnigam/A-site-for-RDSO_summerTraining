<?php include "db.php";
      include "functions.php";?>
<?php 
if(isset($_POST['sub']))

{
    query();
    
}


if(isset($_POST['signin']))

{
    adduser();
    
}
?>
<html>
<head>
  
    
   <style>
       body{
           margin: 0;
       }
       
       .btn-grp{
            display: inline;
            
            margin-left: 80%;
            z-index: 1000;
        }
    </style>
    <link rel="stylesheet" href="css.css"/>
</head>
<html>
   <body>
    <section class="nav" id="nav">
    <div class="logo">
    <a href="rdso.php"><img class="log" src="logo.jpg"></a>
    <h1 class="lo">Research Design And Standards Organisation</h1>    
    </div>
    <div class="tabs">
        <input class="b" id="a1" type="button" value="ABOUT US" onclick="croll('1')" >
        <input class="b" id="c1" type="button" value="TENDERS" onclick="croll('3')">
        <input class="b" id="e1" type="button" value="NEWS & EVENTS" onclick="croll('5')">
        <input class="b" id="f1" type="button" value="STAFF WELFARE" onclick="croll('6')">
        <input class="b" id="g1" type="button" value="CONTACT US" onclick="croll('7')">
        <span class="blinker">new</span>
        </div>
    </section>
     <div id="mySidenav" class="sidenav">
  <a target="_blank" href="http://www.indianrailways.gov.in/GST/index.html" id="about">GST-Indian Railways</a>
  <a target="_blank" href="http://nivaran.railnet.gov.in/" id="blog">Nivaran</a>
  <a href="http://www.irimee.indianrailways.gov.in/view_section.jsp?lang=0&id=0,296" id="projects">Knowledge Bank</a>
  <a target="_blank" href="http://pensionersportal.gov.in/" id="contact">Pension Portal</a>
  <a target="_blank" href="http://www.nvsp.in/" id="voter">National Voters Sevice Portal</a>
  <a target="_blank" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/directory2018(1).pdf" id="phone">Important Phone Numbers</a>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="icon-bar">
  <a target="_blank" href="https://www.facebook.com/rdsoIR?_rdr" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a target="_blank" href="https://twitter.com/rdsoexchange" class="twitter"><i class="fa fa-twitter"></i></a> 
  
</div>
    
        <div class="pimg1">
         <div class="ptext">
             <span class="border-trans">About Us</span>
         </div>
    <div class="maq">
        <nav class="maqnav">
            <h4>News & Announcement</h4>
        </nav>
        <marquee direction="up" scrollamount="3">
           <ul type="disc" >
            <li><a href="http://www.rdso.indianrailways.gov.in/downloadfile.jsp?fileid=106&filename=1528784634906-IMG_20180607_161519199.jpg">Online Bill submission and Tracking </a></li><hr>
            <li><a href="http://www.rdso.indianrailways.gov.in/uploads/files/1525342309855-Re-engagement%20for%20retired%20employees%20-%20Car%20Attendant.PDF">Re-engagement for retired employees-Car Attendent </a></li><hr>
            <li><a href="http://www.rdso.indianrailways.gov.in/downloadfile.jsp?fileid=105&filename=1524648184085-RDSO%20Re-engagement%20Notification.PDF">Notification for re-engagementof retired employees </a></li><hr>
            <li><a href="http://www.rdso.indianrailways.gov.in/uploads/files/1519360240768-NOTIFICATION.pdf">Selection of CVI </a></li><hr>
            <li><a href="http://www.rdso.indianrailways.gov.in/downloadfile.jsp?fileid=93&filename=1502364395544-Review%20of%20ISA%20panel%2010.8.2017.pdf">Procedure order of review of panel of independent safety assessory (metro,main line and generic products) </a></li><hr>
            <li><a href="http://www.rdso.indianrailways.gov.in/downloadfile.jsp?fileid=97&filename=1508473233965-EOI.pdf">RDSO lucknow invites competent and developing firms and registration as vendors for the items controlled by the RDSO </a></li><hr>
            
           </ul>
        </marquee>
    </div>
        <div class="btn-grp">
            <button id="modalBtn" class="button" onclick="openModal1()">SignIn</button><span class="blinker">new</span>
            <button id="modalbtn" class="button" onclick="openModal2()">LogIn</button>
        </div>
        

  <div id="simpleModal1" class="modal">
    <div class="modal-content">
      <div class="modal-header">
          <span onclick="closeModal1()" class="closeBtn"><b>&times;</b></span>
          <center><h2 style="color:black">SignIn</h2></center>
      </div>
      <div class="modal-body">
        <div class="signin">
            <div class="avatar"></div>
            <center><p class="error" id="er">Fields cannot be empty or incorrect data</p></center>
            <form action="rdso.php" method="post" id="form" name="form">
                <div class="input-row">
                    <label class="ion-person" for="name"></label>
                    <input type="text" name="sf-name" id="name" placeholder="FirstName"/>
                    <label class="ion-person" for="name"></label>
                    <input type="text"  name="sl-name" id="name1" placeholder="LastName"/>
                </div>
                <div class="inputrow">
                    <input type="text" id="cc" name="username" placeholder="Username or Phone No."/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                    <input type="text" id="dd" name="mobileno" placeholder="Phone No."/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                <input type="password" id="ee" name="password" placeholder="Password"/>
                <label class="ion-locked" for="pass"></label>
                </div>
                <input type="submit" onclick="succ()" value="SignIn" name="signin"  />
            </form>
        </div>
      </div>
      
    </div>
  </div>
         
         
  <div id="simpleModal2" class="modal">
    <div class="modal-content">
      <div class="modal-header">
          <span onclick="closeModal2()" class="closeBtn"><b>&times;</b></span>
          <center><h2 style="color:black">SignIn</h2></center>
      </div>
      <div class="modal-body">
        <div class="signin">
            <div class="avatar"></div>
            <form>
                <div class="inputrow">
                    <input type="text" placeholder="Username or Phone No."/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                <input type="password" id="pass" placeholder="Password"/>
                <label class="ion-locked" for="pass"></label>
                </div>
                <input type="submit"  value="Login"/>
            </form>
        </div>
      </div>
    </div>
  </div>
          
      </div>
       

    
      
    
    <div class="sec1" id="1">
          <nav class="inner-nav">
              <ul> 
                  <li><input class="b1" id="a" type="button" value="Vision" onclick="vision()" ></li>
                  <li><input class="b1" id="b" type="button" value="Quality Policy" onclick="Quality()"></li>
                  <li><input class="b1" id="c" type="button" value="Organizational Structure" onclick="os()"></li>
                  <li><input class="b1" id="d" type="button" value="Functions" onclick="Functions()"></li>
                  <li><input class="b1" id="e" type="button" value="Governing Council" onclick="gc()"></li>
                  <li><input class="b1" id="f" type="button" value="History of RDSO" onclick="hr()"></li>
                  <li><input class="b1" id="g" type="button" value="Central Board of Railway Research" onclick="cbr()"></li>
                  <li><input class="b1" id="h" type="button" value="Infrastructure" onclick="Infrastructure()"></li>
                  <li><input class="b1" id="i" type="button" value="Central Library" onclick="cl()"></li>
                  
                  <li><input class="b1" id="k" type="button" value="e-Payment to RDSO" onclick="ep()"></li>
                  
                  <li><input class="b1" id="n" type="button" value="IPR" onclick="ipr()"></li>   
                  <li><input class="b1" id="o" type="button" value="Important Achievement of Last Five Year" onclick="ia()"></li>
                  <li><input class="b1" id="p" type="button" value="Swachh Bharat Mission" onclick="sbm()"></li>
                  <li><input class="b1" id="r" type="button" value="Expression of Interest" onclick="ei()"></li>
                  <li><a target="_blank" class="b" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/NOTIFICATION.pdf">Selection of CVI </a>></li>
              </ul>
                
          </nav>
          <hr>
          <div id="q" style="height:90%">
              <p style="color:wheat">Railways were introduced in India in 1853 and as their development progressed through to the <br>twentieth century, several company managed systems grew up.To enforce standardisation and co-<br>ordination amongst various railway systems, the Indian Railway Conference Association(IRCA) was set <br>up in 1903, followed by the Central Standards Office (CSO) in 1930, for preparation of designs, <br>standards and specifications. However, till independence, most of the designs and manufacture of <br>railway equipments was entrusted to foreign consultants. With Independence and the resultant <br>phenomenal increase in country’s industrial and economic activity, which increased the demand of <br>rail transportation - a new organisation called Railway Testing and Research Centre (RTRC) was setup <br>in 1952 at Lucknow. Central Standards Office (CSO) and the Railway Testing and Research Centre <br><br>(RTRC) were integrated into a single unit named Research Designs and Standards Organisation (RDSO) <br>in 1957, under Ministry of Railways at Lucknow. The status of RDSO has been changed from an ’<br>Attached Office’ to ’Zonal Railway’ since 01.01.2003.</p>
          </div>
           
    </div>
    
    
    
   
    
    
    
    
    
    
    
    <div class="pimg3">
         <div class="ptext">
             <span class="border-trans">TENDERS</span>
         </div>
    </div>    

    
    
    
    
    <div class="sec3" id="3">
            <nav class="inner-nav">
              <ul> 
                 
                  <li><input class="b1" id="b" type="button" value="General Information about E-tendering" onclick="eten()"></li>
                  <li><input class="b1" id="c" type="button" value="Electrical/EMS (Works)Tenders" onclick="ems()"></li>
                  <li><input class="b1" id="d" type="button" value="Civil Engineering (Works) Tender" onclick="civil()"></li>
                  <li><input class="b1" id="d" type="button" value="Stores Tender" onclick="stores()"></li>
                  <li><input class="b1" id="d" type="button" value="QUOTATION NOTICE" onclick="quotation()"></li>
                  <li><a target="_blank" class="b" href=" http://eprocure.gov.in/cppp/tendersearch">Selection of CVI </a>></li>
                  
                  
              </ul>
                
          </nav>
          <hr>
          <div id="w2" style="height:90%">
             <h1 style="color:wheat">Tenders Information</h1>
          </div>
           
    </div>
    
   
    
    
    
    
    
    
    
    
    
    <div class="pimg4">
          <div class="ptext">
             <span class="border-trans">NEWS & EVENTS</span>
         </div>
    </div>    

    
    
    
    <div class="sec1" id="5">
          <nav class="inner-nav">
              <ul> 
                 
                  <li><input class="b1" id="b" type="button" value="Press Release" onclick="press()"></li>
                  <li><input class="b1" id="c" type="button" value="For Retired Employees" onclick="retierde()"></li>
                  <li><input class="b1" id="d" type="button" value="Futuristic R & D Areas" onclick="futuristic()"></li>
                  
              </ul>
                
          </nav>
          <hr>
          <div id="w" style="height:90%">
             
                  <ul>
                      <li>
                          <a class="uli" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/final_80_bsc(1).pdf" target="_blank">Agenda for 80th BSC Meeting</a>
                      </li><br><br>
                      <li>
                          <a class="uli" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/rwwo.pdf" target="_blank">Scholarship scheme for needy and deserving/students (children/wards) of Group-C & Group-D</a>
                      </li><br><br>
                      <li>
                          <a class="uli" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/81_meet.pdf" target="_blank">Minutes 81st Meeting Track Standards Committee (1st to 3rd December 2010)
                          </a>
                      </li><br><br>
                      <li>
                          <a class="uli" href="http://rdso.elationsoft.net/" target="_blank">Online Payment Status</a>
                      </li><br><br>
                      <li>
                          <a class="uli" href="http://www.rdso.indianrailways.gov.in/works/uploads/File/tsc.pdf" target="_blank">Agenda for 81st of TSC</a>
                      </li>
                  </ul>
            
          </div>
           
    </div>
    
    
    
    
    
    <div class="pimg5">
          <div class="ptext">
             <span class="border-trans">STAFF WELFARE</span>
         </div>
    </div>    

    
    
    
    <div class="sec1" id="6">
          <nav class="inner-nav">
              <ul> 
                 
                  <li><input class="b1" id="b" type="button" value="Pensioner Corner" onclick="pen()"></li>
                  <li><input class="b1" id="c" type="button" value="Railway Women’s Welfare Organisation" onclick="women()"></li>
                  
                  <li><input class="b1" id="d" type="button" value="Staff Benefit Fund" onclick="staff()"></li>
                  
              </ul>
                
          </nav>
          <hr>
          <div id="st" style="height:90%">
             <h1 style="color:wheat">Welcome to Staff Welfare</h1>
           
    </div>
       </div>
    
    
    
    <div class="pimg2">
          <div class="ptext">
             <span class="border-trans">CONTACT US</span>
         </div>
    </div>    

    
    
    
    
    
    <section class="sec4" id="7">
            
          
          <div class="container1">
  
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%; height:500px"></div>
    </div>
    <div class="column1">
      <form action="rdso.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
        <label for="country">G-Mail ID </label>
        <input type="text" id="country" name="email" placeholder="Your G-Mail ID..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="que" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="sub">
      </form>
    </div>
  </div>
  <div class="terms">
      <ul>
          <li><a class="aterms"  target="_blank" href="disclaimer.html">Disclaimer</a></li>
          <li><a class="aterms" target="_blank" href="terms.html">Terms & Condition</a></li>
          <li><a class="aterms" target="_blank" href="policy.html">Privacy Policy</a></li>
      </ul>
  </div>
</div>


   
    </section>
    
       
    <script src="js.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4QMVZJYEYAl2DYpYcCoB6Td6CoWkwc68&callback=myMap"></script>
    </body>  
</html>



