<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>daet</title>
        <link rel="stylesheet" href="date.css" />
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.css' rel='stylesheet' />
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js'></script>
        <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'timeGridWeek',
          selectable: true,
          businessHours: {

          daysOfWeek: [ 0, 2, 3, 4, 5 ,6 ],

             startTime: '9:00',
             endTime: '18:00',
          },
          dateClick: function(info) {
              document.getElementById('date_start').value = info.dateStr;
          }
        });
        calendar.render();
      });
        </script>
    </head>
    <body>
        <div id='calendar'></div>
        <div class="date">
            <form action="/check" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="name" value="{{ $owner }}" id="name" name="name">
                <input type="hidden" name="date_start" value="" id="date_start" name="date_start">
                <p><input type="submit" value="next"></p>
            </form>
        </div>
    </body>
</html>
