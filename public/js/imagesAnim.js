// var fullimgBox = document.getElementById("fullImgBox")
// var fullimgBox = document.getElementById("fullImgBox");

// function openfullImg(pic) {
//     fullImgBox.style.display = 'flex';
//     fullImg.src = pic;
// }

// function closefullImg() {
//     fullImgBox.style.display = 'none';
// }

function openGallery(imageSrc, index) {
    const overlay = document.querySelector('.gallery-overlay');
    const galleryImage = document.querySelector('.gallery-image');

    galleryImage.src = imageSrc;
    overlay.style.display = 'flex';


}

function closeGallery() {
    const overlay = document.querySelector('.gallery-overlay');
    overlay.style.display = 'none';
}