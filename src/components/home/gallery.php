<section id="gallery">
    <h4>GALLERY PHOTO</h4>
    <!-- <div class="full-img" id="fullImgBox">
        <img src="public/imgs/essentia-luxury-hotel.jpg" height="300px" width="300px" id="fullImg">
        <span onclick="closefullImg()">X</span>
    </div> -->



    <div class="image-gallery">
        <img class="anim" src="public/imgs/essentia-luxury-hotel.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
        <img class="anim" src="public/imgs/room5.png" height="300px" width="300px" onclick="openGallery(this.src, index) ">
        <img class="anim" src="public/imgs/room1.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
        <img class="anim" src="public/imgs/room4.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
    </div>
    <div class="image-gallery">
        <img class="anim" src="public/imgs/room3.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
        <img class="anim" src="public/imgs/room6.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
        <img class="anim" src="public/imgs/room7.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
        <img class="anim" src="public/imgs/room8.jpg" height="300px" width="300px" onclick="openGallery(this.src)">
    </div>

    <div class="gallery-overlay" onclick="closeGallery()">
        <span class="close-button" onclick="closeGallery()">&times;</span>
        <img src="" alt="Gallery Image" class="gallery-image">
    </div>
</section>