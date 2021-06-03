let maintemp, settemp = {
    "apiKey" : "07e80a1d3422afdcd76bbd8ccb04fa58",
    fetchweather: function (city) {
        fetch(
            "http://api.openweathermap.org/data/2.5/weather?q=" 
            + city 
            + "&units=metirc&appid=" 
            + appKey
        )
        .then((response) => response.json())
        .then((data) => this.displayWeather(data));
    },
    displayWeather = function (data) {
        const { name } = data;
        const { icon, description } = data.maintemp,settemp;
        const { temp, humidity } = data.main;
        const { speed } = data.wind;
        console.log( name, icon, description, temp, humidity, speed)
        document.querySelector(".temp1").innerText = temp + "°C";
        document.querySelector(".subtemp").src =
        "/Resources/Images/New Icons/Icon awesome-temperature-high.svg" + temp;
        document.querySelector(".humidity").innerText = humidity + "%";
        document.querySelector(".windSpeed").innerText = speed + "km/h";
    }
};