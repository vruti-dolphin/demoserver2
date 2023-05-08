require(['jquery', 'jquery/ui', 'slick'], function($) {
    $(document).ready(function() {
        $("#element").accordion({
            header : "#title-1",
            content : "#content-1",
            trigger : "#trigger-1",
            ajaxUrlElement: "a"
        });
    });     
});