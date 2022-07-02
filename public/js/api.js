
async function init() {
    // Select the navbar
    const domElement = document.getElementById("navbarNav");
    // Call the weather API
    const data = await getWeatherData();

    // Make weather section
    const weather = document.createElement("div")
    // Add div class for styling
    weather.classList.add("weather")
    // Define weather elements
    weather.innerHTML = `
            <img src=${data.current.condition.icon}>
            <ul class=navbar-text>
                <li><a class="nav-link active">${data.current.temp_c} °C</a></li>
                <li><a class="nav-link active">${data.current.condition.text}</a></li>
            </ul>`;
    // Add elements to HTML
    domElement.append(weather);
}

async function getWeatherData() {
    try {
        // Get API response using WeatherAPI key
        let response = await fetch("https://api.weatherapi.com/v1/current.json?key=60425d75ab24426fb3d105951222406&q=51.49517119575929,3.6096063539582626&aqi=no");
        // Put response into variable and return it
        let data = await response.json();
        console.log(data);
        return data;
    } catch (err) {
        // Throw error in the console if applicable
        console.error("Error: ", err)
    }
}

// Call the API
init();