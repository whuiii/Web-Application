      function calculateBMI() {
        var weight = document.getElementById("weight").value;
        var height = document.getElementById("height").value;

        if (weight <= 0 || height <= 0) {
          alert("Please enter valid weight and height values.");
          return false;
        }

        var bmi = weight / (height / 100) * (height / 100);
        var bmiCategory = "";

        if (bmi < 18.5) {
          bmiCategory = "Underweight";
        } else if (bmi >= 18.5 && bmi <= 24.9) {
          bmiCategory = "Normal weight";
        } else if (bmi >= 25 && bmi <= 29.9) {
          bmiCategory = "Overweight";
        } else {
          bmiCategory = "Obese";
        }

        var result = "Your BMI is " + bmi.toFixed(2) + ".<br> You are classified as " + bmiCategory + ".";
        document.getElementById("result").innerHTML = result;

        return false;
      }
