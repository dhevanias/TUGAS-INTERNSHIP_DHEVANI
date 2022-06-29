const countdown = () => {
    const countDate = new Date('July 20, 2001').getTime();
    const now = new Date().getTime();
    const gap = countDate - now ;

    var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
    var oneMonth = 30*24*60*60*1000;
    var firstDate = new Date(2001,20,07);
    var secondDate = new Date();

    var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));

    console.log(diffDays);
    
    // // calculator the shit
    const totalhari = Math.round(Math.abs(gap/(oneDay)));

    
    const textYear = Math.floor(totalhari/365);
    const textMonth = Math.floor((totalhari % 365)/30);
    const textDay = Math.floor(totalhari % 365 % 30);
    const textHour = new Date().getHours();
    const textMinute = new Date().getMinutes();
    const textSecond = new Date().getSeconds();
    

    document.querySelector(".year").innerText = textYear;
    document.querySelector(".month").innerText = textMonth;
    document.querySelector(".day").innerText = textDay;
    document.querySelector(".hour").innerText = textHour;
    document.querySelector(".minute").innerText = textMinute;
    document.querySelector(".second").innerText = textSecond;

};

setInterval(countdown, 1000);