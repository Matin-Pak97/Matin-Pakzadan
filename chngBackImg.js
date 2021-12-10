var images = ['shiraz-back-1.jpg', 'shiraz-back-2.jpg', 'shiraz-back-3.jpg'],
    index = 1, // starting index
    maxImages = images.length - 1;
const bckImg = $('#bckImg');

var timer = setInterval(function() {
    var currentImage = images[index];
    index = (index == maxImages) ? 0 : ++index;
    bckImg.fadeOut(200, function() {
        bckImg.attr("src", 'image/' + currentImage);
        bckImg.fadeIn(200);
    });
}, 3000);