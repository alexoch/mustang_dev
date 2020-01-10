/*
@init feather icons
*/
feather.replace()

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function showModal() {
    var myCookie = getCookie("lang");
    console.log(myCookie+document.cookie);
    if(myCookie==null){
        $(".modal").show();
        $(".back1").show();
    }
}
$(".modal_inf").click(function () {
    $(".modal").hide();
    $(".back1").hide();
    document.cookie = "lang=ru;path=/;";
});

showModal();

/*
@big slider for index page
*/
if($('.main-slider').is("div")){
    var slider = new Siema({
        selector: '.main-slider',
        duration: 500,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: false,
        rtl: false,
        onChange: checkDots
    });
    function checkDots() {
        clickDot(this.currentSlide, this)
    }

    Siema.prototype.addPagination = function() {
        var btn_wrapper = document.createElement('div');
        btn_wrapper.classList.add("dots");
        for (let i = 0; i < this.innerElements.length; i++) {
            var btn = document.createElement('button');
            if(!i) {
                btn.classList.add('dot-active');
            }
            btn.classList.add('dot');
            btn.addEventListener('click', () => clickDot(i, this));
            btn_wrapper.appendChild(btn);
        }
        this.selector.appendChild(btn_wrapper);
    }

    slider.addPagination();
    function clickDot(i, context) {
        context.goTo(i);
        let dotList = document.getElementsByClassName('dot');
        for( var j = 0; j < dotList.length; j++) {
            dotList[j].classList.remove('dot-active');
        }
        dotList[i].classList.add('dot-active');
    }
    setInterval(() => slider.next(), 10000)


}


if ($('.contacts_slider').is("div")){
    var slider = new Siema({
        selector: '.contacts_slider',
        duration: 500,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: false,
        rtl: false,
        onChange: checkDots
    });
    Siema.prototype.addPagination = function() {
        var btn_wrapper = document.createElement('div');
        btn_wrapper.classList.add("dots");
        for (let i = 0; i < this.innerElements.length; i++) {
            var btn = document.createElement('button');
            if(!i) {
                btn.classList.add('dot-active');
            }
            btn.classList.add('dot');
            btn.addEventListener('click', () => clickDot(i, this));
            btn_wrapper.appendChild(btn);
        }
        this.selector.appendChild(btn_wrapper);
    }

    slider.addPagination();
    function clickDot(i, context) {
        context.goTo(i);
        let dotList = document.getElementsByClassName('dot');
        for( var j = 0; j < dotList.length; j++) {
            dotList[j].classList.remove('dot-active');
        }
        dotList[i].classList.add('dot-active');
    }
    function checkDots() {
        clickDot(this.currentSlide, this)
    }

    setInterval(() => slider.next(), 5000)
}

if ($('.gallery_photos').is("dl")){
    var slider = new Siema({
        selector: '.gallery_photos',
        duration: 500,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: true,
        rtl: false,
        onChange: checkDots
    });

    Siema.prototype.addPagination = function() {
        var btn_wrapper = document.createElement('div');
        btn_wrapper.classList.add("dots");
        for (let i = 0; i < this.innerElements.length; i++) {
            var btn = document.createElement('button');
            if(!i) {
                btn.classList.add('dot-active');
            }
            btn.classList.add('dot');
            btn.addEventListener('click', () => clickDot(i, this));
            btn_wrapper.appendChild(btn);
        }
        this.selector.appendChild(btn_wrapper);
        console.log("pagination added");
    };

    slider.addPagination();
    function clickDot(i, context) {
        context.goTo(i);
        let dotList = document.getElementsByClassName('dot');
        for( var j = 0; j < dotList.length; j++) {
            dotList[j].classList.remove('dot-active');
        }
        dotList[i].classList.add('dot-active');
    }
    function checkDots() {
        clickDot(this.currentSlide, this)
    }
    setInterval(() => slider.next(), 5000)
}


var id;

$(function() {
    $('.land').hover(function(event) {
        id = "."+event.currentTarget.classList[1];
        $('.description').find(id).addClass('border');
        $(id).addClass('active');
    }, function(e) {
        $(id).removeClass('active');
        $('.description').find(id).removeClass('border');
    });
});
