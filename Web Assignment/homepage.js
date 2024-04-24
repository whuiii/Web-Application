function transition() {
    let tl = gsap.timeline();

    tl.to('#before', 0.5, { height: '0%', ease: 'power2.out' })
      .to('#after', 0.5, { height: '0%', ease: 'power2.out' }, '-=0.5')
      .to('.topnav', 0.5, { opacity: 1, ease: 'power2.out' }) // Fade in the navigation bar
      .to('body', 0, { overflow: 'auto' }); // Enable scrolling after animation
}

document.addEventListener('DOMContentLoaded', function() {
    // Call the transition function when the page is loaded
    transition();
});

    //   function calculateBMI() {
    //     var weight = document.getElementById("weight").value;
    //     var height = document.getElementById("height").value;

    //     if (weight <= 0 || height <= 0) {
    //       alert("Please enter valid weight and height values.");
    //       return false;
    //     }

    //     var bmi = weight / (height / 100) * (height / 100);
    //     var bmiCategory = "";

    //     if (bmi < 18.5) {
    //       bmiCategory = "Underweight";
    //     } else if (bmi >= 18.5 && bmi <= 24.9) {
    //       bmiCategory = "Normal weight";
    //     } else if (bmi >= 25 && bmi <= 29.9) {
    //       bmiCategory = "Overweight";
    //     } else {
    //       bmiCategory = "Obese";
    //     }

    //     var result = "Your BMI is " + bmi.toFixed(2) + ".<br> You are classified as " + bmiCategory + ".";
    //     document.getElementById("result").innerHTML = result;

    //     return false;
    //   }
function calculateBMI() {
  var weightInput = document.getElementById("weight");
  var heightInput = document.getElementById("height");
  var resultDiv = document.getElementById("result");

  var weight = parseFloat(weightInput.value);
  var height = parseFloat(heightInput.value);

  if (isNaN(height) || isNaN(weight)) {
    resultDiv.innerHTML = "Please enter valid height and weight.";
    return;
  }

  var bmi = weight / (height ** 2);
  var category = "";

  if (bmi < 18.5) {
    category = "Underweight";
  } else if (bmi < 25) {
    category = "Normal";
  } else if (bmi < 30) {
    category = "Overweight";
  } else {
    category = "Obese";
  }
  resultDiv.innerHTML = category + ", your BMI is " + bmi.toFixed(2);
}