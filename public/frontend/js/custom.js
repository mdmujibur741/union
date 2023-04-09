(function($) {
    "use strict";

    // Mobile Navigation
    if ($('.main-nav').length) {
        var $mobile_nav = $('.main-nav').clone().prop({
            class: 'mobile-nav d-lg-none'
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
        $('body').append('<div class="mobile-nav-overly"></div>');

        $(document).on('click', '.mobile-nav-toggle', function(e) {
            $('body').toggleClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
            $('.mobile-nav-overly').toggle();
        });

        $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
            e.preventDefault();
            $(this).next().slideToggle(300);
            $(this).parent().toggleClass('active');
        });

        $(document).click(function(e) {
            var container = $(".mobile-nav, .mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('.mobile-nav-overly').fadeOut();
                }
            }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide();
    }

})(jQuery);

window.onload = function() {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 0
    });
};
$(document).ready(function() {
    $('.my-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 300,
        infinite: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        autoplaySpeed: 5000,
        autoplay: false,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }]
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        selectedDay,
        setDate,
        daysLen = days.length;
    // options should like '2014-01-01'
    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }

    Calendar.prototype.draw = function() {
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');

        pre[0].addEventListener('click', function() {
            that.preMonth();
        });
        next[0].addEventListener('click', function() {
            that.nextMonth();
        });
        reset.addEventListener('click', function() {
            that.reset();
        });
        while (daysLen--) {
            days[daysLen].addEventListener('click', function() {
                that.clickDay(this);
            });
        }
    };

    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month');

        e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;
        headMonth[0].innerHTML = monthTag[month] + " - " + year;
    };

    Calendar.prototype.drawDays = function() {
        var startDay = new Date(year, month, 1).getDay(),
            //      下面表示这个月总共有几天
            nDays = new Date(year, month + 1, 0).getDate(),

            n = startDay;
        //      清除原来的样式和日期
        for (var k = 0; k < 42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
        }

        for (var i = 1; i <= nDays; i++) {
            days[n].innerHTML = i;
            n++;
        }

        for (var j = 0; j < 42; j++) {
            if (days[j].innerHTML === "") {

                days[j].id = "disabled";

            } else if (j === day + startDay - 1) {
                if ((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth()) && (year === today.getFullYear()))) {
                    this.drawHeader(day);
                    days[j].id = "today";
                }
            }
            if (selectedDay) {
                if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay.getMonth()) && (year === selectedDay.getFullYear())) {
                    days[j].className = "selected";
                    this.drawHeader(selectedDay.getDate());
                }
            }
        }
    };

    Calendar.prototype.clickDay = function(o) {
        var selected = document.getElementsByClassName("selected"),
            len = selected.length;
        if (len !== 0) {
            selected[0].className = "";
        }
        o.className = "selected";
        selectedDay = new Date(year, month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);

    };

    Calendar.prototype.preMonth = function() {
        if (month < 1) {
            month = 11;
            year = year - 1;
        } else {
            month = month - 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };

    Calendar.prototype.nextMonth = function() {
        if (month >= 11) {
            month = 0;
            year = year + 1;
        } else {
            month = month + 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };

    Calendar.prototype.getOptions = function() {
        if (this.options) {
            var sets = this.options.split('-');
            setDate = new Date(sets[0], sets[1] - 1, sets[2]);
            day = setDate.getDate();
            year = setDate.getFullYear();
            month = setDate.getMonth();
        }
    };

    Calendar.prototype.reset = function() {
        month = today.getMonth();
        year = today.getFullYear();
        day = today.getDate();
        this.options = undefined;
        this.drawDays();
    };

    Calendar.prototype.setCookie = function(name, expiredays) {
        if (expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else {
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };

    Calendar.prototype.getCookie = function(name) {
        if (document.cookie.length) {
            var arrCookie = document.cookie.split(';'),
                nameEQ = name + "=";
            for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1, c.length);

                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay = new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();


}, false);


var player = $('.player'),
    audio = player.find('audio'),
    duration = $('.duration'),
    currentTime = $('.current-time'),
    progressBar = $('.progress span'),
    mouseDown = false,
    rewind, showCurrentTime;

function secsToMins(time) {
    var int = Math.floor(time),
        mins = Math.floor(int / 60),
        secs = int % 60,
        newTime = mins + ':' + ('0' + secs).slice(-2);

    return newTime;
}

function getCurrentTime() {
    var currentTimeFormatted = secsToMins(audio[0].currentTime),
        currentTimePercentage = audio[0].currentTime / audio[0].duration * 100;

    currentTime.text(currentTimeFormatted);
    progressBar.css('width', currentTimePercentage + '%');

    if (player.hasClass('playing')) {
        showCurrentTime = requestAnimationFrame(getCurrentTime);
    } else {
        cancelAnimationFrame(showCurrentTime);
    }
}

audio.on('loadedmetadata', function() {
    var durationFormatted = secsToMins(audio[0].duration);
    duration.text(durationFormatted);
}).on('ended', function() {
    if ($('.repeat').hasClass('active')) {
        audio[0].currentTime = 0;
        audio[0].play();
    } else {
        player.removeClass('playing').addClass('paused');
        audio[0].currentTime = 0;
    }
});

$('button').on('click', function() {
    var self = $(this);

    if (self.hasClass('play-pause') && player.hasClass('paused')) {
        player.removeClass('paused').addClass('playing');
        audio[0].play();
        getCurrentTime();
    } else if (self.hasClass('play-pause') && player.hasClass('playing')) {
        player.removeClass('playing').addClass('paused');
        audio[0].pause();
    }

    if (self.hasClass('shuffle') || self.hasClass('repeat')) {
        self.toggleClass('active');
    }
}).on('mousedown', function() {
    var self = $(this);

    if (self.hasClass('ff')) {
        player.addClass('ffing');
        audio[0].playbackRate = 2;
    }

    if (self.hasClass('rw')) {
        player.addClass('rwing');
        rewind = setInterval(function() { audio[0].currentTime -= .3; }, 100);
    }
}).on('mouseup', function() {
    var self = $(this);

    if (self.hasClass('ff')) {
        player.removeClass('ffing');
        audio[0].playbackRate = 1;
    }

    if (self.hasClass('rw')) {
        player.removeClass('rwing');
        clearInterval(rewind);
    }
});

player.on('mousedown mouseup', function() {
    mouseDown = !mouseDown;
});

progressBar.parent().on('click mousemove', function(e) {
    var self = $(this),
        totalWidth = self.width(),
        offsetX = e.offsetX,
        offsetPercentage = offsetX / totalWidth;

    if (mouseDown || e.type === 'click') {
        audio[0].currentTime = audio[0].duration * offsetPercentage;
        if (player.hasClass('paused')) {
            progressBar.css('width', offsetPercentage * 100 + '%');
        }
    }
});