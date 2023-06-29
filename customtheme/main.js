const hamburger = document.querySelector("input[id=hamburger]");
const mobileList = document.querySelector(".mobile_list");

hamburger.addEventListener('change', function(){
    if(this.checked && window.innerWidth <768){
        mobileList.classList.add('display_item');
    } else {
        mobileList.classList.remove('display_item');
    }
})