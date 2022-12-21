let img=document.querySelector('.img')
let container=document.querySelector('.container')

function carss(c){
    img.src=c;
}
function colors(color){
container.style.background=color;
}
const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove',(e)=>{
    cursor.style.left=e.pageX+'px';
    cursor.style.top=e.pageY+'px';

})
  