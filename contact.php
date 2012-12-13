<!DOCTYPE HTML>
<html>

<head>
  <title>R&G Servicios Corporativos</title>
  <meta name="description" content="Ofrecemos soluciones en drywall con excelentes acabados, soluciones térmicas, acústicas y barreras contra fuego, entre otros servicios relacionados a la construcción." />
  <meta name="keywords" content="rivas, gomez, construccion, drywall, soluciones, termica, acustica, barrera, barreras, contra, fuego, incendios, incendio, ingenieros, ingeniero, cucuta, colombia, norte, santander, cortinas, persinas, celosias, toldos, puertas, yeso, mosquiteras" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><img src="images/rivasgomez.png" width="610" height="105" /></a></h1>
          
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="aboutus.html">¿ Quienes Somos ?</a></li>
          <li><a href="gallery.html">Galería</a></li>
          <li><a href="services.html">Servicios</a>
            <ul>
              <li><a href="services.html#acustica">Acústica</a></li>
              <li><a href="services.html#termica">Térmica</a></li>
              <li><a href="services.html#incendios">Protección Pasiva contra Incendios</a></li>
              <li><a href="services.html#persianas">Persianas</a>
              <li><a href="services.html#toldos">Toldos</a></li>
              <li><a href="services.html#puertas">Puertas</a></li>
              <li><a href="services.html#celosias">Celosias</a></li>
              <li><a href="services.html#cortinas">Cortinas</a></li>
              <li><a href="services.html#mosquiteras">Mosquiteras</a></li>
              <li><a href="services.html#drywall">DRYWALL</a></li>
            </ul>
          </li>
          <li class="selected"><a href="contact.php">Contáctenos</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/obras/13.jpg" width="600" height="300" alt="seascape_one" /></li>
        <li><img src="images/persianas/4.jpg" width="600" height="300" alt="seascape_two" /></li>
        <li><img src="images/persianas/4_1.jpg" width="600" height="300" alt="seascape_three" /></li>
        <li><img src="images/obras/17.jpg" width="600" height="300" alt="seascape_four" /></li>
        <li><img src="images/obras/30.jpg" width="600" height="300" alt="seascape_five" /></li>
        <li><img src="images/celosias/1.jpg" width="600" height="300" alt="seascape_six" /></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Ubicación</h3>
          <br />
          <p>Calle 5N #5-129 Barrio Colpet 
          Cúcuta - Norte de Santander 
          Colombia</p>
          <h3>Contácto</h3>
          <p>Teléfonos:
          	<ul>
          		<li>Colombia: 311 233 70 92</li>
          		<li>Colombia: 311 872 12 80</li>
          		<li>Colombia: (+57) 5920058</li>
          		<li>Colombia: (+57) 5920068</li>
          		<li>Venezuela: 0412 071 98 91</li>
          		<li>Venezuela: 0416 674 25 74</li>
          	</ul>
          Emails:
            <ul>
            	<li>alvaro@rivasygomez.com</li>
            	<li>victorino@rivasygomez.com</li>
            	<li>fernando@rivasygomez.com</li>
            	<li>info@rivasygomez.com</li>
            </ul>
          </p>
        </div>
      </div>
      <div class="content">
        <h1>Contáctenos</h1>
        <p>¿ Tienes alguna duda ? Comunicate con nosotros.</p>
        <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // David Carter at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where David Carter has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
          $to = 'info@rivasygomez.com';
          $subject = 'Preguntas del Sitio Web';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Nombre</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Mensaje</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            <p style="line-height: 1.7em;">Ayudanos a prevenir el spam:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" /></p>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; Asist Ingenieria 2012 | <a href="http://www.css3templates.co.uk">diseño por css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
