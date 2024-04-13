let darkMode = false;
function changeDarkMode() {
    if(darkMode) {
        darkMode = false;
        document.documentElement.style.setProperty("background", "linear-gradient(90deg, rgba(133,224,133,1) 20%, rgba(255,77,77,1) 50%, rgba(0,212,255,1) 85%)");
        document.documentElement.style.setProperty("color", "#000");
        document.getElementById("darkMode").src="../assets/moon.svg";
        document.getElementById("darkMode").style.background="#b3b3b3";
    }else {
        darkMode = true;
        document.documentElement.style.setProperty("background", "#000");
        document.documentElement.style.setProperty("color", "#fff");
        document.getElementById("darkMode").src="../assets/sun.svg";
        document.getElementById("darkMode").style.background="yellow";
        document.getElementById("darkMode").style.border="none";
    };
};
