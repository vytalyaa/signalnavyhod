document.querySelector(".login-button").addEventListener("click", function(){

    console.log("loh");
    document.querySelector(".black-bg").classList.add("active-bg");
    document.querySelector(".popup").classList.add("active");

});
    

document.querySelector(".close-btn").addEventListener("click", function(){

    console.log("loh");
    document.querySelector(".black-bg").classList.remove("active-bg");
    document.querySelector(".popup").classList.remove("active");

});