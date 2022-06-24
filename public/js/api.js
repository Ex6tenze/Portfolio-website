
async function init() {
    // Select the weather report location on navbar
    const domElement = document.getElementById("weather");
    // Call the weather API
    const data = await getWeatherData();

    // Make new navbar item
    // Create anchor
    const a = document.createElement("a");
    // Add classes to anchor
    a.classList.add('nav-link');
    a.classList.add('active');
    // Set 
    a.innerHTML = `<img src=${data.current.condition.icon}>`;
    domElement.append(a);
}

async function getWeatherData() {
    try {
        let response = await fetch("https://api.weatherapi.com/v1/current.json?key=60425d75ab24426fb3d105951222406&q=51.49517119575929,3.6096063539582626&aqi=no");
        let data = await response.json();
        console.log(data);
        return data;
    } catch (err) {
        console.error("Error: ", err)
    }
}

init();