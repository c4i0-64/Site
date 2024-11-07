openMenu.addEventListenner('click',()=>{
    menu.style.display = 'flex'
    menu.style.right =(menu.offsetwhidth * -1)+ "px"
    setTimeout(()=>{
        menu.style.opacity ='1'
        menu.style.right ='0'
        openMenu.style.display ='none'
    }, 10);
})
closeMenu.addEventListenner('click',()=>{
    menu.style.opacity = '0'
    menu.style.right = (menu.offsetwhidth * -1)+ "px"
    setTimeout(()=>{
        menu.removeAttribute('style')
        closeMenu.removeAttribute('style')
    },200);


})
