document.addEventListener('DOMContentLoaded', function() {
            const timeToggle = document.getElementById('timeToggle');
            const timeDropdown = document.getElementById('timeDropdown');
            const selectedTimeDisplay = document.getElementById('selectedTime');
            const actualTimeInput = document.getElementById('time');
            const setTimeBtn = document.querySelector('.set-time-btn');
            const hoursColumn = document.getElementById('hoursColumn');
            const minutesColumn = document.getElementById('minutesColumn');
            const amPmBtns = document.querySelectorAll('.am-pm-btn');
            
            let selectedHour = '09';
            let selectedMinute = '30';
            let selectedAmPm = 'AM';
            
            // Generate hours for the roulette
            function generateHours() {
                hoursColumn.innerHTML = '';
                
                // Add padding items for better scrolling
                for (let i = 0; i < 2; i++) {
                    const emptyItem = document.createElement('div');
                    emptyItem.className = 'time-item empty';
                    emptyItem.innerHTML = '&nbsp;';
                    hoursColumn.appendChild(emptyItem);
                }
                
                // Add hours 1-12
                for (let hour = 1; hour <= 12; hour++) {
                    const hourText = hour.toString().padStart(2, '0');
                    const hourItem = document.createElement('div');
                    hourItem.className = 'time-item';
                    hourItem.textContent = hourText;
                    
                    if (hourText === selectedHour) {
                        hourItem.classList.add('selected');
                    }
                    
                    hourItem.dataset.value = hourText;
                    hoursColumn.appendChild(hourItem);
                }
                
                // Add padding items at the end
                for (let i = 0; i < 2; i++) {
                    const emptyItem = document.createElement('div');
                    emptyItem.className = 'time-item empty';
                    emptyItem.innerHTML = '&nbsp;';
                    hoursColumn.appendChild(emptyItem);
                }
            }
            
            // Generate minutes for the roulette
            function generateMinutes() {
                minutesColumn.innerHTML = '';
                
                // Add padding items for better scrolling
                for (let i = 0; i < 2; i++) {
                    const emptyItem = document.createElement('div');
                    emptyItem.className = 'time-item empty';
                    emptyItem.innerHTML = '&nbsp;';
                    minutesColumn.appendChild(emptyItem);
                }
                
                // Add minutes in 15-minute increments (00, 15, 30, 45)
                for (let min = 0; min < 60; min += 15) {
                    const minText = min.toString().padStart(2, '0');
                    const minItem = document.createElement('div');
                    minItem.className = 'time-item';
                    minItem.textContent = minText;
                    
                    if (minText === selectedMinute) {
                        minItem.classList.add('selected');
                    }
                    
                    minItem.dataset.value = minText;
                    minutesColumn.appendChild(minItem);
                }
                
                // Add padding items at the end
                for (let i = 0; i < 2; i++) {
                    const emptyItem = document.createElement('div');
                    emptyItem.className = 'time-item empty';
                    emptyItem.innerHTML = '&nbsp;';
                    minutesColumn.appendChild(emptyItem);
                }
            }
            
            // Initialize time options
            generateHours();
            generateMinutes();
            
            // Set up the roulette scrolling and selection
            function setupRoulette(column, itemHeight = 40) {
                column.addEventListener('scroll', function() {
                    // Get all non-empty time items
                    const items = column.querySelectorAll('.time-item:not(.empty)');
                    
                    // Find which item is closest to the center
                    const columnRect = column.getBoundingClientRect();
                    const centerY = columnRect.top + columnRect.height / 2;
                    
                    let closestItem = null;
                    let minDistance = Number.MAX_VALUE;
                    
                    items.forEach(item => {
                        const itemRect = item.getBoundingClientRect();
                        const itemCenter = itemRect.top + itemRect.height / 2;
                        const distance = Math.abs(centerY - itemCenter);
                        
                        if (distance < minDistance) {
                            minDistance = distance;
                            closestItem = item;
                        }
                    });
                    
                    // Mark the closest item as selected
                    if (closestItem) {
                        items.forEach(item => item.classList.remove('selected'));
                        closestItem.classList.add('selected');
                        
                        // Update the selected value
                        const value = closestItem.dataset.value;
                        if (column === hoursColumn) {
                            selectedHour = value;
                        } else if (column === minutesColumn) {
                            selectedMinute = value;
                        }
                    }
                });
                
                // Make it snap to items when scrolling stops
                let scrollTimeout;
                column.addEventListener('scroll', function() {
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function() {
                        const selected = column.querySelector('.time-item.selected');
                        if (selected) {
                            // Calculate position to snap to
                            const targetPos = selected.offsetTop - (column.clientHeight / 2) + (selected.clientHeight / 2);
                            
                            // Smooth scroll to that position
                            column.scrollTo({
                                top: targetPos,
                                behavior: 'smooth'
                            });
                        }
                    }, 150);
                });
            }
            
            // Set up roulette scrolling
            setupRoulette(hoursColumn);
            setupRoulette(minutesColumn);
            
            // Function to scroll to selected time
            function scrollToSelected() {
                // Scroll hour to selected value
                const selectedHourItem = hoursColumn.querySelector(`.time-item[data-value="${selectedHour}"]`);
                if (selectedHourItem) {
                    const targetHourPos = selectedHourItem.offsetTop - (hoursColumn.clientHeight / 2) + (selectedHourItem.clientHeight / 2);
                    hoursColumn.scrollTo({
                        top: targetHourPos,
                        behavior: 'auto'
                    });
                }
                
                // Scroll minute to selected value
                const selectedMinuteItem = minutesColumn.querySelector(`.time-item[data-value="${selectedMinute}"]`);
                if (selectedMinuteItem) {
                    const targetMinPos = selectedMinuteItem.offsetTop - (minutesColumn.clientHeight / 2) + (selectedMinuteItem.clientHeight / 2);
                    minutesColumn.scrollTo({
                        top: targetMinPos,
                        behavior: 'auto'
                    });
                }
            }
            
            // Toggle dropdown
            timeToggle.addEventListener('click', function() {
                if (timeDropdown.style.display === 'none') {
                    timeDropdown.style.display = 'block';
                    // Scroll to currently selected time
                    setTimeout(scrollToSelected, 10);
                } else {
                    timeDropdown.style.display = 'none';
                }
            });
            
            // Handle AM/PM selection
            amPmBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    amPmBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    selectedAmPm = this.getAttribute('data-value');
                });
            });
            
            // Set time button click
            setTimeBtn.addEventListener('click', function() {
                // Update the displayed time
                selectedTimeDisplay.textContent = `${parseInt(selectedHour)}:${selectedMinute} ${selectedAmPm}`;
                
                // Update the actual time input
                let hours = parseInt(selectedHour);
                if (selectedAmPm === 'PM' && hours !== 12) {
                    hours += 12;
                }
                if (selectedAmPm === 'AM' && hours === 12) {
                    hours = 0;
                }
                
                actualTimeInput.value = `${hours.toString().padStart(2, '0')}:${selectedMinute}`;
                
                // Close dropdown
                timeDropdown.style.display = 'none';
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = timeToggle.contains(event.target) || timeDropdown.contains(event.target);
                
                if (!isClickInside && timeDropdown.style.display === 'block') {
                    timeDropdown.style.display = 'none';
                }
            });
        });