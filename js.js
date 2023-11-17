let idex =0;
function next(){
    let img = document.getElementsByClassName('myslide');
    if(idex>=img.length){
        idex=0;
    }
    if(idex<0){
        idex=img.length-1;
    }
    for(let i=0;i<img.length;i++){
        img[i].style.display="none";
    }
    img[idex].style.display="block";
    idex++;
}
function pre(){
    let img = document.getElementsByClassName('myslide');
    if(idex>=img.length){
        idex=0;
    }
    if(idex<0){
        idex=img.length-1;
    }
    for(let i=0;i<img.length;i++){
        img[i].style.display="none";
    }
    img[idex].style.display="block";
    idex--;
}
let autoimg ;
function autoslide() {
    let img = document.getElementsByClassName('myslide');
    if(idex>=img.length){
        idex=0;
    }
    if(idex<0){
        idex=img.length-1;
    }
    for(let i=0;i<img.length;i++){
        img[i].style.display="none";
    }
    img[idex].style.display="block";
    idex++;
    autoimg= setTimeout(autoslide,2000);

}