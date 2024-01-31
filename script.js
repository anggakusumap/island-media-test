document.addEventListener("DOMContentLoaded", function () {
  // Set today's value using JavaScript
  var today = new Date();
  var daysOfWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  var todayValue = daysOfWeek[today.getDay()];
  document.getElementById("todayValue").textContent = todayValue;

  // Add event listeners to each day element
  var days = document.querySelectorAll(".day");
  days.forEach(function (dayElement) {
    dayElement.addEventListener("click", function () {
      // Remove the 'selected' class from all days
      days.forEach(function (day) {
        day.classList.remove("selected");
      });
      // Add the 'selected' class to the clicked day
      dayElement.classList.add("selected");
      selectDay(dayElement.textContent);
    });
  });
});

const selectDay = (day) => {
  var selectedDay = document.getElementById("selectedDayValue");
  selectedDay.textContent = day;
};
