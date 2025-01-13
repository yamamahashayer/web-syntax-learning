function getJoke() {
        // Create an XMLHttpRequest object
        const xhr = new XMLHttpRequest();
    
        // Open a GET request to a public jokes API
        xhr.open("GET", "https://api.chucknorris.io/jokes/random", true);
    
        // Handle the response
        xhr.onload = function () {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText); // Parse JSON response
            document.getElementById("joke").textContent = response.value; // Display the joke
        } else {
            document.getElementById("joke").textContent = "Failed to load joke.";
        }
        };
    
        // Send the request
        xhr.send();
    }
    

    const weatherData = {
        "Gaza": {
          "temperature": 28,
          "description": "Sunny"
        },
        "Ramallah": {
          "temperature": 22,
          "description": "Partly Cloudy"
        },
        "Nablus": {
          "temperature": 25,
          "description": "Clear Sky"
        },
        "Hebron": {
          "temperature": 20,
          "description": "Rainy"
        },
        "Jerusalem": {
          "temperature": 23,
          "description": "Cloudy"
        }
      };
  
      // وظيفة لجلب الطقس للمدينة المختارة
      function getWeather() {
        // الحصول على اسم المدينة المختارة
        const city = document.getElementById("city").value;
  
        // التحقق من وجود بيانات الطقس للمدينة
        const cityWeather = weatherData[city];
  
        if (cityWeather) {
          // عرض بيانات الطقس
          document.getElementById("weather").innerHTML = `
            City: ${city} <br>
            Temperature: ${cityWeather.temperature}°C <br>
            Weather: ${cityWeather.description}
          `;
        } else {
          // عرض رسالة خطأ إذا لم تكن المدينة موجودة
          document.getElementById("weather").textContent = "Weather data not found.";
        }
      }