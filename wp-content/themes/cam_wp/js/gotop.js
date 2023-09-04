jQuery(function() { var pagetop= $('#page_top'); pagetop.hide(); $(window).scroll(function () { if ($(this).scrollTop() > 1400) { pagetop.fadeIn();} else { pagetop.fadeOut();}}); pagetop.click(function () { $('body,html').animate({ scrollTop: 0
}, 500); return false;});}); 

const myFunc = function(src){
    return new Promise(function(resolve, reject){
        const image = new Image();
        image.src = src;
        image.onload = function(){resolve(image);}
        image.onerror = function(error){reject(error);}
    });
}
const imgs = document.getElementsByTagName('img');
for (const img of imgs) {
    const src = img.getAttribute('src');
    myFunc(src)
    .then(function(res){
        if(!img.hasAttribute('width')){img.setAttribute('width', res.width);}
        if(!img.hasAttribute('height')){img.setAttribute('height', res.height);}
    })
    .catch(function(error){console.log(error);});
}