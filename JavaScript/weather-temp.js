let weather = {
    "apiKey": "07e80a1d3422afdcd76bbd8ccb04fa58",
    fetchWeather: function (city){
        fetch(
            "http://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric&appid=" + this.apiKey
        ).then((respone) => respone.json())
        .then((data) => this.displayWeather(data));
    },
    displayWeather: function (data){
        const { name } = data;
        const { icon, description } = data.weather[0];
        const { temp, humidity } = data.main;
        const { speed } = data.wind;
        console.log(name, icon, description, temp, humidity, speed);
        document.querySelector(".city").innerText = "Weather in " + name;
        document.querySelector(".icon").src = 
        "https://openweathermap.org/img/wn/" + icon + ".png";
        document.querySelector(".description").innerText = description;
        document.querySelector(".temperature").innerText = temp + "°C";
        document.querySelector(".humidity").innerText = "Humidity: " + humidity + "%";
        document.querySelector(".windSpeed").innerText = "Wind Speed: " + speed + "km/h";
    },
    search: function(){
        this.fetchWeather(document.querySelector(".search-bar").value);
    }
};

document
    .querySelector(".search button")
    .addEventListener("click" , function(){
        weather.search();
    });

document
    .querySelector(".search button")
    .addEventListener("Enter" , function(event){
        if(event.key == "Enter"){
            weather.search();
        }
    });