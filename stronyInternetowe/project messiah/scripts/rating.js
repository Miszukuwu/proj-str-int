let currentRating = 0;
function setRating(rating){
    currentRating = rating;
    let ratingContainer = document.getElementById('rating-container');
    let amountOfStars = ratingContainer.children.length;
    for (let i = 0; i < rating; i++){
        ratingContainer.children.item(i).src = '../media/FullStar.png'
    }
    for (let i = rating; i < amountOfStars; i++){
        ratingContainer.children.item(i).src = '../media/EmptyStar.png'
    }
}
function previewRatingOn(rating){
    let ratingContainer = document.getElementById('rating-container');
    for (let i = currentRating; i < rating; i++){
        ratingContainer.children.item(i).src = '../media/HalfStar.png'
    }
}
function previewRatingOff(rating){
    let ratingContainer = document.getElementById('rating-container');
    for (let i = currentRating; i < rating; i++){
        ratingContainer.children.item(i).src = '../media/EmptyStar.png'
    }
}
function sendRating(rating){
    let ratingMessage = document.getElementById('rating-message');
    ratingMessage.style.display = 'block';
    ratingMessage.innerHTML = 'Ocena została przesłana.';
    if (rating === 5){
        ratingMessage.innerHTML += ' Dziękuje za pozytywną ocenę'
    }
}