<!--
//configure the paths of the images, plus corresponding target links
slideshowimages("../images/web.jpg","../images/web1.jpg","../images/web2.jpg","../images/web3.jpg","../images/web4.jpg", "../images/web5.jpg","../images/web6.jpg","../images/web7.jpg","../images/web8.jpg","../images/web9.jpg","../images/web10.jpg","../images/web11.jpg","../images/web12.jpg","../images/web13.png")
slideshowlinks("http://test2.udefero.com/images/web.jpg","http://test2.udefero.com/images/web1.jpg","http://test2.udefero.com/images/web2.jpg","http://test2.udefero.com/images/web3.jpg","http://test2.udefero.com/images/web4.jpg","http://test2.udefero.com/images/web5.jpg","http://test2.udefero.com/images/web6.jpg",
"http://test2.udefero.com/images/web7.jpg", "http://test2.udefero.com/images/web8.jpg", "http://test2.udefero.com/images/web9.jpg", "http://test2.udefero.com/images/web10.jpg", "http://test2.udefero.com/images/web11.jpg", "http://test2.udefero.com/images/web12.jpg", "http://test2.udefero.com/images/web13.png")
//configure the speed of the slideshow, in miliseconds
var slideshowspeed=3000
var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()
//-->