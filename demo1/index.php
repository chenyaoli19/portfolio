<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Chelsea's Portfolio</title>
    <!--make media query work on IE 8 and less-->
    <script src="js/respond.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/math.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <style>
    #loading, #success{display: none}
  </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    $(function(){
      $('form').submit(function(e){
        var thisForm = $(this);
        //Prevent the default form action
        e.preventDefault();
        //Hide the form
        $(this).fadeOut(function(){
          //Display the "loading" message
          $("#loading").fadeIn(function(){
            //Post the form to the send script
            $.ajax({
              type: 'POST',
              url: thisForm.attr("action"),
              data: thisForm.serialize(),
              //Wait for a successful response
              success: function(data){
                //Hide the "loading" message
                $("#loading").fadeOut(function(){
                  //Display the "success" message
                  $("#success").text(data).fadeIn();
                });
              }
            });
          });
        });
      })
    });
  </script>
</head>

<body>
  <form method='post' action='mailform.php'>
    Email: <input name='email' type='text'><br>
    Subject: <input name='subject' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'></textarea><br>
    <input type='submit'>
  </form>
  <div id="loading">
    Sending your message....
  </div>
  <div id="success">
  </div>


<div id="header">
      <div id="container-nav" class="group prtf">
        <section id="nav">
          <nav id="menu">
            <input type="checkbox" id="toggle-nav"/>
            <label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i></label>
            <div class="box">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <div id="vertical-menu">
              <ul>
                <li><a href="#">•</a></li>
                <li><a href="#portfolio">•</a></li>
                <li><a href="#about">•</a></li>
                <li><a href="#contact">•</a></li>
              </ul>
            </div>            
          </nav>
        </section>
      </div>    
      <div id="container-header">
        <header id="masthead">
          <h1>Hi, I'm <br>Chelsea</h1>
          <h3>A San Francisco-based<br>
           designer/front-end developer<br>
           hybrid with a passion for user<br>
           experience and the web</h3>
        </header>
      </div>
    </div>    
    <!--main body-->
    <div id="container-content">
      <article id="content">
        <!--portfolio-->
        <section id="portfolio" class="group">
          <header>
            <h3>Portfolio</h3>
          </header>

          <article class="view">
            <figure>
              <a href="prtf1.html"><img src="./img/capPhone.png"></a>
              <div class="mask">  
                  <h3>SnapTrip</h3>  
                  <p>A traveler-driven trip planning app</p>
                  <a href="prtf1.html" class="info">+</a>  
                </div>
            </figure>
          </article>

          <article class="view">
            <figure>
              <img src="./img/capPad.png">
              <div class="mask">  
                  <h3>e-Magazine</h3>  
                  <p>Mobile publishing magazine</p>
                  <a href="prtf2.html" class="info">+</a>    
                </div>
            </figure>
          </article>
          
          <article class="view"> 
            <figure>
              <img src="./img/p1.png">
              <div class="mask">  
                  <h3>MeanShop</h3>  
                  <p>MEAN stack based eCommerce website</p>  
                  <a href="prtf3.html" class="info">+</a>  
                </div>
            </figure>
          </article>
          
        </section>
        <!--about me-->
        <section id="about" class="group"> 
          <header>
            <h2 class="center">About Me</h2>
            <p class="center"><img src="img/thumbnail.jpg"></p>
            <div class="group">
              <p>Hi there! I'm Chelsea Li, a web developer with a mad love for illustration and design. It's been three years since I got exposed to the rich world of web development, and I've fallen in love with it, both front-endly and back-endly. I'm also in fever of new technologies which changed or going to change people's lives. <a href="http://www.ted.com">TED</a> conferences, <a href="https://news.ycombinator.com">Hacker News</a> and <a href="http://www.style.com">style.com</a> are my favorite sources for inspiration. I graduated from Cornell University with a Master in Systems Engineering in 2011.</p>
            </div>
          </header>
          <div class="col-3 group">
            <article>
              <div class="box wrapper">
                <h4>Currently</h4>
                <p>I recently moved to SF from NYC and has been working on developing responsive website/WordPress theme. As a full stack developer, I’m also exploring the MEAN stack- MongoDB, ExpressJS, AngularJS and Node.js and I have a strong faith in Full-stack JavaScript development.</p>
              </div>
            </article>
            <article>
              <div class="box wrapper">
                <h4>Skills</h4>
                <ul>
                  <li>MEAN stack: MongoDB, Express.js, Angular.js, Node.js</li>
                  <li>HTML5 & CSS3</li>
                  <li>Adobe PhotoShop/Edge Inpect</li>
                  <li>Autodesk Sketchbook Pro</li>
                  <li>Responsive Web Design</li>
                  <li>Mobile App (Native and Web) Design</li>
                </ul>
              </div>
            </article>
            <article>
              <div class="box wrapper">
                <h4>Strengths</h4>
                <p>I love designing stuff. I'm also into tweaking and coding up WEB applications and exploring exciting new technologies. (NEVER stop learning!) I embrace and solve real world problems with my aesthetic eye and strong engineering principles. Connecting LEFT and RIGHT brain and having them work together, there’s never a limit.</p>
              </div>
            </article>
          </div>
        </section>
        <section id="contact" class="group">
          <article>
            <form id="contactForm" method='post' action='contact.php'>
              <input type="text" name="name" id="name" placeholder="name" required="required">
              <input type="email" name="email" id="email" placeholder="email" required="required">
              <textarea name="message" id="message" placeholder="message" required="required"></textarea>
              <input type="submit" id="sendMessage" name="sendMessage" value="Contact Me!">
            </form>
            <!-- <div id="loading">
                Sending your message....
              </div>
              <div id="success">
              </div> -->
          </article>
          <article>
            <header>
              <h2>Contact</h2>
              <p><img src="./img/email.png">&nbsp&nbsp&nbspEmail:</p>
              <p>info@chelseali.me</p>
              <p><a href="https://www.facebook.com/chenyao.li.5"><img src="./img/facebook.png" class="social-icon"></a><a href="https://www.linkedin.com/in/chenyaoli"><img src="./img/linkedin.png" class="social-icon"></a><a href="https://twitter.com/cylimomo"><img src="./img/twitter.png" class="social-icon"></a></p>
            </header>
          </article>
        </section>
      </article>
    </div>
    <div id="container-footer">
      <footer id="colophon">
        <p class="small">©2014 all rights reserved</p>
      </footer>
    </div>  
</body>
</html>