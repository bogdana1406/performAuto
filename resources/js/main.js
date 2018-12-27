$(document).ready(function() {

    //====Counter====

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 2);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }

    //====Custom select====
var customSelect = function () {
    var divCustomSelect, i, j, selElmnt, divSelected, divArrOptions, c;
    /*look for any elements with the class "custom-select":*/
    divCustomSelect = document.getElementsByClassName("custom-select");
    for (i = 0; i < divCustomSelect.length; i++) {
        if (divCustomSelect[i].querySelector('div.select-selected')) {
            divCustomSelect[i].querySelector('div.select-selected').remove();
        }

        if (divCustomSelect[i].querySelector('div.select-items.select-hide')) {
            divCustomSelect[i].querySelector('div.select-items.select-hide').remove();
        }

        selElmnt = divCustomSelect[i].getElementsByTagName("select")[0];
        /*for each element, create a new DIV that will act as the selected item:*/
        divSelected = document.createElement("DIV");
        divSelected.setAttribute("class", "select-selected");

        divSelected.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        divCustomSelect[i].appendChild(divSelected);
        /*for each element, create a new DIV that will contain the option list:*/
        divArrOptions = document.createElement("DIV");
        divArrOptions.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {

                        onChangeSelect(s.options[i].value);

                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            divArrOptions.appendChild(c);
        }
        divCustomSelect[i].appendChild(divArrOptions);
        divSelected.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
};

    customSelect();

    function onChangeSelect(idBrand) {
        $.ajax({
            url: '/filter-brands/'+idBrand,
            type: "GET",
            dataType: "json",

            success: function(data) {
                if (data.length) {
                    var defaultOption = $('select[name="model"]').children().first();

                    $('select[name="model"]').empty();

                    $('select[name="model"]').append(defaultOption);

                    $.each(data, function (key, val) {
                        $('select[name="model"]').append('<option value="' + val + '">' + val + '</option>')
                    });
                }
                customSelect();
            }

        })
    }

    //====Price trackbar====

    // $("#priceBar").slider({ min: 5000, max: 25000, range: true, value: [0, 15000] });
    $("#priceBar").on("slide", function(slideEvt) {
        $("#priceBarCurrentSliderVal").text(slideEvt.value);
    });

    // Call a method on the slider
    // var value = priceBar.getValue();

    //====Filtered gallery with light box====

    // filter
    $('#gallery-filter a').on('click', function(event) {
        event.preventDefault();
        // active class
        $('#gallery-filter a.active').removeClass('active');
        $(this).addClass('active');

    });



    //====Youtube script====

    if (document.getElementById('videoBox')) {

        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        onYouTubeIframeAPIReady = function() {
            player = new YT.Player('player', {
                height: '480',
                width: '850',
                videoId: '8AfYdq6kU7I', // youtube video id
                playerVars: {
                    'autoplay': 0,
                    'rel': 0,
                    'showinfo': 0,
                    'controls': 0
                },
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        var p = document.getElementById("player");
        $(p).hide();

        var t = document.getElementById("thumbnail");
        t.src = "/images/video-thtumb.jpg";

        onPlayerStateChange = function(event) {
            if (event.data == YT.PlayerState.ENDED) {
                $('.start-video').fadeIn('normal');
            }
        }

        $(document).on('click', '.start-video', function() {
            $(this).hide();
            $("#player").show();
            $("#thumbnail_container").hide();
            player.playVideo();
        });
    };

    //====Owl-carousel====

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    //====Smooth scrolling====

    $(".toContacts").click(function() {
        $('html, body').animate({
            scrollTop: $("#contacts").offset().top
        }, 750);
    });

    //====Car slider====

    $("#lightSlider").lightSlider({
        item: 5,
        autoWidth: true,
        slideMove: 3, // slidemove will be 1 if loop is true
        slideMargin: 10,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        vertical: true,
        verticalHeight: 500,
        vThumbWidth: 80,

        thumbItem: 5,
        pager: true,
        gallery: true,
        galleryMargin: 40,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,
    });

    // var galleryUl = document.getElementById('lightSlider'),
    //     n         = galleryUl.children.length,
    //     ol        = document.getElementById('sliderIndicators'),
    //     vList     = document.createDocumentFragment();
    // for (var i = 0; i < n-1; i++) {
    //     var li = document.createElement('li');
    //     vList.appendChild(li);
    // }
    // ol.appendChild(vList);

    // var sideUl = document.getElementsByClassName('lSGallery')[0],
    //     imgs   = sideUl.getElementsByTagName('img');
    //     console.log(imgs);
    // sideUl.onclick = function(event) {
    //     var target = event.target;

    //     while (target != sideUl) {
    //         if (target.tagName == 'ul') {
    //             concole.log('!!!');
    //             return;
    //         }
    //     }
    //     target = target.parentNode;
    // }   

});
