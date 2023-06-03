userHasScrolled = false;
window.onscroll = () => 
{
    userHasScrolled = true;
};

const scrollDown = document.getElementById("scrollDown");
const myInterval = setInterval(() => {
    if(!userHasScrolled) {
        scrollDown.style.display = 'block';
        $("#scrollDown").animate({bottom: '0'});
        
        const mySecondInterval = setInterval(() => {
            if(userHasScrolled){
                clearInterval(mySecondInterval);
                $("#scrollDown").animate({bottom: '-150'});
                $("#scrollDown").fadeOut(500); 
                clearInterval(myInterval);
            }
        }, 200);

        setTimeout(() => {
            clearInterval(mySecondInterval);
            $("#scrollDown").animate({bottom: '-150'});
            $("#scrollDown").fadeOut(500);       
        }, 5000)
    } else {
        clearInterval(myInterval);
    }
}, 20000);