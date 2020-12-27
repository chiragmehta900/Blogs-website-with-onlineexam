<? php
<html>
<head>
<style>
footer {
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    z-index: 10000;
 }
footer {
    background-color: black;
    font-family: "Lato", sans-serif;
    padding: 70px 0 50px 0;
}

.footer-inner {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 120px;
    max-width: 1170px;
    position: relative;
    z-index: 10000;
}

.footer-item {
    float: left;
    margin: 0 7.2% 0 0;
    z-index: 10000;
}

.footer-item:nth-of-type(4) {
    display: none;
}

.footer-item:nth-of-type(7) {
    float: right;
    margin-right: 0;
}

.footer-button {
    color: white;
    position: relative;
    font-weight: 400;
    font-size: 16px;
    transition: 1s;
    transition-delay: .2s;
    padding: 14px;
}
  
.footer-button:after {
    content: "";
    position: absolute;
    top: 45px;
    right: 13px;
    background-color: white;
    height: 1px;
    width: 86px;
    transition: .6s;
}
  
.footer-button:hover {
    color: black;
    background-color: white;
}
  
.footer-button:hover:after {
    width: 112px;
    right: 0px;
}

h1 {
    font-weight: 900;
    color: white;
    font-size: 24px;
    letter-spacing: 2px;
    margin: 0;
    padding-bottom: 10px;
}
  
h2 {
    font-weight: 300;
    line-height: 1.8;
    font-size: 13px;
    color: #d1d1d1;
    letter-spacing: 0.03em;
    padding: 15px 0 0 0;
}
  
.color {
    color: white;
    font-weight: 400;
}
  
h3 {
    font-weight: 400;
    font-size: 25px;
    color: white;
    margin: 0;
    padding-bottom: 9px;
    letter-spacing: 0.03em;
}

h3.desktop {
    padding-top: 30px;
}
  
ul {
    line-height: 1.8;
    list-style-type: none;
    padding: 0;
}
  
li {
    font-weight: 300;
    font-size: 13px;
    color: #d1d1d1;
    letter-spacing: 0.03em;
}
  
p {
    font-weight: 300;
    font-size: 13px;
    padding: 0;
    line-height: 1.8;
    letter-spacing: 0.03em;
}
  
a {
    text-decoration: none;
    color: #d1d1d1;
}
  
a:hover {
    color: white;
}
  
.desktop {
    display: auto;
}
.footer-item img{
    height: 100px;
}

@media (max-width: 1024px) {
  
footer {
    padding: 50px 0 200px 0 !important;
}


.footer-item {
    margin: 0 0 42px 0;
    width: 50%;
}


.footer-item:nth-of-type(1) {
    border-bottom: 1px solid #333;
    padding-bottom: 32px;
    float: none;
    width: 100%;
}

// .footer-item:nth-of-type(2) {
//     clear: both;
// }

// .footer-item:nth-of-type(4) {
//     clear: both;
//     display: block;
// }

// .footer-item:nth-of-type(6) {
//     clear: both;
// }

// .footer-item:nth-of-type(7) {
//     clear: both;
//     float: left;
//     margin: 20px 0 0 -13px;
// }

.desktop {
    display: none;
}

.footer-inner:after {
    top: 730px;
}
}
.copyrite{
    color: white;
}
</style>
</head>
<body>

<footer>
  <nav class="footer-inner">
    <section class="footer-item">
      <img src="master/logo_footer.png" alt="logo_footer" />
      <h2>We create possibilities <br>for the connected world.<br><b class="color">Be Bold.</b></h2>
    </section>
        
    <section class="footer-item">
      <h3>Explore</h3>
        <ul>
          <li><a href="#">Online Classes</a></li>
          <li><a href="index.php">Online Exams</a></li>
          <li><a href="#">Notification</a></li>
          <li><a href="#">Academic Project</a></li>
        </ul>
    </section>
          
    <section class="footer-item">
      <h3>Visit</h3>
        <a href="#">
        <p>Envoy So. California</p>
        <p>34 Tesla, Ste 100</p>
        <p>Irvine, Ca, USA 92618</p>
        </a>
    </section>
            
    <section class="footer-item">
      <h3>New Busines</h3>
        <P><a href="#"> New Business Register</a></p>
        <p><a href="#">Email us</a></p>
        <p><a href="#">949.333.3106</a></p>
    </section>
        
    <section class="footer-item">
      <h3>Follow</h3>
        <ul>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">LinkedIn</a></li>
        </ul>
    </section>
        
    <section class="footer-item">
      <h3>Legal</h3>
        <ul>
          <li><a href="terms.pdf" target="_blank">Terms & Condations</a></li>
          <li><a href="#">Privacy</a></li>
        </ul>
    </section>
    <section class="footer-item">
    <h3>New Business</h3>
        <P><a href="business_register.php"> New Business Register</a></p>
        <p><a href="#">engage@weareenvoy.com</a></p>
        <p><a href="#">949.333.3106</a></p>
    </section>
  </nav>
  <br>
  <div class="copyrite">
        <h2>© 2020 Envoy. All Rights Reserved.</h2>
    </div>
</footer>
    
</body>
</html> 
