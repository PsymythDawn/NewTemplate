
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('dateInput');
    const calendarDropdown = document.getElementById('calendarDropdown');
    const monthYearDisplay = document.getElementById('monthYearDisplay');
    const calendarDays = document.getElementById('calendarDays');
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const removeBtn = document.getElementById('removeDate');
    const setDateBtn = document.getElementById('setDate');
    // Removed references to selectedDateDisplay and selectedDateValue
    
    let currentDate = new Date();
    let selectedDate = null;
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    
    // Show calendar when clicking on input
    dateInput.addEventListener('click', function() {
        calendarDropdown.style.display = 'block';
        generateCalendar(currentMonth, currentYear);
    });
    
    // Close calendar when clicking outside
    document.addEventListener('click', function(e) {
        if (!dateInput.contains(e.target) && !calendarDropdown.contains(e.target)) {
            calendarDropdown.style.display = 'none';
        }
    });
    
    // Previous month button
    prevMonthBtn.addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });
    
    // Next month button
    nextMonthBtn.addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });
    
    // Remove date button
    removeBtn.addEventListener('click', function() {
        selectedDate = null;
        dateInput.value = '';
        selectedDateDisplay.style.display = 'none';
        calendarDropdown.style.display = 'none';
        generateCalendar(currentMonth, currentYear);
    });
    
    // Today button
    setDateBtn.addEventListener('click', function() {
        // Set to today's date
        const today = new Date();
        selectedDate = today;
        
        // Update current month/year view to show today's month
        currentMonth = today.getMonth();
        currentYear = today.getFullYear();
        generateCalendar(currentMonth, currentYear);
        
        // Format and display today's date
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('en-US', options);
        dateInput.value = formattedDate;
        
        // Close the calendar
        calendarDropdown.style.display = 'none';
    });
    
    // Generate calendar
    function generateCalendar(month, year) {
        calendarDays.innerHTML = '';
        
        // Update month and year display
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 
                            'July', 'August', 'September', 'October', 'November', 'December'];
        monthYearDisplay.textContent = `${monthNames[month]} ${year}`;
        
        // Get first day of month and last day of month
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        // Get days from previous month
        const daysInPrevMonth = new Date(year, month, 0).getDate();
        
        // Add days from previous month
        for (let i = firstDay - 1; i >= 0; i--) {
            const dayElement = document.createElement('div');
            dayElement.className = 'day other-month disabled'; // All previous month days are disabled
            dayElement.textContent = daysInPrevMonth - i;
            calendarDays.appendChild(dayElement);
        }
        
        // Add days of current month
        const today = new Date();
        const isCurrentMonth = today.getMonth() === month && today.getFullYear() === year;
        
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement('div');
            dayElement.className = 'day';
            dayElement.textContent = day;
            
            // Create a date object for this day
            const currentDate = new Date(year, month, day);
            
            // Check if it's today
            if (isCurrentMonth && day === today.getDate()) {
                dayElement.classList.add('today');
            }
            
            // Check if it's a past date (before today)
            if (currentDate < new Date(today.getFullYear(), today.getMonth(), today.getDate())) {
                dayElement.classList.add('disabled');
            }
            
            // Check if it's selected date
            if (selectedDate && selectedDate.getDate() === day && 
                selectedDate.getMonth() === month && 
                selectedDate.getFullYear() === year) {
                dayElement.classList.add('selected');
            }
            
            // Add click event to select date (only for non-disabled dates)
            if (!dayElement.classList.contains('disabled')) {
                dayElement.addEventListener('click', function() {
                    // Remove selected class from previously selected day
                    const previousSelected = document.querySelector('.day.selected');
                    if (previousSelected) {
                        previousSelected.classList.remove('selected');
                    }
                    
                    // Add selected class to clicked day
                    dayElement.classList.add('selected');
                    
                    // Update selected date
                    selectedDate = new Date(year, month, day);
                    
                    // Format and display the date in the input
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    const formattedDate = selectedDate.toLocaleDateString('en-US', options);
                    dateInput.value = formattedDate;
                    
                    // Removed display update code
                    
                    // Auto-close the calendar after selection
                    setTimeout(() => {
                        calendarDropdown.style.display = 'none';
                    }, 200);
                });
            }
            
            calendarDays.appendChild(dayElement);
        }
        
        // Add days from next month to complete the grid (up to 42 cells = 6 rows of 7 days)
        const totalCells = firstDay + daysInMonth;
        const nextMonthDays = 42 - totalCells;
        
        for (let day = 1; day <= nextMonthDays; day++) {
            const dayElement = document.createElement('div');
            dayElement.className = 'day other-month';
            dayElement.textContent = day;
            calendarDays.appendChild(dayElement);
        }
    }
    
    // Initialize calendar with current month
    generateCalendar(currentMonth, currentYear);
});
