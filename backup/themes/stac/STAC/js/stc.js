/*const blogs=document.querySelectorAll(".blogs");
if(blogs)
{
for(var i=0;i<blogs.length;i++){
    if(i==0){
    blogs[i].classList.add("blogs-first-block");
    break;
    }
}
}
const viewblock=document.querySelectorAll(".views-col");
if(viewblock)
{
for(var j=0;j<viewblock.length;j++){
    if(j==0){
        viewblock[j].classList.add("blogs-first-block");
    break;
    }
}
}*/
const viewblocks=document.querySelectorAll(".latest-blogs-v2");
if(viewblocks)
{
for(var k=0;k<viewblocks.length;k++){
    if(k==0){
        viewblocks[k].classList.add("blogs-first-block");
    break;
    }
}
}
function redirectToTop() {
    // Scroll the page to the top without reloading
    window.scrollTo(0, 0);
  }

