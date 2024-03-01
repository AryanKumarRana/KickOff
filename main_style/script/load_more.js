let loadMoreBtn = document.querySelector('#load-more');
//let loadMoreBtn2 = document.querySelector('#load-moree');
let currentItem = 3;
// let currentItemm = 3;

loadMoreBtn.onclick = () =>{
let boxes = [...document.querySelectorAll(".conta .box-container .box ")];
for (var i = currentItem; i < currentItem + 3; i++){
   boxes[i].style.display = 'inline-block';
}
currentItem += 3;

if(currentItem >= boxes.length){
   loadMoreBtn.style.display = 'none';
}     
}

// loadMoreBtn2.onclick = () =>{
//    let boxess = [...document.querySelectorAll(".contai .box-container .box")];
//    for(var j = currentItemm; j<currentItemm + 3; j++){
//       boxess[j].style.display = 'inline-block';
//    }
//    currentItemm +=3;

//    if(currentItemm >= boxess.length){
//       loadMoreBtn2.style.display = 'none';
//    }
// }