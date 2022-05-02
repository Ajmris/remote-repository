let x=1;
while (x <= 12){
    let plane =document.createElement('div');
    plane.className=`plane plane-${x}`;
    plane.style.transform=`rotateY(${x*15}deg)`;
    document.querySelector('.wrapper').appendChild(plane);
    for(y=1; y<=36; y++){
        let spoke=document.createElement('div');
        spoke.className=`spoke spoke-${y}`;
        spoke.innerHTML=`<div class="dot"
        style="background-color:${y%2===0 ? '#00fffa' : '#ff9800'};
        animation: pulsate .5s infinite ${aDelay(y)}s alternate both"></div>`;
        spoke.style.transform=`rotateZ(${y}0deg)`;
        document.querySelector(`.plane-${x}`).appendChild(spoke);
    }
    x++;
}
function aDelay(t){
    switch (t){
        case 1:
        case 35:
            return .05;
        case 2:
        case 34:
            return .1;
        case 3:
        case 33:
            return .15;
        case 4:
        case 32:
            return .2;
        case 5:
        case 31:
            return .25;
        case 6:
        case 30:
            return .3;
        case 7:
        case 29:
            return .35;
        case 8:
        case 28:
            return .4;
        case 9:
        case 27:
            return .45;
        case 10:
        case 26:
            return .50;
        case 11:
        case 25:
            return .55;
        case 12:
        case 24:
            return .60;
        case 13:
        case 23:
            return .65;
        case 14:
        case 22:
            return .70;
        case 15:
        case 21:
            return .75;
        case 16:
        case 20:
            return .80;
        case 17:
        case 19:
            return .85;
        case 18:
            return .95;
        case 36:
            return 0;
        default:
            return 1;
    }
}