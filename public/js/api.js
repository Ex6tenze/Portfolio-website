
async function init() {
    // Select the navbar
    const domElement = document.getElementById("navbarNav");
    // Call the weather API
    const data = await getWeatherData();

    // Make new weather logo
    const weatherLogo = document.createElement("div")
    weatherLogo.classList.add("weather")
    // Connect API
    weatherLogo.innerHTML = `
            <img src=${data.current.condition.icon}>
            <ul class=navbar-text>
                <li><a class="nav-link active">${data.current.temp_c} °C</a></li>
                <li><a class="nav-link active">${data.current.condition.text}</a></li>
            </ul>`;
    domElement.append(weatherLogo);
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