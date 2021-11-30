$(document).ready(function() {
    $("#datepicker1").datepicker({
        todayHighlight: true, 
        format: 'yyyy-mm-dd', 
        startDate: new Date(), 
        endDate: new Date('2022-5-31'),
        toggleActive: true,
    });     
});
