$(function(){
    $('.my-card').each(function(index){
        $(this).hover(function(){
            $(this).addClass('my-card-active');
        },function(){
            $(this).removeClass('my-card-active');
        })
    });

    $('#team .team-active-img').each(function(index){
        $(this).hover(function(){
            $(this).addClass('teamimg-active');
        },function(){
            $(this).removeClass('teamimg-active');
        })
    });

    $('#design .design-img-col').each(function(index){
        $(this).hover(function(){
            $(this).addClass('design-img-active');
        },function(){
            $(this).removeClass('design-img-active');
        })
    });

    $('#homeClick').hover(function(){
        $(this).html('首 页');
    },function(){
        $(this).html('Home');
    })
    $('#designClick').hover(function(){
        $(this).html('设计项目');
    },function(){
        $(this).html('Design');
    })
    $('#serviceClick').hover(function(){
        $(this).html('服 务');
    },function(){
        $(this).html('Service');
    })
    $('#aboutClick').hover(function(){
        $(this).html('关于我们');
    },function(){
        $(this).html('About Us');
    })
    $('#contactClick').hover(function(){
        $(this).html('联系我们');
    },function(){
        $(this).html('Contact Us');
    })
});
