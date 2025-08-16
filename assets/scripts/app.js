jQuery(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 24,
        nav: true,      // shows next & prev buttons
        dots: true,     // shows dots under the carousel
		items: 4,       // The number of items you want to see on the screen.
        responsiveClass:true,
        navText: ['', ''],
        responsive: {
            0: {          // from 0px up
                items: 2,
                margin: 6
            },
            768: {        // from 768px up
                items: 3,
                margin: 12
            },
            992: {        // from 992px up
                items: 4,
                margin: 12
            },
            1200: {       // from 1200px up
                items: 4,
                margin: 24
            }
        }
    });

    function handleFlatpickr(options) {
        const { 
            selector,
            mode = "single",
            addCustomButtons = false,
            scrollContainerSelector
        } = options;
        
        const isRangeMode = mode === "range";

        // Initialize Flatpickr
        let flatpickrInstance = flatpickr(selector, {
            // disableMobile: true,
            mode: mode,
            dateFormat: "d F, Y",
            locale: { firstDayOfWeek: 6 },
            defaultDate: isRangeMode ? [new Date(), new Date()] : [new Date()],
            minDate: "today",
            onReady: function(selectedDates, dateStr, instance) {
                // instance.open(); // Open the Flatpickr calendar 

                if(instance.calendarContainer) instance.calendarContainer.classList.add(selector.replace('#', ''));
                
                // Calendar icon click handler
                // const calendarIcon = instance.input.parentElement.querySelector('.calendar-icon');
                // calendarIcon?.addEventListener("click", () => flatpickrInstance.open());

                if (addCustomButtons) addCustomButtonsToInstance(instance); // add custom buttons
            },
            onOpen: function(selectedDates, dateStr, instance) {
                handleCalendarOnScroll(instance);
            },
            onChange: function(selectedDates, dateStr, instance) {
                const selected_date = document.getElementById('selected-date');
                
                if (selectedDates.length === 0) {
                    selected_date.innerHTML = '<p class="NoDateSelected">-</p>';
                    return;
                }

                const date = selectedDates[0]; // For single mode (or start date in range)
                
                const month = date.toLocaleString('en-US', { month: 'short' });
                const day = date.getDate();
                const weekday = date.toLocaleString('en-US', { weekday: 'short' });

                selected_date.innerHTML = `
                    <p class="month">${month}</p>
                    <p class="day">${day}</p>
                    <p class="weekday">${weekday}</p>
                `;
            },
            onClose: function(selectedDates, dateStr, instance) {
                // Dispatch a custom event when calendar closes
                const flatpickrCloseEvent = new CustomEvent('flatpickrClose', {
                    detail: {
                        selectedDates: selectedDates,
                        dateStr: dateStr,
                        instance: instance
                    }
                });
                document.dispatchEvent(flatpickrCloseEvent);
            },
        });

        function handleCalendarOnScroll(instance) {
            const inputElement = instance.input;
            const calendarElement = instance.calendarContainer;
            const scrollContainer = document.querySelector(scrollContainerSelector);

            if (!scrollContainer) return;

            // Function to update calendar position
            const updateCalendarPosition = () => {
                const rect = inputElement.getBoundingClientRect();
                const topPosition = rect.top + rect.height + 2; // 2px gap
                calendarElement.style.top = `${topPosition}px`;
            };

            // Update position immediately
            updateCalendarPosition();

            // Update position on scroll and resize
            scrollContainer.addEventListener('scroll', updateCalendarPosition);
            window.addEventListener('resize', updateCalendarPosition);

            // Cleanup event listeners when calendar closes
            instance._scrollHandler = updateCalendarPosition;
        }


        // Custom buttons functionality
        function addCustomButtonsToInstance(instance) {
            const today = new Date();

            // Generate 7 days starting from today
            const ranges = Array.from({ length: 7 }, (_, i) => {
                // const date = new Date(today);
                const date = new Date(today.getFullYear(), today.getMonth(), today.getDate());
                date.setDate(today.getDate() + i);

                const dayName = date.toLocaleString("en-US", { weekday: "short" });
                const dateNumber = date.toLocaleString("en-US", { month: "short", day: "numeric" });
                const price = 212; // Example static price — you can make this dynamic

                return {
                    date,
                    dayName,
                    dateNumber,
                    price,
                    iso: date.toISOString().split("T")[0]  // "YYYY-MM-DD"
                };
            });
            
            // Create container
            const container = document.createElement("div");
            container.className = "TourDateListWrapper";

            // Create buttons
            container.innerHTML = ranges.map(range => `
                <div class="tour-date-btn">
                    <button class="DateListItem" data-date="${range.date.toISOString()}">
                        <span class="day-name">${range.dayName}</span>
                        <span class="date-number">${range.dateNumber}</span>
                        <span class="price">-</span>
                    </button>
                </div>
            `).join('');

            container.innerHTML += `
                <div class="MoreDatesButton">
                    <div class="more-dates-button">
                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M12.6667 2.66675H3.33333C2.59695 2.66675 2 3.2637 2 4.00008V13.3334C2 14.0698 2.59695 14.6667 3.33333 14.6667H12.6667C13.403 14.6667 14 14.0698 14 13.3334V4.00008C14 3.2637 13.403 2.66675 12.6667 2.66675Z" stroke="#23a1b2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.6667 1.33337V4.00004" stroke="#23a1b2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.33334 1.33337V4.00004" stroke="#23a1b2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 6.66675H14" stroke="#23a1b2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <p class="more-dates-button-text">
                            <span>More dates</span>
                        </p>
                    </div>
                </div>
            `;
            
            const insertInputField = instance.isMobile ? instance.mobileInput : instance.input;

            // insertInputField.insertAdjacentHTML("afterend", `<p class="TextBlock">All prices are in AED (AED)</p>`);

            // Insert after input
            insertInputField.insertAdjacentElement("afterend", container);

            console.log(instance);

            // Click handlers for each button
            container.querySelectorAll(".DateListItem").forEach(btn => {
                btn.addEventListener("click", () => {
                    const date = new Date(btn.dataset.date);
                    instance.setDate(date, true);
                    instance.close();
                });
            });

            // Attach click event to 'MoreDatesButton' if it exists, to open the flatpickr calendar
            const moreDatesBtn = container.querySelector('.MoreDatesButton');
            moreDatesBtn?.addEventListener("click", () => instance.open());
        }
    }

    // Flatpickr
    handleFlatpickr({
        selector: "#flatpickr-range",
        mode: "single", // or "range"
        addCustomButtons: true,
        scrollContainerSelector: "#mainContent"
    });
});
