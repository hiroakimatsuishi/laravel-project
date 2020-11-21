<template>
  <div>
    <div class="calendar-content">
      <p class="calendar-header">Today is {{ currentDate }}</p>
    </div>
    <div class="calendar-content calendars-box">
      <div
        v-for="item in calendar"
        :key="item.date"
        class="day"
      >
        <p>{{ item.date }}({{ item.day }})</p>
      </div>
    </div>
  </div>
</template>

<script>
import moment from 'moment';

export default {
  data () {
    return {
      currentDate: moment().format('YYYY/MM/DD'),
    };
  },
  methods: {
    getCalendar() {
      let  m = moment();
      let calendars = [];
      let dayName = ["日","月","火","水","木","金","土"];

      for (let i = 0; i <= 6; i++){
        // 日付の取得
        let date = m.get("date");
        // 曜日の取得
        let dayNum = m.day();
        let day = dayName[dayNum];

        // 日付と曜日を配列(calendars)に追加
        let calendarItem = {};
        calendarItem.day = day;
        calendarItem.date = date;
        calendars.push(calendarItem);
        m.add(1, 'days');
      }

      console.log(calendars);
      return calendars;
    }
  },
  computed: {
    calendar() {
      return this.getCalendar()
    },
  },
}
</script>

<style>
.calendars-box {
  display: flex;
}
.day {
  width: 85px;
  height: 85px;
  background: rgba(194, 184, 184, 0.479);
  border: 1px solid black;
}
.calendar-content {
  margin-top: 10px;
}
.calendar-content:first-child {
  margin-top: 0;
}
.calendar-header {
  font-size: 25px;
  font-weight: bold;
}

</style>
