


import { Calendar } from '@fullcalendar/core';
import interactionPlugin, { Draggable } from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    let draggableEl = document.getElementById('mydraggable');
    let calendarEl = document.getElementById('mycalendar');

    let calendar = new Calendar(calendarEl, {
        plugins: [ interactionPlugin ],
        droppable: true
    });
    calendar.render();

    let draggable = new Draggable(draggableEl);

    // when you're done...
    // draggable.destroy();
});