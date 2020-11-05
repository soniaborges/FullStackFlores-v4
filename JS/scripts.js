function mudaestilo () {
    let item_menu = event.target
    item_menu.style.color="black"
}

function estilo () {
    let item_menu = event.target
    item_menu.style.color="blue"
}

function mudarestado(el) {
    let buquets = document.getElementsByClassName("produtos");
    for( let i=0; i<buquets.length;i++){
        console.log(buquets[i]);
        console.log(el);
        console.log(buquets[i].id==el);
        if(buquets[i].id==el){
            buquets[i].style.display = "block";
        } else {
            buquets[i].style.display = "none";
        }
    }
}

function mostrartodos() {
    let buquets = document.getElementsByClassName("produtos");
    for( let i=0; i<buquets.length;i++){
        buquets[i].style.display = "block";
    }
}
