<html lang = "en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Web Basics</title>
    <link rel="shortcut icon" href="purpleicon.png" type="image/x-icon">
  </head>

  <body>
    <ul>
      <li><a href="index.php"><img class="house" src = "house.png"></a></li>
      <li><a href="HTMLCSS.html">HTML/CSS</a></li>
      <li><a href="Databases.html">Databases</a></li>
      <li><a href="PHP.html">PHP</a></li>
    </ul>


    <div class="box">
      <p class="heading">Welcome! </p>
      
      <p class="paragraph">This website is dedicated to helping you learn the basics of web development. To start, chose what you want to start learning in the navigation bar and get ready to learn! If you have any questions at all don't hesitate to contact us below.</p> 
    </div>

    <div class="box">
      <p class="heading">Contact Us</p>
        <div class="textwithin">
        <form id="contact-form" method="POST" action="action_index.php">
          <label for="fname" class="paragraph">First Name</label>
          <input type="text" name="firstname" placeholder="Your name.." required>

          <label for="lname" class="paragraph">Email</label>
          <input type="text" name="email" placeholder="Your email.." required>

          <label for="topic" class="paragraph">Topic</label>
          <select name="topic">
            <option value="HTML/CSS" >HTML/CSS</option>
            <option value="PHP">PHP</option>
            <option value="Databases">Databases</option>
          </select>

          <label for="subject" class="paragraph">Your message</label>
          <textarea id="subject" name="subject" style="height:200px">
          </textarea>

          <input type="submit" value="Submit">
        </form>
    </div>
    
  </body>
</html>