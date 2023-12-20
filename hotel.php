<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PAGE</title>
    <link rel="stylesheet" href="hotel.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <nav>
               
                <label class="logo"> Milena Appartement </label>
                <ul>
                    <li><a  href="#home">HOME</a></li>
                    <li><a  href="#about">ABOUT</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="#bookroom">ROOMS</a></li>
                    <li><a href="#contact">CONTACT-US</a></li>
                    <li><a href="listehotel.php">ADMIN</a></li>
                </ul>
            </nav>
</head>
<body>
    <section id="home">
        <div class="home-main">
            <h1> MILENA APPARTEMENT</h1>
            <P>Experience the ultimate in luxury and comfort at our exquisite hotel.</P>
        <button class="btn-1">Learn more</button>
        </div>  
    </section>
    <div class="orange">
         <h5 class="room">ROOM RESERVATION</h5>
        </div>
    <div class="messege">
        <h2>experience a good stay, enjoy fantastic offers</h2>
    </div>
</section>
<section id="about">
    <div class="content">
        <h3>Milena Appartement Home</h3>
        <p> We strive to keep all of our properties meticulously well maintained,and to do so in a cost effective way that cuts down on our residents expenses.<br>
            Our goal is to provide affordable rates for prospective tenants, and we have developed a variety of unique strategies that allows us to offer the <br> most in property management and rentals.
            Our goal is always to make it easy for our residents to live in a place they love.
        </p>
    </div>
    <div class="container">
    </div>
</section>

<section id="gallery">
    <h4>GALLERY PHOTO</h4>
    <div class="full-img" id="fullImgBox">
        <img src="image/room luxery.jpg" height="300px" width="300px" id="fullImg">
        <span onclick="closefullImg()">X</span>
    </div>
<div class="image-gallery">
    <img src="image/room luxery.jpg" height="300px" width="300px" onclick="openfullImg(this.src)">
    <img src = "image/room5.png" height="300px" width="300px" onclick="openfullImg(this.src) ">
    <img src="image/room1.jpg" height="300px" width="300px" onclick="openfullImg(this.src)">
    <img src="image/room4.jpg" height="300px" width="300px" onclick="openfullImg(this.src)">
</div>
<div class="image-gallery">
    <img src="image/room3.jpg"height="300px" width="300px" onclick="openfullImg(this.src)">
    <img src="image/room6.jpg"height="300px" width="300px" onclick="openfullImg(this.src)">
    <img src="image/room7.jpg"height="300px" width="300px" onclick="openfullImg(this.src)">
    <img src="image/room8.jpg"height="300px" width="300px" onclick="openfullImg(this.src)">
</div>
   
<script>
    var fullimgBox = document.getElementById("fullImgBox")
    var fullimgBox = document.getElementById("fullImgBox");
    function openfullImg(pic){
        fullImgBox.style.display ='flex';
        fullImg.src = pic;
    }
    function closefullImg(){
        fullImgBox.style.display ='none';
    }
</script>
</section>
<section id="bookroom">
    <h5>BOOK YOUR ROOM NOW</h5>
    <div class="wrapper">
        <article style="background-image: url(image/room1.jpg);">
            <div class="overlay"><h4>Deluxe Room</h4>
            <p><small>$320</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
         <article style="background-image: url(image/room\ luxery.jpg);">
            <div class="overlay"><h4>luxury Room</h4>
            <p><small>$220</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
         <article style="background-image: url(image/room7.jpg);">
            <div class="overlay"><h4>Single Room</h4>
            <p><small>$150</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
    </div>
    <div class="wrapper">
         <article style="background-image: url(image/room6.jpg);">
            <div class="overlay"><h4>Guest Room</h4>
            <p><small>$180</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
         <article style="background-image: url(image/pozadina-2-scaled.jpg);">
            <div class="overlay"><h4>Economy room</h4>
            <p><small>$750</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
         <article style="background-image: url(image/room5.png);">
            <div class="overlay"><h4>Honeymoon Suit</h4>
            <p><small>$650</small></p>
                <a href="formreservation.php" class="button-2">BookRoom</a>
            </div>
         </article>
    </div>
</section>
<h4>CONTACT-US</h4>
<section id="contact">
    <div class="main-form">
        <div class="form">
            <h6>CONTACT-US</h6>
            <hr>
            <form action="">
                <div class="name-field">
                    <div>
                        <label for="first name"> First Name: </label>
                        <input type="text" name="name" placeholder="First Name">
                    </div>
                    <div>
                        <label for="last name"> Last Name: </label>
                        <input type="text" name="last name" placeholder="Last Name">
                    </div>
                </div>
                <div class="name-field">
                    <div>
                        <label for="tel">Phone Number: </label>
                        <input type="number" name="Phone number" placeholder="telephone">
                    </div>
                  <div>
                    <label for="email">Email: </label>
                    <input type="email" name="Email" placeholder="Email">
                  </div>
                </div>
                <input type="submit" value="SEND"> 
            </form>
        </div>
        <div class="connect">
            <h6>CONNECT WITH US</h6>
            <hr>
            <div class="connect-with">
            <mesage>
                <p>Phone:654993197</p>
            <p> Email:tafouekenglandry@gmail.com</p>
            <p>  Country and City: Cameroon and Douala</p>
            <p>location:FinBarre Essec</p>
            </message>    
        </div>
        </div>
    </div>
</section>
</body>
<footer>
    <div class="wrapper">
        <h1>Milena Appartement<span class="blue">.</span></h1>
        <div class="copyright">Copyright @ 2016.tous droits reserves</div>
    </div>
</footer>
</html>