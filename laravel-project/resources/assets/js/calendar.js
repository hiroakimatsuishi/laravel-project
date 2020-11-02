import moment from 'moment';

////当月の最初の日
//let date = moment().startOf("month");
//console.log(date);
//
////当月の最初の日の曜日　ex)2020/10/01は木曜日=4
//const dateNum = date.day();
//console.log(dateNum)
//
//let firstDay = date.subtract(dateNum, 'days');
//console.log(firstDay);

export default {
  data () {
    return {
      currentDate: moment(),
    };
  },
  methods: {
    getStartDate() {
      let date = moment(this.currentDate);
      date.startOf("month");
      const dateNum = date.day();
      return date.substract(dateNum, "days");
    }
  }
};

