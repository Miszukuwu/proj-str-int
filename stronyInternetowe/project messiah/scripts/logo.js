const logos = ['controller.png', 'pc.png', 'switch.png']
let i = 0;
function logoUpdate(){
    if (i == logos.length) {
        i = 0;
    }
    document.getElementById('logo').src = "../media/"+logos[i++];
    setTimeout(logoUpdate, 5000);
}
logoUpdate()