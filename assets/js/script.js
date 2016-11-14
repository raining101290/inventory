var Inventory = function () {
    var iCheck = function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-green',
            radioClass: 'iradio_minimal-green',
            increaseArea: '20%'
        });
    };
    var HandleTooltips = function(){
        $('.tooltips').tooltip();
        $(document).on('click', '.tools a.body-collapsed', function(){
            $(this).removeClass('body-collapsed');
            $(this).addClass('body-collapse');
            $(this).closest('.white-block').find('.body-bar').slideToggle();
        });
        $(document).on('click', '.tools a.body-collapse', function(){
            $(this).removeClass('body-collapse');
            $(this).addClass('body-collapsed');
            $(this).closest('.white-block').find('.body-bar').slideToggle();
        });
        $('.header-bar > .tools .verified').tooltip({
            container: 'body',
            title: 'Verified'
        });
        $('.header-bar > .tools .unverified').tooltip({
            container: 'body',
            title: 'Unverified'
        });
        $('.header-bar > .tools .body-collapse, .header-bar > .tools .body-collapsed').tooltip({
            container: 'body',
            title: 'Collapse/Expand'
        });
        $('.work-entry span.verified').tooltip({
            container: 'body',
            title: 'Verified'
        });
        $('.work-entry span.unverified').tooltip({
            container: 'body',
            title: 'Unverified'
        });
    };
    var ViewMore = function(){
        $('.data-more-less').click(function(){
            var parentpanel = $(this).data('collapse');
            if($(this).hasClass('btn-data-more'))
            {
                $(this).text('View Less');
                $(this).removeClass('btn-data-more');
                $(this).addClass('btn-data-less');
                $(parentpanel +' '+ '.data-less').hide();
                $(parentpanel +' '+ '.data-more').show();
            }
            else
            {
                $(this).text('View More');
                $(this).removeClass('btn-data-less');
                $(this).addClass('btn-data-more');
                $(parentpanel +' '+ '.data-more').hide();
                $(parentpanel +' '+ '.data-less').show();
            }
        });
    };
    var AjaxMenuHandler = function(){
        $('.ajax-menu a').unbind().bind('click', function(){
            var AjaxContentHolder = $(this).parents().data('target');
            var PageName = $(this).data('source');
            $.get("files/"+PageName+".html", function(data){
                $('#'+AjaxContentHolder).html('');
                $('#'+AjaxContentHolder).append(data);
                Raasforce.init();
            });
        });            
    };
    var BasicFunctions = function() {
        $('.job-listing-type a').click(function(){
            var type = $(this).data('orientation');
            if(!$(this).hasClass('active')){
                $('.listing-type a').removeClass('active');
                $(this).addClass('active');
                if(type == "list"){
                    $('.job-list-container').addClass('list');
                    $('.job-list-container').removeClass('col-sm-3');
                    $('.job-list-container').addClass('col-sm-12');
                }
                else{
                    $('.job-list-container').removeClass('list');
                    $('.job-list-container').removeClass('col-sm-12');
                    $('.job-list-container').addClass('col-sm-3');  
                }
            }
        });
        $('.sidebar-collapse').click(function(){
            if($(this).closest('.filter-section').hasClass('collapsed')){
                $(this).closest('.filter-section').removeClass('collapsed');
                $(this).closest('.filter-section').find('.filter-body').slideDown();
            }
            else{
                $(this).closest('.filter-section').addClass('collapsed');   
                $(this).closest('.filter-section').find('.filter-body').slideUp();
            }
        });
    };
    var ViewMoreContent = function(){
        $('.viewmore').click(function(){
            $('.shorted-info').toggleClass('full');
            if ($(this).html() == "View Full"){
                $(this).html("View Less");
            }
            else{
                $(this).html("View Full");
            }
        });
    };
    var Notify = function(type, message, container){
        if(type == 0){
            $('.'+container).html('');
            $('.'+container).append('<div class="notification error" style="display:none"><button type="button" class="close"></button><p>'+ message +'</p></div>')
            $('.'+container).find('.notification').slideDown();
            setTimeout(function() {
                $('.'+container).find('.notification').slideUp();
            }, 2000);
        }
        else if(type == 1){
            $('.'+container).html('');
            $('.'+container).append('<div class="notification success" style="display:none"><button type="button" class="close"></button><p>'+ message +'</p></div>')
            $('.'+container).find('.notification').slideDown();
            setTimeout(function() {
                $('.'+container).find('.notification').slideUp();
            }, 2000);
        }
        $(document).on('click', '.notification .close', function(){
            $(this).closest('.notification').remove();
        });
    };
	return {
        Notify : Notify,
        init: function() {
            iCheck();
            HandleTooltips();
            ViewMore();
            AjaxMenuHandler();
            BasicFunctions();
            ViewMoreContent();
        }
    };
}();