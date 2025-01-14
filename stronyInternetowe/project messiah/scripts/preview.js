function turnPreviewOn(path) {
    let element = document.getElementById('preview-bg');
    element.style.display = 'flex';
    let elementImg = document.getElementById('preview-img');
    elementImg.style.display = 'flex';
    elementImg.src = path;
}
function turnPreviewOff() {
    let element = document.getElementById('preview-bg');
    element.style.display = 'none';
    let elementImg = document.getElementById('preview-img');
    elementImg.style.display = 'none';
}